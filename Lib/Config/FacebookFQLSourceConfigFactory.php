<?php

/**
 * Author: imsamurai <im.samuray@gmail.com>
 * Date: 12.07.2013
 * Time: 14:42:00
 *
 */
App::uses('HttpSourceConfigFactory', 'HttpSource.Lib/Config');
App::uses('FacebookFQLSourceEndpoint', 'FacebookFQLSource.Lib/Config');

/**
 * Factory to make FacebookFQLSource configuration
 */
class FacebookFQLSourceConfigFactory extends HttpSourceConfigFactory {

	/**
	 * Create endpoint
	 *
	 * @return FacebookFQLSourceEndpoint
	 */
	public function endpoint() {
		return new FacebookFQLSourceEndpoint($this);
	}

}