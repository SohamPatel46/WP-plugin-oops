<?php
/**
 * To register custom taxonomy.
 *
 * @package demo-oops-features
 */

namespace Demo_oops\Features\Inc\Taxonomies;

use Demo_oops\Features\Inc\Post_Types\Soham_Pt;

/**
 * Class Patel_Tax
 */
class Patel_Tax extends Base {

	/**
	 * Slug of taxonomy.
	 *
	 * @var string
	 */
	const SLUG = 'patel-tax';

	/**
	 * Labels for taxonomy.
	 *
	 * @return array
	 */
	public function get_labels() {

		return array(
			'name'                       => _x( 'Patel Tax', 'taxonomy general name', 'demo-oops-features' ),
			'singular_name'              => _x( 'Patel Tax', 'taxonomy singular name', 'demo-oops-features' ),
			'search_items'               => __( 'Search Patel Tax', 'demo-oops-features' ),
			'popular_items'              => __( 'Popular Patel Tax', 'demo-oops-features' ),
			'all_items'                  => __( 'All Patel Tax', 'demo-oops-features' ),
			'parent_item'                => null,
			'parent_item_colon'          => null,
			'edit_item'                  => __( 'Edit Patel Tax', 'demo-oops-features' ),
			'update_item'                => __( 'Update Patel Tax', 'demo-oops-features' ),
			'add_new_item'               => __( 'Add New Patel Tax', 'demo-oops-features' ),
			'new_item_name'              => __( 'New Patel Tax Name', 'demo-oops-features' ),
			'separate_items_with_commas' => __( 'Separate Patel Tax with commas', 'demo-oops-features' ),
			'add_or_remove_items'        => __( 'Add or remove Patel Tax', 'demo-oops-features' ),
			'choose_from_most_used'      => __( 'Choose from the most used Patel Tax', 'demo-oops-features' ),
			'not_found'                  => __( 'No Patel Tax found.', 'demo-oops-features' ),
			'menu_name'                  => __( 'Patel Tax', 'demo-oops-features' ),
		);

	}

	/**
	 * List of post types for taxonomy.
	 *
	 * @return array
	 */
	public function get_post_types() {

		return array(
			Soham_Pt::SLUG,
		);

	}

}
