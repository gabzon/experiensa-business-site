<?php

// https://wordpress.stackexchange.com/questions/152033/how-to-add-an-admin-notice-upon-post-save-update
// possible hooks: transition_post_status, save_post, publish_post
// https://wordpress.stackexchange.com/questions/178183/should-i-use-add-actionpublish-post-or-add-filterpublish-post
require 'client_data.php';
require 'notifications.php';

add_action( 'transition_post_status', 'saved_client', 10, 3 );
add_action( 'admin_notices', 'admin_notice_success');

function saved_client ( $new_status, $old_status, $client) {
  if ($client->post_type == "exp_client") {

    $client_id = $client->ID;

    $appbase_id = get_post_meta($client_id, 'exp_client_appbase_id', true);

    if ($appbase_id == "") {
      error_log('I am creating new a client');
      $appbase_url = "https://scalr.api.appbase.io/experiensa/_doc/";
    } else {
      $appbase_url = "https://scalr.api.appbase.io/experiensa/_doc/" . $appbase_id;
      error_log('I am updating the client id: '. $appbase_id . " url: " . $appbase_url);
    }

    if ($new_status == "publish") {
      $curl = curl_init();

      $client_data = client_data($client_id, $client);

      $jsonObj = json_encode($client_data);
      curl_setopt_array($curl, array(
        CURLOPT_URL => $appbase_url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $jsonObj,
        CURLOPT_HTTPHEADER => array(
          "Authorization: Basic djluYTFUTVZrOmZhZTBhNTI3LWRmNDAtNDI4Zi05MjRkLTVhODJlYjVlODliZA==",
          "Content-Type: application/json"
        ),
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      if ($err) {
        $error = new WP_Error($code, $msg);
        wp_die('Houston we have a problem');
      } else {
        $json = json_decode($response, true);
        if ($appbase_id == "") {
          update_post_meta( $client_id, 'exp_client_appbase_id', $json['_id'] );
        }
        wp_mail( 'gab.zambrano@gmail.com', 'YESS', 'inserted' );
        add_filter( 'redirect_post_location', 'add_notice_query_var' , 10, 2 );
      }
    }

    if ($new_status == 'trash') {
      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => $appbase_url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "DELETE",
        CURLOPT_HTTPHEADER => array(
          "Authorization: Basic djluYTFUTVZrOmZhZTBhNTI3LWRmNDAtNDI4Zi05MjRkLTVhODJlYjVlODliZA==",
          "Content-Type: application/json"
        ),
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
    }

  }
}
