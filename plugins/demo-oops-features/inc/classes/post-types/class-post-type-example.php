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
class Post_Type_Example extends Base {

	/**
	 * Slug of post type.
	 *
	 * @var string
	 */
	const SLUG = 'post-type-slug';

	/**
	 * Post type label for internal uses.
	 *
	 * @var string
	 */
	const LABEL = 'Post Type Label';

	/**
	 * To get list of labels for post type.
	 *
	 * @return array
	 */
	public function get_labels() {

		return [
			'name'               => _x( 'Post_Type_Label', 'post type general name', 'demo-oops-features' ),
			'singular_name'      => _x( 'Post_Type_Label', 'post type singular name', 'demo-oops-features' ),
			'menu_name'          => _x( 'Post_Type_Label', 'admin menu', 'demo-oops-features' ),
			'name_admin_bar'     => _x( 'Post_Type_Label', 'add new on admin bar', 'demo-oops-features' ),
			'add_new'            => _x( 'Add New', 'post', 'demo-oops-features' ),
			'add_new_item'       => __( 'Add New Post_Type_Label', 'demo-oops-features' ),
			'new_item'           => __( 'New Post_Type_Label', 'demo-oops-features' ),
			'edit_item'          => __( 'Edit Post_Type_Label', 'demo-oops-features' ),
			'view_item'          => __( 'View Post_Type_Label', 'demo-oops-features' ),
			'all_items'          => __( 'All Post_Type_Label', 'demo-oops-features' ),
			'search_items'       => __( 'Search Post_Type_Label', 'demo-oops-features' ),
			'parent_item_colon'  => __( 'Parent Post_Type_Label:', 'demo-oops-features' ),
			'not_found'          => __( 'No Post_Type_Label found.', 'demo-oops-features' ),
			'not_found_in_trash' => __( 'No Post_Type_Label found in Trash.', 'demo-oops-features' ),
		];

	}

}
