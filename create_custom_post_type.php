<?php
/**
 * Create your custom post type here.
 * add a wordpress function to create your custom post type, you can use any name.
 */
// Register Custom Post Type book
function create_book_cpt() {

	$labels = array(
		'name' => _x( 'books', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'book', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'books', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'book', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'book Archives', 'textdomain' ),
		'attributes' => __( 'book Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent book:', 'textdomain' ),
		'all_items' => __( 'All books', 'textdomain' ),
		'add_new_item' => __( 'Add New book', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New book', 'textdomain' ),
		'edit_item' => __( 'Edit book', 'textdomain' ),
		'update_item' => __( 'Update book', 'textdomain' ),
		'view_item' => __( 'View book', 'textdomain' ),
		'view_items' => __( 'View books', 'textdomain' ),
		'search_items' => __( 'Search book', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into book', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this book', 'textdomain' ),
		'items_list' => __( 'books list', 'textdomain' ),
		'items_list_navigation' => __( 'books list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter books list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'book', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-book',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'comments'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'book', $args );

}
add_action( 'init', 'create_book_cpt', 0 );


/**
 * Register Taxonomy
 */
