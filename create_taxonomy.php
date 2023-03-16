<?php
function custom_taxonomy() {
	
	$labels_cat_1 = array(
		'name'                       => 'Books Category',
		'singular_name'              => 'Books Category',
		'menu_name'                  => 'Books Category',
		'all_items'                  => 'All Items',
		'parent_item'                => 'Parent Item',
		'parent_item_colon'          => 'Parent Item:',
		'new_item_name'              => 'New Item Name',
		'add_new_item'               => 'Add New Item',
		'edit_item'                  => 'Edit Item',
		'update_item'                => 'Update Item',
		'view_item'                  => 'View Item',
		'separate_items_with_commas' => 'Separate items with commas',
		'add_or_remove_items'        => 'Add or remove items',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Items',
		'search_items'               => 'Search Items',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No items',
		'items_list'                 => 'Items list',
		'items_list_navigation'      => 'Items list navigation',
	);
	$rewrite_cat_1 = array(
		'slug'                       => 'category',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args_cat_1 = array(
		'labels'                     => $labels_cat_1,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'rewrite'                    => $rewrite_cat_1,
		'capabilities'				 => array(
			'manage_categories' 	 => 'manage_ndf_category',
			'manage_terms'			 => 'manage_ndf_category',
			'edit_terms'			 => 'manage_ndf_category',
			'delete_terms'			 => 'manage_ndf_category',
			'assign_terms'			 => 'edit_ndf_datas',
		),
        'show_in_rest'               => true,
	);
	register_taxonomy( 'books_category', array( 'book' ), $args_cat_1 );
}
add_action( 'init', 'custom_taxonomy' );

  