<?php

/**
 * Author: imsamurai <im.samuray@gmail.com>
 * Date: 12.07.2013
 * Time: 14:42:00
 *
 */
App::uses('HttpSourceEndpoint', 'HttpSource.Lib/Config');
App::uses('FacebookFQLDboSource', 'FacebookFQLSource.Model/Datasource');

/**
 * FacebookFQL source endpoint
 */
class FacebookFQLSourceEndpoint extends HttpSourceEndpoint {

	/**
	 * Builds and generates an SQL statement from an array.	 Handles final clean-up before conversion.
	 *
	 * @param array $query An array defining an SQL query
	 * @param Model $Model The model object which initiated the query
	 *
	 * @return string An executable SQL statement
	 */
	public static function buildStatement($query, Model $Model) {
		return (new FacebookFQLDboSource())->buildStatement($query, $Model);
	}

	/**
	 * {@inheritdoc}
	 *
	 * @param Model $Model
	 * @param array $usedConditions List of conditions that must present in query
	 * @param array $queryData Query data: conditions, limit, etc
	 */
	protected function _buildQuery(Model $Model, array $usedConditions, array $queryData) {
		if (empty($queryData['fields'])) {
			throw new HttpSourceException('SELECT * is not supported.  Please manually list the columns you are interested in.');
		}

		$queryData['table'] = $this->table();

		$Model->request['uri']['query'] = array(
			'q' => static::buildStatement($queryData, $Model),
			'format' => 'json-strings'
		);
	}

}