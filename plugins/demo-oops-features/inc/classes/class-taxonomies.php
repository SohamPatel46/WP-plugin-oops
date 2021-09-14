<?php
/**
 * To load all classes that register taxonomy.
 *
 * @package demo-oops-features
 */

namespace Demo_oops\Features\Inc;

use \Demo_oops\Features\Inc\Traits\Singleton;
use \Demo_oops\Features\Inc\Taxonomies\Taxonomy_Example;
use \Demo_oops\Features\Inc\Taxonomies\Patel_Tax;

/**
 * Class Taxonomies
 */
class Taxonomies {

	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {

		// Load all taxonomies classes.
		Taxonomy_Example::get_instance();
		Patel_Tax::get_instance();

	}

}
