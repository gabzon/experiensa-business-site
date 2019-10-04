<?php

function client_data($client_id, $client){
  $country = "";
  $country_list = App::country_list();
  if ($client->exp_client_country){
    $country = $country_list[$client->exp_client_country];
  }
  $post = array(
    "wp_id"             => $client_id,
    "title"             => $client->post_title,
    "content"           => $client->post_content,
    "client_country"    => $country,
    "client_state"      => $client->exp_client_state,
    "client_postal_code"=> $client->exp_client_postal_code,
    "client_city"       => $client->exp_client_city,
    "client_address"    => $client->exp_client_address,
    "client_latitude"   => $client->exp_client_latitude,
    "client_longitude"  => $client->exp_client_longitude,
    "geopoint"          => [$client->exp_client_latitude, $client->exp_client_longitude],
    "categories"        => wp_get_post_terms( $client->ID, 'category', array("fields" => "names")),
    "tags"              => wp_get_post_terms( $client->ID, 'post_tag', array("fields" => "names")),
    "countries"         => wp_get_post_terms( $client->ID, 'exp_country', array("fields" => "names")),
    "themes"            => wp_get_post_terms( $client->ID, 'exp_theme', array("fields" => "names")),
    "world_regions"     => wp_get_post_terms( $client->ID, 'exp_world_region', array("fields" => "names")),
    "spoken_languages"  => wp_get_post_terms( $client->ID, 'exp_spoken_languages', array("fields" => "names")),
    "destinations"      => wp_get_post_terms( $client->ID, 'exp_destination', array("fields" => "names")),
    "client_type"       => $client->exp_client_type,
    "client_status"     => $client->exp_client_status,
    "email"             => $client->exp_client_email,
    "website"           => $client->exp_client_website,
    "phone"             => $client->exp_client_phone,
    "facebook"          => $client->exp_client_facebook,
    "twitter"           => $client->exp_client_twitter,
    "instagram"         => $client->exp_client_instagram,
    "youtube"           => $client->exp_client_youtube,
    "pinterest"         => $client->exp_client_pinterest,
    "snapchat"          => $client->exp_client_snapchat,
    "skype"             => $client->exp_client_skype,
    "whatsapp"          => $client->exp_client_whatsapp,
    "cover_image"       => get_the_post_thumbnail_url($client->ID,'full'),
    'link'              => get_the_permalink( $client->ID ),
    "excerpt"           => $client->post_excerpt,
    "date"              => $client->post_date,
    "date_gmt"          => $client->post_date_gmt,
    "modified"          => $client->post_modified,
    "modified_gmt"      => $client->post_modified_gmt,
    "slug"              => $client->post_name,
    "menu_order"        => $client->menu_order,
    "status"            => $client->post_status,
    "has_insurance"     => $client->exp_client_has_insurance,
    "has_newsletters"   => $client->exp_client_has_newsletter,
    "opening_date"      => $client->exp_client_opening_date,
  );
  return $post;
}

?>
