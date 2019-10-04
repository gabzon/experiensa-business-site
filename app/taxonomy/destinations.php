<?php

if ( ! function_exists( 'destination_taxonomy' ) ) {

  // Register Custom Taxonomy
  function destination_taxonomy() {

    $labels = array(
      'name'                       => _x( 'Destinations', 'Taxonomy General Name', 'sage' ),
      'singular_name'              => _x( 'Destination', 'Taxonomy Singular Name', 'sage' ),
      'menu_name'                  => __( 'Destinations', 'sage' ),
      'all_items'                  => __( 'All Destinations', 'sage' ),
      'parent_item'                => __( 'Parent Destination', 'sage' ),
      'parent_item_colon'          => __( 'Parent Destination:', 'sage' ),
      'new_item_name'              => __( 'New Country Name', 'sage' ),
      'add_new_item'               => __( 'Add New Destination', 'sage' ),
      'edit_item'                  => __( 'Edit Destination', 'sage' ),
      'update_item'                => __( 'Update Destination', 'sage' ),
      'view_item'                  => __( 'View Destination', 'sage' ),
      'separate_items_with_commas' => __( 'Separate Destinations with commas', 'sage' ),
      'add_or_remove_items'        => __( 'Add or remove Destinations', 'sage' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'sage' ),
      'popular_items'              => __( 'Popular Destinations', 'sage' ),
      'search_items'               => __( 'Search Destinations', 'sage' ),
      'not_found'                  => __( 'Not Found', 'sage' ),
      'no_terms'                   => __( 'No Destinations', 'sage' ),
      'items_list'                 => __( 'Items Destinations', 'sage' ),
      'items_list_navigation'      => __( 'Destinations list navigation', 'sage' ),
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => false,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
      'show_in_rest'               => true,
    );
    register_taxonomy( 'exp_destination', array( ' exp_client' ), $args );

  }
  add_action( 'init', 'destination_taxonomy', 0 );

}
