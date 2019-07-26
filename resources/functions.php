<?php

/**
* Do not edit anything in this file unless you know what you're doing
*/

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
* Helper function for prettying up errors
* @param string $message
* @param string $subtitle
* @param string $title
*/
$sage_error = function ($message, $subtitle = '', $title = '') {
  $title = $title ?: __('Sage &rsaquo; Error', 'sage');
  $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
  $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
  wp_die($message, $title);
};

/**
* Ensure compatible version of PHP is used
*/
if (version_compare('7', phpversion(), '>=')) {
  $sage_error(__('You must be using PHP 7 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
* Ensure compatible version of WordPress is used
*/
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
  $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
* Ensure dependencies are loaded
*/
if (!class_exists('Roots\\Sage\\Container')) {
  if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
    $sage_error(
      __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
      __('Autoloader not found.', 'sage')
    );
  }
  require_once $composer;
}

/**
* Sage required files
*
* The mapped array determines the code library included in your theme.
* Add or remove files to the array as needed. Supports child theme overrides.
*/
array_map(function ($file) use ($sage_error) {
  $file = "../app/{$file}.php";
  if (!locate_template($file, true, true)) {
    $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
  }
}, [
  'helpers',
  'setup',
  'filters',
  'admin',
  'taxonomy/alliances',
  'taxonomy/countries',
  'taxonomy/themes',
  'taxonomy/world-regions',
  'cpt/client',
  'api/media',
  'api/media-endpoint',
  'api/client',
  'inc/wp-bootstrap-pagination',
  'appbase/create_update_client',
]);

/**
* Here's what's happening with these hooks:
* 1. WordPress initially detects theme in themes/sage/resources
* 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
* 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
*
* We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
* But functions.php, style.css, and index.php are all still located in themes/sage/resources
*
* This is not compatible with the WordPress Customizer theme preview prior to theme activation
*
* get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
* get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
* locate_template()
* ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
* └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
*/
array_map(
  'add_filter',
  ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
  array_fill(0, 4, 'dirname')
);
Container::getInstance()
->bindIf('config', function () {
  return new Config([
    'assets' => require dirname(__DIR__).'/config/assets.php',
    'theme' => require dirname(__DIR__).'/config/theme.php',
    'view' => require dirname(__DIR__).'/config/view.php',
  ]);
}, true);




/**
* Add Photographer Name and URL fields to media uploader
*
* @param $form_fields array, fields to include in attachment form
* @param $post object, attachment record in database
* @return $form_fields, modified form fields
* http://www.wpbeginner.com/wp-tutorials/how-to-add-additional-fields-to-the-wordpress-media-uploader/
*/

function be_attachment_field_credit( $form_fields, $post ) {
  $form_fields['exp_media_url'] = array(
    'label' => 'Media URL',
    'input' => 'text',
    'value' => get_post_meta( $post->ID, 'exp_media_url', true ),
  );
  return $form_fields;
}

add_filter( 'attachment_fields_to_edit', 'be_attachment_field_credit', 10, 2 );

/**
* Save values of Photographer Name and URL in media uploader
*
* @param $post array, the post data for database
* @param $attachment array, attachment fields from $_POST form
* @return $post array, modified post data
*/

function be_attachment_field_credit_save( $post, $attachment ) {
  if( isset( $attachment['exp_media_url'] ) ){
    update_post_meta( $post['ID'], 'exp_media_url', esc_url( $attachment['exp_media_url'] ) );
  }
  return $post;
}

add_filter( 'attachment_fields_to_save', 'be_attachment_field_credit_save', 10, 2 );

add_filter('sage/display_sidebar', function ($display) {
  static $display;

  isset($display) || $display = in_array(true, [
    // The sidebar will be displayed if any of the following return true
    is_single(),
    is_404(),
    is_page_template('template-custom.php')
  ]);

  return $display;
});



add_action( 'rest_api_init', function () {
  //require 'includes/class-rest-tutorial-restaurant-endpoint.php';
  $controller = new Exp_Client_Endpoint();
  $controller->register_routes();
} );

// add_action('wp_head', 'show_template');
// function show_template() {
// 	global $template;
//     echo '<div style="background:red; position:fixed; bottom:10px;">';
//     print_r($template);
//     echo '</div>';
// }
//
