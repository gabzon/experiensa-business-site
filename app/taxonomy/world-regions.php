<?php

if ( ! function_exists( 'world_region_taxonomy' ) ) {

// Register Custom Taxonomy
function world_region_taxonomy() {

	$labels = array(
		'name'                       => _x( 'World Regions', 'Taxonomy General Name', 'sage' ),
		'singular_name'              => _x( 'World Region', 'Taxonomy Singular Name', 'sage' ),
		'menu_name'                  => __( 'World Regions', 'sage' ),
		'all_items'                  => __( 'All World Regions', 'sage' ),
		'parent_item'                => __( 'Parent World Region', 'sage' ),
		'parent_item_colon'          => __( 'Parent World Region:', 'sage' ),
		'new_item_name'              => __( 'New World Region Name', 'sage' ),
		'add_new_item'               => __( 'Add New World Region', 'sage' ),
		'edit_item'                  => __( 'Edit World Region', 'sage' ),
		'update_item'                => __( 'Update World Region', 'sage' ),
		'view_item'                  => __( 'View World Region', 'sage' ),
		'separate_items_with_commas' => __( 'Separate World Regions with commas', 'sage' ),
		'add_or_remove_items'        => __( 'Add or remove World Regions', 'sage' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'sage' ),
		'popular_items'              => __( 'Popular World Regions', 'sage' ),
		'search_items'               => __( 'Search World Regions', 'sage' ),
		'not_found'                  => __( 'Not Found', 'sage' ),
		'no_terms'                   => __( 'No World Region', 'sage' ),
		'items_list'                 => __( 'World Regions list', 'sage' ),
		'items_list_navigation'      => __( 'World Regions list navigation', 'sage' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);

	register_taxonomy( 'exp_world_region', array( 'post', ' exp_client' ), $args );

}
add_action( 'init', 'world_region_taxonomy', 0 );

}
