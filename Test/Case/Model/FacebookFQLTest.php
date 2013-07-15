<?

/**
 * Author: imsamurai <im.samuray@gmail.com>
 * Date: 12.07.2013
 * Time: 14:42:00
 * Format: http://book.cakephp.org/2.0/en/development/testing.html
 */
require_once dirname(__FILE__) . DS . 'models.php';

class FacebookFQLTest extends CakeTestCase {

	/**
	 * FacebookFQL Model
	 *
	 * @var FacebookFQL
	 */
	public $FacebookFQL = null;

	public function setUp() {
		parent::setUp();
		$this->_setConfig();
	}

	protected function _setConfig() {
		Configure::delete('FacebookFQLSource');
		Configure::load('FacebookFQLSource.FacebookFQLSource');
	}

	protected function _loadModel($config_name = 'facebookFQLSource', $config = array()) {
		$db_configs = ConnectionManager::enumConnectionObjects();

		if (!empty($db_configs['facebookFQLTest'])) {
			$TestDS = ConnectionManager::getDataSource('facebookFQLTest');
			$config += $TestDS->config;
		} else {
			$config += array(
				'datasource' => 'FacebookFQLSource.Http/FacebookFQLSource',
				'host' => 'graph.facebook.com',
				'path' => 'fql',
				'port' => 443,
				'timeout' => 5,
				'auth' => array(
			'name' => 'oauth',
			'version' => '2.0'
				) + Configure::read('FacebookFQLSourceTest.consumer')
			);
		}

		ConnectionManager::create($config_name, $config);
		$this->FacebookFQL = new FacebookFQL(false, null, $config_name);
	}

	public function test_simple_query() {
		$this->_loadModel();
		$this->FacebookFQL->setSource('profile');
		$this->FacebookFQL->setCredentials(Configure::read('FacebookFQLSourceTest.credentials'));
		$params = array(
			'conditions' => array(
				'id' => '100001921850606'
			),
			'fields' => array(
				'username'
			)
		);
//
		$result = $this->FacebookFQL->find('first', $params);
		debug($result);
		$this->assertNotSame(false, $result);
		$this->assertNotEmpty($result['FacebookFQL']['username']);
	}

	public function test_function_query() {
		$this->_loadModel();
		$this->FacebookFQL->setSource('profile');
		$this->FacebookFQL->setCredentials(Configure::read('FacebookFQLSourceTest.credentials'));
		$params = array(
			'conditions' => array(
				'id' => 'me()'
			),
			'fields' => array(
				'username'
			)
		);
//
		$result = $this->FacebookFQL->find('first', $params);
		debug($result);
		$this->assertNotSame(false, $result);
		$this->assertNotEmpty($result['FacebookFQL']['username']);
	}

	public function test_sub_query() {
		$this->_loadModel();
		$this->FacebookFQL->setSource('user');
		$this->FacebookFQL->setCredentials(Configure::read('FacebookFQLSourceTest.credentials'));

		$db = $this->FacebookFQL->getDataSource();
		$subquery = $db->buildStatement(array(
			'fields' => array('uid2'),
			'table' => 'friend',
			'conditions' => array(
				'uid1' => 'me()'
			),
				), $this->FacebookFQL
		);
		$params = array(
			'conditions' => array(
				'OR' => array(
					'uid' => 'me()',
					"uid IN ($subquery)"
				)
			),
			'fields' => array(
				'uid', 'name', 'pic_square'
			)
		);
//
		$result = $this->FacebookFQL->find('first', $params);
		debug($result);
		$this->assertNotSame(false, $result);
		$this->assertNotEmpty($result['FacebookFQL']['uid']);
		$this->assertNotEmpty($result['FacebookFQL']['name']);
		$this->assertNotEmpty($result['FacebookFQL']['pic_square']);
	}

}