<?php

//https://wordpress.stackexchange.com/questions/271877/how-to-do-a-meta-query-using-rest-api-in-wordpress-4-7/305337

add_action( 'rest_api_init', 'country_route');

function country_route() {
  //Path to meta query route
  register_rest_route( 'experiensa_media', '/query', [
    'methods' => 'GET',
    'callback' => 'custom_meta_query'
  ]);
}

function custom_meta_query(){

  $params = [];
  if (isset($_GET['category'])) {
    $params['category'] = $_GET['category'];
  }
  if (isset($_GET['place'])) {
    $params['place'] = $_GET['place'];
  }
  if (isset($_GET['country'])) {
    $params['country'] = $_GET['country'];
  }
  if (isset($_GET['season'])) {
    $params['season'] = $_GET['season'];
  }
  if (isset($_GET['daylight'])) {
    $params['daylight'] = $_GET['daylight'];
  }
  if (isset($_GET['destination'])) {
    $params['destination'] = $_GET['destination'];
  }
  if (isset($_GET['format'])) {
    $params['format'] = $_GET['format'];
  }

  $tax_query_args = get_tax_query_args($params);

  $args = array(
    'post_type'       => array( 'attachment' ),
    'post_mime_type'  => 'image',
    'post_status'     => 'inherit',
    'posts_per_page'  => 100,
    'tax_query'       => $tax_query_args,
  );


  $args1 = array(
    'post_type'       => array( 'attachment' ),
    'post_mime_type'  => 'image',
    'post_status'     => 'inherit',
    'posts_per_page'  => 100,
    'tax_query'       => array(
      'relation' => 'AND',
      array(
        'taxonomy' => 'media_country',
        'field' => 'slug',
        'terms' => 'portugal'
      ),
    )
  );

  $query = new WP_Query($args1);

  if ( $query->have_posts() ) {
    $data = array();

    while($query->have_posts()) {
      $query->the_post();
      $data['title'] = get_the_title();
    }
    // Return the data
    return $data;
  }else{
    return 'No images to show';
  }
}

function get_tax_query_args($params){
  foreach ($params as $key => $value) {
    $args[] = array(
      'taxonomy' => 'media_' . $key,
      'field' => 'slug',
      'terms' => $value
    );
  }

  if (count($args) > 1) {
    $tax_query = array(
      'relation' => 'AND',
      $args[0]
    );
  }else{
    $tax_query = array($args);
  }
  return $tax_query;
}



//wp-json/tchernitchenko/v2/my_meta_query?meta_query[relation]=OR&meta_query[0][key]=arkivera&meta_query[0][value]=1&meta_query[0][compare]==
?>
