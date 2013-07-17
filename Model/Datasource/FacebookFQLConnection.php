<?php

/**
 * Author: imsamurai <im.samuray@gmail.com>
 * Date: 12.07.2013
 * Time: 20:35:28
 *
 */
App::uses('HttpSourceConnection', 'HttpSource.Model/Datasource');

class FacebookFQLConnection extends HttpSourceConnection {

	/**
	 * Quote data
	 *
	 * @param mixed $data
	 * @return mixed
	 */
	public function quote($data, $type = PDO::PARAM_STR) {
		switch ($type) {
			case PDO::PARAM_STR: {
					return preg_match('/^[a-z]{2,}\(\)$/i', trim($data)) ? $data : "'$data'";
				}
			case PDO::PARAM_BOOL: {
					return $data ? '1' : '0';
				}
			case PDO::PARAM_NULL: {
					return '';
				}
			default : {
					return $data;
				}
		}
	}

	/**
	 * {@inheritdoc}
	 *
	 * @return string
	 */
	public function _extractRemoteError() {
		try {
			$response = $this->_decode();
			$message = isset($response['error']['message']) ? $response['error']['message'] : 'can\'t decode answer';
		} catch (Exception $Exception) {
			$message = $Exception->getMessage();
		}
		return parent::_extractRemoteError() . " ($message)";
	}

}