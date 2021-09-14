<?php
/**
 * Register Example post type.
 *
 * @package demo-oops-features
 */

namespace Demo_oops\Features\Inc\Post_Types;

/**
 * Class Post_Type_Example
 */
class Soham_Pt extends Base {

	/**
	 * Slug of post type.
	 *
	 * @var string
	 */
	const SLUG = 'soham-pt';

	/**
	 * Post type label for internal uses.
	 *
	 * @var string
	 */
	const LABEL = 'Soham';

	/**
	 * To get list of labels for post type.
	 *
	 * @return array
	 */
	public function get_labels() {

		return array(
			'name'               => _x( 'Soham PT', 'post type general name', 'demo-oops-features' ),
			'singular_name'      => _x( 'Soham PT', 'post type singular name', 'demo-oops-features' ),
			'menu_name'          => _x( 'Soham PT', 'admin menu', 'demo-oops-features' ),
			'name_admin_bar'     => _x( 'Soham PT', 'add new on admin bar', 'demo-oops-features' ),
			'add_new'            => _x( 'Add New', 'post', 'demo-oops-features' ),
			'add_new_item'       => __( 'Add New Soham PT', 'demo-oops-features' ),
			'new_item'           => __( 'New Soham PT', 'demo-oops-features' ),
			'edit_item'          => __( 'Edit Soham PT', 'demo-oops-features' ),
			'view_item'          => __( 'View Soham PT', 'demo-oops-features' ),
			'all_items'          => __( 'All Soham PT', 'demo-oops-features' ),
			'search_items'       => __( 'Search Soham PT', 'demo-oops-features' ),
			'parent_item_colon'  => __( 'Parent Soham PT:', 'demo-oops-features' ),
			'not_found'          => __( 'No Soham PT found.', 'demo-oops-features' ),
			'not_found_in_trash' => __( 'No Soham PT found in Trash.', 'demo-oops-features' ),
		);

	}

	/**
	 * To get argument to register custom post type.
	 *
	 * To override arguments, defined this method in child class and override args.
	 *
	 * @return array
	 */
	public function get_args() {

		return array(
			'show_in_rest'  => true,
			'public'        => true,
			'has_archive'   => true,
			'menu_position' => 6,
			'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
			'menu_icon'     => 'dashicons-video-alt3',
			'rewrite'       => array(
				'slug'       => 'soham/%patel-tax%-%post_id%',
				'with_front' => true,
			),
		);

	}

}
