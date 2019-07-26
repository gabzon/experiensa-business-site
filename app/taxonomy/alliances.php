<?php
if ( ! function_exists( 'alliance_taxonomy' ) ) {

  // Register Custom Taxonomy
  function alliance_taxonomy() {

    $labels = array(
      'name'                       => _x( 'Alliances', 'Taxonomy General Name', 'sage' ),
      'singular_name'              => _x( 'Alliance', 'Taxonomy Singular Name', 'sage' ),
      'menu_name'                  => __( 'Alliances', 'sage' ),
      'all_items'                  => __( 'All Alliances', 'sage' ),
      'parent_item'                => __( 'Parent Alliance', 'sage' ),
      'parent_item_colon'          => __( 'Parent Alliance:', 'sage' ),
      'new_item_name'              => __( 'New Alliance Name', 'sage' ),
      'add_new_item'               => __( 'Add New Alliance', 'sage' ),
      'edit_item'                  => __( 'Edit Alliance', 'sage' ),
      'update_item'                => __( 'Update Alliance', 'sage' ),
      'view_item'                  => __( 'View Alliance', 'sage' ),
      'separate_items_with_commas' => __( 'Separate Alliances with commas', 'sage' ),
      'add_or_remove_items'        => __( 'Add or remove Alliances', 'sage' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'sage' ),
      'popular_items'              => __( 'Popular Alliances', 'sage' ),
      'search_items'               => __( 'Search Alliances', 'sage' ),
      'not_found'                  => __( 'Not Found', 'sage' ),
      'no_terms'                   => __( 'No Alliances', 'sage' ),
      'items_list'                 => __( 'Alliances list', 'sage' ),
      'items_list_navigation'      => __( 'Alliances list navigation', 'sage' ),
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
    register_taxonomy( 'exp_alliance', array( 'post', ' exp_client' ), $args );

  }
  add_action( 'init', 'alliance_taxonomy', 0 );

}

?>
