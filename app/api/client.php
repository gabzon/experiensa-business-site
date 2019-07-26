<?php

/**
* Course endpoints.
* Tutorial : https://upnrunn.com/blog/2018/04/how-to-extend-wp-rest-api-from-your-custom-plugin-part-3/
* https://codex.wordpress.org/Class_Reference/WP_Query#Taxonomy_Parameters
*/


class Exp_Client_Endpoint extends WP_REST_Controller {

  /** Constructor *************************************************************/
  public function __construct() {
    $this->namespace = 'exp-rest-api';
    $this->rest_base = 'clients';
    $this->post_type = 'exp_client';
  }


  /** Register the component routes  ******************************************/
  public function register_routes() {
    register_rest_route(
    $this->namespace,
    $this->rest_base,
    [[
      'methods'             => WP_REST_Server::READABLE,
      'callback'            => array( $this, 'get_items' ),
      'permission_callback' => array( $this, 'get_items_permissions_check' ),
      'args'                => $this->get_collection_params(),
      ]]
    );
  }


  /** Retrieve Clients. ********************************************************/
  public function get_items( $request ) {

    $args = array(
      'post_type'      => $this->post_type,
      'posts_per_page' => $request['per_page'],
      'page'           => $request['page'],
    );

    $clients = get_posts( $args );

    $data = array();

    if ( empty( $clients ) ) {
      return null;
    }

    if ( $clients ) {
      foreach ( $clients as $client ) :
        $itemdata = $this->prepare_item_for_response( $client, $request );
        $data[] = $this->prepare_response_for_collection( $itemdata );
      endforeach;
    }
    $data = rest_ensure_response( $data );
    return $data;
  }

  /** Check if a given request has access to restaurant items. ****************/
  public function get_items_permissions_check( $request ) {
    return true;
  }


  /** Get the query params for collections ************************************/
  public function get_collection_params() {
    return array(
      'page'     => array(
        'description'       => 'Current page of the collection.',
        'type'              => 'integer',
        'default'           => 1,
        'sanitize_callback' => 'absint',
      ),
      'per_page' => array(
        'description'       => 'Maximum number of items to be returned in result set.',
        'type'              => 'integer',
        'default'           => 100,
        'sanitize_callback' => 'absint',
      ),
    );
  }

  /** Prepares course data for return as an object. ***************************/
  public function prepare_item_for_response( $client, $request ) {
    //$classroom = wp_get_post_terms( $client->ID, 'classroom', array("fields" => "names"));
    //$classroom = Course::get_classroom($client->ID);
    //$style = Course::get_style($course->ID);
    //$color = Course::get_color_bar($classroom,$style);
    $data = array(
      'id'                => $client->ID,
      'title'             => $client->post_title,

      "categories"        => wp_get_post_terms( $client->ID, 'category', array("fields" => "names")),
      "tags"              => wp_get_post_terms( $client->ID, 'post_tag', array("fields" => "names")),
      "countries"         => wp_get_post_terms( $client->ID, 'exp_country', array("fields" => "names")),
      "themes"            => wp_get_post_terms( $client->ID, 'exp_theme', array("fields" => "names")),
      "world_regions"     => wp_get_post_terms( $client->ID, 'exp_world_region', array("fields" => "names")),

      "client_country"    => $client->exp_client_country,
      "client_state"      => $client->exp_client_state,
      "client_postal_code"=> $client->exp_client_postal_code,
      "client_city"       => $client->exp_client_city,
      "client_address"    => $client->exp_client_address,
      "client_latitude"   => $client->exp_client_latitude,
      "client_longitude"  => $client->exp_client_longitude,
      "geopoint"          => [$client->exp_client_latitude, $client->exp_client_longitude],

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
      "content"           => $client->post_content,
    );
    return $data;
  }

}
?>
