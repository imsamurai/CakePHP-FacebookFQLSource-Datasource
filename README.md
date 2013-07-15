FacebookFQLSource Plugin
========================

CakePHP FacebookFQLSource Plugin with DataSource for [Facebook FQL Graph API](https://developers.facebook.com/docs/reference/fql/)

## Installation

### Step 1: Clone or download [HttpSource](https://github.com/imsamurai/cakephp-httpsource-datasource)

### Step 2: Clone or download to `Plugin/FacebookFQLSource`

  cd my_cake_app/app git://github.com/imsamurai/CakePHP-FacebookFQLSource-Datasource.git Plugin/FacebookFQLSource

or if you use git add as submodule:

	cd my_cake_app
	git submodule add "git://github.com/imsamurai/CakePHP-FacebookFQLSource-Datasource.git" "app/Plugin/FacebookFQLSource"

then update submodules:

	git submodule init
	git submodule update

### Step 3: Add your configuration to `database.php` and set it to the model

```
:: database.php ::

public $facebookFQL = array(
  'datasource' => 'FacebookFQLSource.Http/FacebookFQLSource',
        'host' => 'graph.facebook.com',
        'port' => 443
);

Then make model

:: FacebookFQL.php ::
public $useDbConfig = 'facebookFQL';
public $useTable = '<desired endpoint, for ex: "album">';

```

### Step 4: Load plugin

```
:: bootstrap.php ::
CakePlugin::load('HttpSource', array('bootstrap' => true, 'routes' => false));
CakePlugin::load('FacebookFQLSource');

```
#Tests

To run tests add and fill in your app:

```
Configure::write('FacebookFQLSourceTest', array(
	'credentials' => array(
		'oauth_token' => 'xxx',
		'oauth_token_secret' => 'xxx'
	),
	'consumer' => array(
		'oauth_consumer_key' => 'xxx',
		'oauth_consumer_secret' => 'xxx'
	)
));
```

#Usage

You can use facebook tables simply as db tables. Also you can make subqueries:
```
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

$result = $this->FacebookFQL->find('first', $params);
```

All complex conditions - OR, AND, etc should work fine.

#Documentation

Please read [HttpSource Plugin README](https://github.com/imsamurai/cakephp-httpsource-datasource/blob/master/README.md)
