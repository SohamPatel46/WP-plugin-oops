<?php
/**
 * To load all classes that register post type.
 *
 * @package demo-oops-features
 */

namespace Demo_oops\Features\Inc;

use \Demo_oops\Features\Inc\Traits\Singleton;
use \Demo_oops\Features\Inc\Post_Types\Post_Type_Example;
use \Demo_oops\Features\Inc\Post_Types\Soham_Pt;


/**
 * Class Post_Types
 */
class Post_Types {

	use Singleton;

	/**
	 * To store instance of post type.
	 *
	 * @var array List of instance of post type.
	 */
	protected static $instances = array();

	/**
	 * Construct method.
	 */
	protected function __construct() {
		$this->register_post_types();
	}

	/**
	 * To initiate all post type instance.
	 *
	 * @return void
	 */
	protected function register_post_types() {

		self::$instances = array(
			Post_Type_Example::SLUG => Post_Type_Example::get_instance(),
			Soham_Pt::SLUG          => Soham_Pt::get_instance(),

		);

	}

	/**
	 * To get instance of all post types.
	 *
	 * @return array List of instances of the post types.
	 */
	public static function get_instances() {
		return self::$instances;
	}

	/**
	 * Get slug list of all custom post type.
	 *
	 * @return array List of slugs.
	 */
	public static function get_post_types() {
		return array_keys( self::$instances );
	}

}
