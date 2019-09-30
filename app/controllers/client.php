<?php

namespace App;

use Sober\Controller\Controller;

// error handling tutotrial
// https://www.sitepoint.com/displaying-errors-from-the-save_post-hook-in-wordpress/
//
// https://wordpress.stackexchange.com/questions/152033/how-to-add-an-admin-notice-upon-post-save-update

class Client extends Controller
{
  public function __construct () {
    add_action( 'save_post_exp_client', array($this,'saved_client'));
    add_action( 'admin_notices', array( $this, 'admin_notice_success' ) );
    add_action( 'admin_notices', array( $this, 'admin_notice_error' ) );
  }

  function saved_client ( $client_id ) {
    wp_die('YEES IM IN');
    $error = false;

    $curl = curl_init();

    $post = array(
      "id"                => $client_id,
      "title"             => $client->post_title,
      "content"           => $client->post_content,

      "client_country"    => $client->exp_client_country,
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
    );

    $jsonObj = json_encode($post);

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://scalr.api.appbase.io/experiensa/_doc/",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $jsonObj,
      CURLOPT_HTTPHEADER => array(
        "Authorization: Basic OUlrV0I0c3pqOmNhNTUwZDJjLWRiNGEtNDAyMS05OTJkLWE3ZDQ2MzVjYTEyYQ==",
        "Content-Type: application/json"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      $error = new WP_Error($code, $msg);
      echo "cURL Error #:" . $err;
    } else {
      $json = json_decode($response, true);
      //print_r("@index success: ");
      //print_r($json);
      wp_mail( 'gab.zambrano@gmail.com', 'YESS', 'inserted' );
      add_filter( 'redirect_post_location', array( $this, 'add_notice_query_var' ), 99 );
    }


    return true;

    //remove_action( 'save_post', array( $this, 'modify_post_content' ) );
    //wp_update_post( $post );
    //add_action( 'save_post', array( $this, 'modify_post_content' ) );

  }

  public function add_notice_query_var( $location ) {
    remove_filter( 'redirect_post_location', array( $this, 'add_notice_query_var' ), 99 );
    return add_query_arg( array( 'post' => $post->ID, 'action' => 'edit' ), $location );
  }

  function admin_notice_success() {
    if ( ! isset( $_GET['post'] ) ) {
      return;
    }
    ?>
    <div class="notice notice-success is-dismissible">
      <p><?php esc_html_e( 'Great, this client has been added/updated to Appbase.io!', 'sage' ); ?></p>
    </div>
    <?php
  }

  function admin_notice_error() {
    if ( ! isset( $_GET['post'] ) ) {
      return;
    }
    ?>
    <div class="notice notice-error is-dismissible">
      <p><?php esc_html_e( 'Sorry, a problem has occurred!', 'sage' ); ?></p>
    </div>
    <?php
  }

}
