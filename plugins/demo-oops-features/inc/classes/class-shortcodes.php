<?php
/**
 * Class for custom setting page.
 *
 * @package demo-oops-features
 */

namespace Demo_oops\Features\Inc;

use Demo_oops\Features\Inc\Traits\Singleton;
use Demo_oops\Features\Inc\Shortcodes\Soham_Shortcode;

/**
 * Class Settings
 */
class Shortcodes {

	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {

		$this->register_shortcodes();

	}

	/**
	 * To setup action/filter.
	 *
	 * @return void
	 */
	protected function register_shortcodes() {
		Soham_Shortcode::get_instance();
	}

}
