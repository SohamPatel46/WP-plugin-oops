<?php
/**
 * Register Example post type.
 *
 * @package demo-oops-features
 */

namespace Demo_oops\Features\Inc\Shortcodes;

use Demo_oops\Features\Inc\Traits\Singleton;

/**
 * Class Post_Type_Example
 */
class Soham_Shortcode {

	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {

		$this->setup_hooks();

	}

	/**
	 * To register action/filter.
	 *
	 * @return void
	 */
	protected function setup_hooks() {

		/**
		 * Action
		 */
		add_shortcode( 'soham', array( $this, 'mlib_create_person_shortcode' ) );

	}

	/**
	 * This function creats shortcode for movie
	 *
	 * @param array $atts - shortcode attributes .
	 * @return string
	 */
	public function mlib_create_person_shortcode( $atts ) {

		$attributes = shortcode_atts(
			array(
				'gf' => null,
			),
			$atts
		);

		return '<h1> Soham loves ' . $attributes['gf'] . '</h1>';
	}
}
