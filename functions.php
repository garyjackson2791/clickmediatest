<?php

// LOAD CORE
require_once( 'includes/bones.php' );
require_once( 'includes/helpers.php' );
require_once( 'includes/custom-functions.php' );

function bones_ahoy() {
  // launching operation cleanup
  add_action( 'init', 'head_cleanup' );

  // remove WP version from RSS
  add_filter( 'the_generator', 'bones_rss_version' );

  // clean up gallery output in wp
  add_filter( 'gallery_style', 'bones_gallery_style' );

  // enqueue base scripts and styles
  add_action( 'wp_enqueue_scripts', 'bones_scripts_and_styles', 999 );
  // ie conditional wrapper

  // launching this stuff after theme setup
  bones_theme_support();

  // cleaning up random code around images
  add_filter( 'the_content', 'bones_filter_ptags_on_images' );
  // cleaning up excerpt
  add_filter( 'excerpt_more', 'bones_excerpt_more' );

} /* end bones ahoy */

// let's get this party started
add_action( 'after_setup_theme', 'bones_ahoy' );


/************* OEMBED SIZE OPTIONS *************/
if ( ! isset( $content_width ) ) {
  $content_width = 680;
}

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'iphone',  375, 375, false );
add_image_size( 'small-image',  550, 550, false );
add_image_size( 'ipad-image', 768, 768, false );
add_image_size( 'large-laptop-image',  1440, 1440, false );
add_image_size( 'larger-image',  1800, 1600, false );
add_image_size( 'giant-image',  2400, 2400, false );

/* DON'T DELETE THIS CLOSING TAG */ ?>
