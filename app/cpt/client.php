<?php

if ( ! function_exists('client_post_type') ) {

// Register Custom Post Type
function client_post_type() {

	$labels = array(
		'name'                  => _x( 'Clients', 'Post Type General Name', 'sage' ),
		'singular_name'         => _x( 'Client', 'Post Type Singular Name', 'sage' ),
		'menu_name'             => __( 'Clients', 'sage' ),
		'name_admin_bar'        => __( 'Clients', 'sage' ),
		'archives'              => __( 'Client Archives', 'sage' ),
		'attributes'            => __( 'Client Attributes', 'sage' ),
		'parent_item_colon'     => __( 'Parent Client:', 'sage' ),
		'all_items'             => __( 'All Clients', 'sage' ),
		'add_new_item'          => __( 'Add New Client', 'sage' ),
		'add_new'               => __( 'Add New', 'sage' ),
		'new_item'              => __( 'New Client', 'sage' ),
		'edit_item'             => __( 'Edit Client', 'sage' ),
		'update_item'           => __( 'Update Client', 'sage' ),
		'view_item'             => __( 'View Client', 'sage' ),
		'view_items'            => __( 'View Clients', 'sage' ),
		'search_items'          => __( 'Search Client', 'sage' ),
		'not_found'             => __( 'Not found', 'sage' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
		'featured_image'        => __( 'Featured Image', 'sage' ),
		'set_featured_image'    => __( 'Set featured image', 'sage' ),
		'remove_featured_image' => __( 'Remove featured image', 'sage' ),
		'use_featured_image'    => __( 'Use as featured image', 'sage' ),
		'insert_into_item'      => __( 'Insert into Client', 'sage' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'sage' ),
		'items_list'            => __( 'Clients list', 'sage' ),
		'items_list_navigation' => __( 'Clients list navigation', 'sage' ),
		'filter_items_list'     => __( 'Filter Clients list', 'sage' ),
	);

	$rewrite = array(
		'slug'                  => 'client',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);

	$args = array(
		'label'                 => __( 'client', 'sage' ),
		'description'           => __( 'List of Experiensa clients, It could be a Travel Agency, a Tour Operator, a Travel Service company or a Tourist Information center', 'sage' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		'taxonomies'            => array( 'category', ' post_tag', 'exp_alliance', 'exp_theme', 'exp_country', 'exp_world_region', 'exp_destination', 'exp_spoken_languages' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'exp_client', $args );

}
add_action( 'init', 'client_post_type', 0 );

}



