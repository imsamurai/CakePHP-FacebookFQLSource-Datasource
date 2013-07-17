<?php

/**
 * Author: imsamurai <im.samuray@gmail.com>
 * Date: 12.07.2013
 * Time: 14:42:00
 * Format: https://github.com/imsamurai/cakephp-httpsource-datasource
 */
App::uses('HttpSource', 'HttpSource.Model/Datasource');
App::uses('FacebookFQLConnection', 'FacebookFQLSource.Model/Datasource');

class FacebookFQLSource extends HttpSource {

	/**
	 * Facebook FQL Graph API Datasource
	 *
	 * @var string
	 */
	public $description = 'FacebookFQLSource DataSource';

	/**
	 * {@inheritdoc}
	 *
	 * @param array $config
	 * @param HttpSourceConnection $Connection
	 */
	public function __construct($config = array(), HttpSourceConnection $Connection = null) {
		parent::__construct($config, new FacebookFQLConnection($config));
	}

	/**
	 * {@inheritdoc}
	 */
	public function update(Model $model, $fields = null, $values = null, $conditions = null) {
		$this->_operationNotAllowed();
	}

	/**
	 * {@inheritdoc}
	 */
	public function delete(Model $model, $conditions = null) {
		$this->_operationNotAllowed();
	}

	/**
	 * {@inheritdoc}
	 */
	public function create(Model $model, $fields = null, $values = null) {
		$this->_operationNotAllowed();
	}

	/**
	 * Exception shortcut
	 *
	 * @throws HttpSourceException
	 */
	protected function _operationNotAllowed() {
		throw new HttpSourceException('You can use FQL only for read method!');
	}

	/**
	 * Builds and generates an SQL statement from an array.	 Handles final clean-up before conversion.
	 *
	 * @param array $query An array defining an SQL query
	 * @param Model $Model The model object which initiated the query
	 *
	 * @return string An executable SQL statement
	 */
	public function buildStatement($query, Model $Model) {
		return FacebookFQLSourceEndpoint::buildStatement($query, $Model);
	}

}