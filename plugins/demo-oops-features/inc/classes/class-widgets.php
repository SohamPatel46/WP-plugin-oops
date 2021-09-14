<?php
/**
 * To load all classes that register widget.
 *
 * @package demo-oops-features
 */

namespace Demo_oops\Features\Inc;

use \Demo_oops\Features\Inc\Traits\Singleton;

/**
 * Class Widgets
 */
class Widgets {

	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {
		// Load all widgets classes.
	}

}
