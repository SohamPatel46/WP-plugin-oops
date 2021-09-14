<?php
/**
 * To load all classes of third party plugin configuration.
 *
 * @package demo-oops-features
 */

namespace Demo_oops\Features\Inc;

use Demo_oops\Features\Inc\Traits\Singleton;
use Demo_oops\Features\Inc\Plugin_Configs\Fieldmanager;

/**
 * Class Plugin_Configs
 */
class Plugin_Configs {

	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {

		// Load all plugin configs classes.
		Fieldmanager::get_instance();

	}

}
