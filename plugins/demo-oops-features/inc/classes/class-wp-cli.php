<?php
/**
 * Class for custom setting page.
 *
 * @package demo-oops-features
 */

namespace Demo_oops\Features\Inc;

use Demo_oops\Features\Inc\Traits\Singleton;

/**
 * Class Settings
 */
class WP_CLI {

	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {

		$this->register_commands();

	}

	/**
	 * To setup action/filter.
	 *
	 * @return void
	 */
	protected function register_commands() {
		if ( ! defined( 'WP_CLI' ) || ! WP_CLI ) {
			return;
		}

		\WP_CLI::add_command( 'soham-com', 'Demo_oops\Features\Inc\WP_CLI\Soham_Com' );

	}

}
