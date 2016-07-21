<?php
// Register Custom Post Type
function places_post_type() {

	$labels = array(
		'name'                  => _x( 'Places', 'Post Type General Name', 'avash' ),
		'singular_name'         => _x( 'Place', 'Post Type Singular Name', 'avash' ),
		'menu_name'             => __( 'Places', 'avash' ),
		'name_admin_bar'        => __( 'Place', 'avash' ),
		'archives'              => __( 'Item Archives', 'avash' ),
		'parent_item_colon'     => __( 'Parent Item:', 'avash' ),
		'all_items'             => __( 'All Items', 'avash' ),
		'add_new_item'          => __( 'Add New Item', 'avash' ),
		'add_new'               => __( 'Add New', 'avash' ),
		'new_item'              => __( 'New Item', 'avash' ),
		'edit_item'             => __( 'Edit Item', 'avash' ),
		'update_item'           => __( 'Update Item', 'avash' ),
		'view_item'             => __( 'View Item', 'avash' ),
		'search_items'          => __( 'Search Item', 'avash' ),
		'not_found'             => __( 'Not found', 'avash' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'avash' ),
		'featured_image'        => __( 'Featured Image', 'avash' ),
		'set_featured_image'    => __( 'Set featured image', 'avash' ),
		'remove_featured_image' => __( 'Remove featured image', 'avash' ),
		'use_featured_image'    => __( 'Use as featured image', 'avash' ),
		'insert_into_item'      => __( 'Insert into item', 'avash' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'avash' ),
		'items_list'            => __( 'Items list', 'avash' ),
		'items_list_navigation' => __( 'Items list navigation', 'avash' ),
		'filter_items_list'     => __( 'Filter items list', 'avash' ),
	);
	$args = array(
		'label'                 => __( 'Place', 'avash' ),
		'description'           => __( 'Post Type Description', 'avash' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'place', $args );

}
add_action( 'init', 'places_post_type', 0 );
?>