<?php

/**
 * Author: imsamurai <im.samuray@gmail.com>
 * Date: 12.07.2013
 * Time: 20:31:36
 *
 */
App::uses('DboSource', 'Model/Datasource');
App::uses('FacebookFQLConnection', 'FacebookFQLSource.Model/Datasource');

/**
 * This source is made for build fql queries
 */
class FacebookFQLDboSource extends DboSource {
	/**
	 * {@inheritdoc}
	 *
	 * @var string
	 */
	public $alias = '';

	public function connect() {
		$this->_connection = new FacebookFQLConnection();
		$this->connected = true;
		$this->_useAlias = false;
		return $this->connected;
	}
}