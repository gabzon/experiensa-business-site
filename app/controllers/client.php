<?php

namespace App;

use Sober\Controller\Controller;

// error handling tutotrial
//https://www.sitepoint.com/displaying-errors-from-the-save_post-hook-in-wordpress/

class Client extends Controller
{
  public function __construct () {
    //add_action( 'save_post', array($this,'save_post'));
  }

  function save_post ( $post_id ) {
    $post = array(
        'ID'       => $post_id,
        'content' => ''
      );

    remove_action( 'save_post', array( $this, 'modify_post_content' ) );
    wp_update_post( $post );
    add_action( 'save_post', array( $this, 'modify_post_content' ) );
    add_action( 'admin_notices', 'sample_admin_notice__success' );
  }

  function sample_admin_notice__success() {

  }

}
