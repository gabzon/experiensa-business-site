<?php

//https://www.gavick.com/blog/adding-custom-fields-in-the-wordpress-rest-api


add_action( 'rest_api_init', 'add_custom_fields' );

function add_custom_fields() {

  register_rest_field('attachment','categories',  ['get_callback' => 'get_media_categories_field']);
  register_rest_field('attachment','places',      ['get_callback' => 'get_media_places_field']);
  register_rest_field('attachment','countries',   ['get_callback' => 'get_media_countries_field']);
  register_rest_field('attachment','season',      ['get_callback' => 'get_media_season_field']);
  register_rest_field('attachment','authors',     ['get_callback' => 'get_media_author_field']);
  register_rest_field('attachment','daylight',    ['get_callback' => 'get_media_daylight_field']);
  register_rest_field('attachment','destinations',['get_callback' => 'get_media_destinations_field']);
  register_rest_field('attachment','format',      ['get_callback' => 'get_media_format_field']);
  register_rest_field('attachment','source_website', ['get_callback' => 'get_media_source_website_field']);

}

// categories
function get_media_categories_field($object, $field_name, $request){
  return wp_get_post_terms( $object['id'], 'media_category', array("fields" => "names"));
}

// places
function get_media_places_field($object, $field_name, $request){
  return wp_get_post_terms( $object['id'], 'media_place', array("fields" => "names"));
}

// countries
function get_media_countries_field($object, $field_name, $request){
  return wp_get_post_terms( $object['id'], 'media_country', array("fields" => "names"));
}

// season
function get_media_season_field($object, $field_name, $request){
  return wp_get_post_terms( $object['id'], 'media_season', array("fields" => "names"));
}

// author
function get_media_author_field($object, $field_name, $request){
  return wp_get_post_terms( $object['id'], 'media_author', array("fields" => "names"));
}

// daylight
function get_media_daylight_field($object, $field_name, $request){
  return wp_get_post_terms( $object['id'], 'media_daylight', array("fields" => "names"));
}

// destination
function get_media_destinations_field($object, $field_name, $request){
  return wp_get_post_terms( $object['id'], 'media_destination', array("fields" => "names"));
}

// Format
function get_media_format_field($object, $field_name, $request){
  return wp_get_post_terms( $object['id'], 'media_format', array("fields" => "names"));
}

// Source website
function get_media_source_website_field($object, $field_name, $request){
  return get_post_meta( $object['id'], 'exp_media_url', true);
}
