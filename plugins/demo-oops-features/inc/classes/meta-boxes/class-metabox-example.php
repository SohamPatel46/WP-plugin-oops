<?php
/**
 * Post parent meta box.
 *
 * @package demo-oops-features
 */

namespace Demo_oops\Features\Inc\Meta_Boxes;

use Demo_oops\Features\Inc\Post_Types\Soham_Pt;

/**
 * Class Metabox_Example
 */
class Metabox_Example extends Base {

	/**
	 * Meta box slug.
	 *
	 * @var string Meta box slug.
	 */
	const SLUG = 'metabox-example';

	/**
	 * Meta box label.
	 *
	 * @var string Meta box label.
	 */
	const LABEL = 'Contact Information';

	/**
	 * Context of meta box.
	 *
	 * @var string Context of meta box.
	 */
	protected $context = 'normal';

	/**
	 * Priority of meta box.
	 *
	 * @var string Priority of meta box.
	 */
	protected $priority = 'high';

	/**
	 * To get field for meta box.
	 *
	 * @param string $post_type Current post type.
	 *
	 * @throws \FM_Developer_Exception Field manager developer exception.
	 *
	 * @return array
	 */
	public function get_fields( $post_type = '' ) {

		return array(
			'name'    => new \Fieldmanager_TextField(
				array(
					'label' => __( 'Name', 'demo-oops-features' ),
				)
			),
			'phone'   => new \Fieldmanager_TextField(
				array(
					'label' => __( 'Phone Number', 'demo-oops-features' ),
				)
			),
			'website' => new \Fieldmanager_Link(
				array(
					'label' => __( 'Website', 'demo-oops-features' ),
				)
			),
			'photo'   => new \Fieldmanager_Media(
				array(
					'label' => __( 'Images', 'demo-oops-features' ),
				)
			),
			'bio'     => new \Fieldmanager_RichTextarea(
				array(
					'label' => __( 'Biography', 'demo-oops-features' ),
				)
			),
		);

	}

	/**
	 * List of post type in which meta box is allowed.
	 *
	 * @return array List of post type.
	 */
	public function get_post_type() {

		return array(
			'post',
			Soham_Pt::SLUG,
		);

	}

}
