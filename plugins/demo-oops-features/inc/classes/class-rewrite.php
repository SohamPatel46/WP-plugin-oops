<?php
/**
 * Rewrite class.
 *
 * @package demo-oops-features
 */

namespace Demo_oops\Features\Inc;

use Demo_oops\Features\Inc\Traits\Singleton;

/**
 * Class Rewrite
 */
class Rewrite {

	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {

		$this->setup_hooks();

	}

	/**
	 * To setup action/filter.
	 *
	 * @return void
	 */
	protected function setup_hooks() {
		add_action( 'init', array( $this, 'soham_add_rewrite_rules' ) );
		add_filter( 'post_type_link', array( $this, 'mlib_recreate_rules' ), 10, 4 );
	}

	/**
	 * To add rewrite rules
	 *
	 * @return void
	 */
	public function soham_add_rewrite_rules() {

		// Movie post type .
		add_rewrite_rule(
			'soham\/([^\/]+)-([0-9]{1,})\/?$',
			'index.php?patel-tax=$matches[1]&p=$matches[2]&post_type=soham-pt',
			'top'
		);

		// Rewrite rules for the archive movie page .
		add_rewrite_rule(
			'soham/?$',
			'index.php?post_type=soham-pt',
			'top'
		);

	}

	/**
	 * To recreate/assign permalink - Its deletes old link
	 *
	 * @param string  $post_link - permalink for current request .
	 * @param WP_post $post - Current post object .
	 * @param boolean $leavename - Whether to keep the post name.
	 * @param boolean $sample - Is it a sample permalink.
	 */
	public function mlib_recreate_rules( $post_link, $post, $leavename, $sample ) {

		if ( 'soham-pt' === get_post_type( $post ) ) {

			$genre_term = empty( wp_get_object_terms( $post->ID, 'patel-tax' ) ) ? 'patel-tax' : wp_get_object_terms( $post->ID, 'patel-tax' )[0]->slug;

			$post_link = str_replace(
				array( '%patel-tax%', '%post_id%', $post->post_name . '/' ),
				array(
					$genre_term,
					$post->ID,
					'',
				),
				$post_link
			);

		}

		return $post_link;

	}

}
