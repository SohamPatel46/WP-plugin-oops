<?php
/**
 * To load all classes that register dashboard widget.
 *
 * @package demo-oops-features
 */

namespace Demo_oops\Features\Inc;

use \Demo_oops\Features\Inc\Traits\Singleton;
use \Demo_oops\Features\Inc\Dashboard_Widgets\Recent_Movies_Widget;


/**
 * Class Widgets
 */
class Dashboard_Widgets {

	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {
		// Load all widgets classes.
		Recent_Movies_Widget::get_instance();
	}

}
