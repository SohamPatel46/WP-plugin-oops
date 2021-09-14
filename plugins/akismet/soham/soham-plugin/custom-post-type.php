<?php

// =================================================
// Register Custom Post Type
// =================================================

function sp_movie() {

	$labels = array(
		'name'                  => _x( 'SP Movies', 'Post Type General Name', 'sp-movie' ),
		'singular_name'         => _x( 'SP Movie', 'Post Type Singular Name', 'sp-movie' ),
		'menu_name'             => __( 'Movie Types', 'sp-movie' ),
		'name_admin_bar'        => __( 'Movie Type', 'sp-movie' ),
		'archives'              => __( 'Item Archives', 'sp-movie' ),
		'attributes'            => __( 'Item Attributes', 'sp-movie' ),
		'parent_item_colon'     => __( 'Parent Item:', 'sp-movie' ),
		'all_items'             => __( 'All Items', 'sp-movie' ),
		'add_new_item'          => __( 'Add New Item', 'sp-movie' ),
		'add_new'               => __( 'Add New', 'sp-movie' ),
		'new_item'              => __( 'New Item', 'sp-movie' ),
		'edit_item'             => __( 'Edit Item', 'sp-movie' ),
		'update_item'           => __( 'Update Item', 'sp-movie' ),
		'view_item'             => __( 'View Item', 'sp-movie' ),
		'view_items'            => __( 'View Items', 'sp-movie' ),
		'search_items'          => __( 'Search Item', 'sp-movie' ),
		'not_found'             => __( 'Not found', 'sp-movie' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'sp-movie' ),
		'featured_image'        => __( 'Featured Image', 'sp-movie' ),
		'set_featured_image'    => __( 'Set featured image', 'sp-movie' ),
		'remove_featured_image' => __( 'Remove featured image', 'sp-movie' ),
		'use_featured_image'    => __( 'Use as featured image', 'sp-movie' ),
		'insert_into_item'      => __( 'Insert into item', 'sp-movie' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'sp-movie' ),
		'items_list'            => __( 'Items list', 'sp-movie' ),
		'items_list_navigation' => __( 'Items list navigation', 'sp-movie' ),
		'filter_items_list'     => __( 'Filter items list', 'sp-movie' ),
	);
	$args   = array(
		'label'               => __( 'SP Movie', 'sp-movie' ),
		'description'         => __( 'sp-movie Description', 'sp-movie' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields' ),
		'taxonomies'          => array( 'Genre', 'Labels', 'Language', 'Person', '' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'sp-movie', $args );

}
add_action( 'init', 'sp_movie', 0 );


// =================================================
// Register Custom Taxonomy
// =================================================

function sp_movie_taxonomy() {

	$labels = array(
		'name'                       => _x( 'SP Movie Taxonomies', 'Taxonomy General Name', 'sp_movie_taxonomy' ),
		'singular_name'              => _x( 'SP Movie Taxonomy', 'Taxonomy Singular Name', 'sp_movie_taxonomy' ),
		'menu_name'                  => __( 'SP Movie Taxonomy', 'sp_movie_taxonomy' ),
		'all_items'                  => __( 'All Items', 'sp_movie_taxonomy' ),
		'parent_item'                => __( 'Parent Item', 'sp_movie_taxonomy' ),
		'parent_item_colon'          => __( 'Parent Item:', 'sp_movie_taxonomy' ),
		'new_item_name'              => __( 'New Item Name', 'sp_movie_taxonomy' ),
		'add_new_item'               => __( 'Add New Item', 'sp_movie_taxonomy' ),
		'edit_item'                  => __( 'Edit Item', 'sp_movie_taxonomy' ),
		'update_item'                => __( 'Update Item', 'sp_movie_taxonomy' ),
		'view_item'                  => __( 'View Item', 'sp_movie_taxonomy' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'sp_movie_taxonomy' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'sp_movie_taxonomy' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'sp_movie_taxonomy' ),
		'popular_items'              => __( 'Popular Items', 'sp_movie_taxonomy' ),
		'search_items'               => __( 'Search Items', 'sp_movie_taxonomy' ),
		'not_found'                  => __( 'Not Found', 'sp_movie_taxonomy' ),
		'no_terms'                   => __( 'No items', 'sp_movie_taxonomy' ),
		'items_list'                 => __( 'Items list', 'sp_movie_taxonomy' ),
		'items_list_navigation'      => __( 'Items list navigation', 'sp_movie_taxonomy' ),
	);
	$args   = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud'     => true,
	);
	register_taxonomy( 'sp_movie_taxonomy', array( 'sp-movie', 'post' ), $args );

}
add_action( 'init', 'sp_movie_taxonomy', 0 );

// =================================================
// Register Custom Tag
// =================================================

function tag_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Tag Taxonomies', 'Taxonomy General Name', 'tag_taxonomy' ),
		'singular_name'              => _x( 'Tag Taxonomy', 'Taxonomy Singular Name', 'tag_taxonomy' ),
		'menu_name'                  => __( 'Tag Taxonomy', 'tag_taxonomy' ),
		'all_items'                  => __( 'All Items', 'tag_taxonomy' ),
		'parent_item'                => __( 'Parent Item', 'tag_taxonomy' ),
		'parent_item_colon'          => __( 'Parent Item:', 'tag_taxonomy' ),
		'new_item_name'              => __( 'New Item Name', 'tag_taxonomy' ),
		'add_new_item'               => __( 'Add New Item', 'tag_taxonomy' ),
		'edit_item'                  => __( 'Edit Item', 'tag_taxonomy' ),
		'update_item'                => __( 'Update Item', 'tag_taxonomy' ),
		'view_item'                  => __( 'View Item', 'tag_taxonomy' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'tag_taxonomy' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'tag_taxonomy' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'tag_taxonomy' ),
		'popular_items'              => __( 'Popular Items', 'tag_taxonomy' ),
		'search_items'               => __( 'Search Items', 'tag_taxonomy' ),
		'not_found'                  => __( 'Not Found', 'tag_taxonomy' ),
		'no_terms'                   => __( 'No items', 'tag_taxonomy' ),
		'items_list'                 => __( 'Items list', 'tag_taxonomy' ),
		'items_list_navigation'      => __( 'Items list navigation', 'tag_taxonomy' ),
	);
	$args   = array(
		'labels'            => $labels,
		'hierarchical'      => false,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud'     => true,
	);
	register_taxonomy( 'tag_taxonomy', array( 'sp-movie', 'post' ), $args );

}
add_action( 'init', 'tag_taxonomy', 0 );
