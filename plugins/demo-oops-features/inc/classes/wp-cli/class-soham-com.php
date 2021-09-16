<?php
/**
 * Register Example post type.
 *
 * @package demo-oops-features
 */

namespace Demo_oops\Features\Inc\WP_CLI;

/**
 * Class Post_Type_Example
 */
class Soham_Com {

	/**
	 * Creates the person posts.
	 *
	 * ## OPTIONS
	 *
	 * <mlib-term>
	 * : Term to be added.
	 *
	 * [--taxonomy=<taxonomy>]
	 * : Term to be added in this taxonomy. Deafult category.
	 * ---
	 * default: category
	 * options:
	 *   - category
	 *   - any
	 * ---
	 *
	 * ## EXAMPLES
	 *
	 *     wp mlib-term add Marvel --taxonomy=production_company
	 *     wp mlib-term add DC
	 *
	 * @when after_wp_load
	 *
	 * This function is used to add term to a taxonomy.
	 *
	 * @param arguement $args - arguement to pass to the command.
	 * @param arguments $assoc_args - associative arguements to pass through command.
	 *
	 * @return void
	 */
	public function add( $args, $assoc_args ) {

		$taxonomy = isset( $assoc_args['taxonomy'] ) ? $assoc_args['taxonomy'] : 'category';

		$term = $args[0];

		$response = wp_insert_term( $term, $taxonomy );

		if ( ! is_array( $response ) ) {

			WP_CLI::error( __( 'Taxonomy doesnt exists or term already exist ', 'movie-plugin' ) );

		} else {

			WP_CLI::success( __( 'Term added Successfully', 'movie-plugin' ) );

		}

	}

}
