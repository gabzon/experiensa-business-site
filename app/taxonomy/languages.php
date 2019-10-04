<?php

if ( ! function_exists( 'languages_taxonomy' ) ) {

  // Register Custom Taxonomy
  function languages_taxonomy() {

    $labels = array(
      'name'                       => _x( 'Languages', 'Taxonomy General Name', 'sage' ),
      'singular_name'              => _x( 'Language', 'Taxonomy Singular Name', 'sage' ),
      'menu_name'                  => __( 'Languages', 'sage' ),
      'all_items'                  => __( 'All Languages', 'sage' ),
      'parent_item'                => __( 'Parent Language', 'sage' ),
      'parent_item_colon'          => __( 'Parent Language:', 'sage' ),
      'new_item_name'              => __( 'New Language Name', 'sage' ),
      'add_new_item'               => __( 'Add New Language', 'sage' ),
      'edit_item'                  => __( 'Edit Language', 'sage' ),
      'update_item'                => __( 'Update Language', 'sage' ),
      'view_item'                  => __( 'View Language', 'sage' ),
      'separate_items_with_commas' => __( 'Separate Languages with commas', 'sage' ),
      'add_or_remove_items'        => __( 'Add or remove Languages', 'sage' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'sage' ),
      'popular_items'              => __( 'Popular Languages', 'sage' ),
      'search_items'               => __( 'Search Languages', 'sage' ),
      'not_found'                  => __( 'Not Found', 'sage' ),
      'no_terms'                   => __( 'No Languages', 'sage' ),
      'items_list'                 => __( 'Items Languages', 'sage' ),
      'items_list_navigation'      => __( 'Countries list navigation', 'sage' ),
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
    register_taxonomy( 'exp_spoken_languages', array( ' exp_client' ), $args );

  }
  add_action( 'init', 'languages_taxonomy', 0 );

}
