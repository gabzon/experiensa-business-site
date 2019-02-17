<?php

//https://wordpress.stackexchange.com/questions/271877/how-to-do-a-meta-query-using-rest-api-in-wordpress-4-7/305337

add_action( 'rest_api_init', 'country_route');

function country_route() {
  //Path to meta query route
  register_rest_route( 'experiensa_media', '/media_query', [
    'methods' => 'GET',
    'callback' => 'custom_meta_query'
  ]);
}

function custom_meta_query(){

  $params = [];
  $tax_query = [];
  if (isset($_GET['category'])) {
    $params['category'] = $_GET['category'];
    $category = ['taxonomy' => 'media_category', 'field' => 'slug', 'terms' => $params['category']];
    $tax_query[] = $category;
  }
  if (isset($_GET['place'])) {
    $params['place'] = $_GET['place'];
    $place = ['taxonomy' => 'media_place', 'field' => 'slug', 'terms' => $params['place']];
    $tax_query[] = $place;
  }
  if (isset($_GET['country'])) {
    $params['country'] = $_GET['country'];
    $country = ['taxonomy' => 'media_country', 'field' => 'slug', 'terms' => $params['country']];
    $tax_query[] = $country;
  }
  if (isset($_GET['season'])) {
    $params['season'] = $_GET['season'];
    $season = ['taxonomy' => 'media_season', 'field' => 'slug', 'terms' => $params['season']];
    $tax_query[] = $season;
  }
  if (isset($_GET['daylight'])) {
    $params['daylight'] = $_GET['daylight'];
    $daylight = ['taxonomy' => 'media_daylight', 'field' => 'slug', 'terms' => $params['daylight']];
    $tax_query[] = $daylight;
  }
  if (isset($_GET['destination'])) {
    $params['destination'] = $_GET['destination'];
    $destination = ['taxonomy' => 'media_destination', 'field' => 'slug', 'terms' => $params['destination']];
    $tax_query[] = $destination;
  }
  if (isset($_GET['format'])) {
    $params['format'] = $_GET['format'];
    $format = ['taxonomy' => 'media_format', 'field' => 'slug', 'terms' => $params['format']];
    $tax_query[] = $format;
  }
  if (isset($_GET['per_page'])) {
    $params['per_page'] = $_GET['per_page'];
  }

  if ($tax_query > 1) {
    array_unshift($tax_query, "'relation' => 'AND'");
  }

  $args = array();

  if ($params && count($params) > 0) {
    $args = array(
      'post_type'       => array( 'attachment' ),
      'post_mime_type'  => 'image',
      'post_status'     => 'inherit',
      'posts_per_page'  => isset($_GET['per_page']) ? $params['per_page'] : 100,
      'tax_query'       => $tax_query
    );
  }else{
    $per_page = isset($_GET['per_page']) ? $params['per_page'] : 100;
    $args = array(
      'post_type'       => array( 'attachment' ),
      'post_mime_type'  => 'image',
      'post_status'     => 'inherit',
      'posts_per_page'  => $per_page,
    );
  }

  $query = new WP_Query($args);

  if ( $query->have_posts() ) {
    $data = array();

    while($query->have_posts()) {
      $query->the_post();
      $id = get_the_ID();
      $data[] = [
        'id'              => $id,
        'title'           => get_the_title(),
        'img_alt_text'    => get_post_meta( $id, '_wp_attachment_image_alt', true),
        'caption'         => wp_get_attachment_caption( $id ),
        'slug'            => get_post_field( 'post_name', get_post() ),
        'content'         => get_the_content(),
        'link'            => get_the_permalink(),
        'thumbnail'       => wp_get_attachment_image_src( $id, 'thumbnail' )[0],
        'medium'          => wp_get_attachment_image_src( $id, 'medium' )[0],
        'large'           => wp_get_attachment_image_src( $id, 'large' )[0],
        'full'            => wp_get_attachment_image_src( $id, 'full' )[0],
        'country'         => wp_get_post_terms( $id, 'media_country',   array("fields" => "names")),
        'season'          => wp_get_post_terms( $id, 'media_season',    array("fields" => "names") ),
        'daylight'        => wp_get_post_terms( $id, 'media_daylight',  array("fields" => "names") ),
        'category'        => wp_get_post_terms( $id, 'media_category',  array("fields" => "names") ),
        'place'           => wp_get_post_terms( $id, 'media_place',     array("fields" => "names") ),
        'format'          => wp_get_post_terms( $id, 'media_format',    array("fields" => "names")),
        'destination'     => wp_get_post_terms( $id, 'media_destination', array("fields" => "names")),
        'source_website'  => get_post_meta( $id, 'exp_media_url', true),
        'media_details'   => wp_get_attachment_metadata($id),
      ];
    }
    return $data;
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
