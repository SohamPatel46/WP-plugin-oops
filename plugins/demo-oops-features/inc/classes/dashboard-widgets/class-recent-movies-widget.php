<?php
/**
 * To register custom dashboard Widgets.
 *
 * @package demo-oops-features
 */

namespace Demo_oops\Features\Inc\Dashboard_Widgets;

use Demo_oops\Features\Inc\Traits\Singleton;

/**
 * Class Recent_Movies_Widget
 */
class Recent_Movies_Widget {

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
		add_action( 'wp_dashboard_setup', array( $this, 'mlib_add_dashboard_widgets' ) );

	}

	/**
	 * Add a widget to the dashboard.
	 *
	 * This function is hooked into the 'wp_dashboard_setup' action below.
	 */
	public function mlib_add_dashboard_widgets() {
		wp_add_dashboard_widget(
			'mlib_dashboard_widget',                          // Widget slug.
			__( 'Movies Information', 'movie-plugin' ),             // Title.
			array( $this, 'mlib_dashboard_widget_render' )      // Display function.
		);
	}

	/**
	 * To render UI of widget
	 *
	 * @return void
	 */
	public function mlib_dashboard_widget_render() {

		$args = array(
			'post_type'              => 'soham-pt',
			'no_found_rows'          => true,   // pagination not added now .
			'update_post_meta_cache' => false,  // post meta not fetched .
			'update_post_term_cache' => false,  // taxonomy terms not fetched .
			'fields'                 => 'ids',
		);

		$most_recent     = new \WP_Query( $args );
		$most_recent_ids = $most_recent->posts;

		demo_oops_features_template(
			'dashboard-widget',
			array( 'most_recent_ids' => $most_recent_ids ),
			true
		);
	}

}
