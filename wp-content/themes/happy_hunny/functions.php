<?php
function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_action( 'wp_enqueue_scripts', 'hh_theme_enqueue_styles' );
function hh_theme_enqueue_styles() {
	$parenthandle = 'parent-style'; 
	$theme        = wp_get_theme();
	wp_enqueue_style( $parenthandle,
		get_template_directory_uri() . '/style.css',
		array(), 
		'1'
	);
	wp_enqueue_style( 'child-style',
		get_stylesheet_uri(),
		array( $parenthandle ),
		'1'
	);

  $now = new DateTime();
  $now->format('Y-m-d H:i:s');    // MySQL datetime format
   
	
  wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), $now->getTimestamp(), true );
}


// Allow Options Page
if( function_exists('acf_add_options_page') ) {    
  acf_add_options_page();    
}

// Shortcodes
require_once('includes/shortcodes/product_row.php');
require_once('includes/shortcodes/category_tiles.php');

// Product Customizations
add_action ( 'woocommerce_after_shop_loop_item_title', 'custom_after_title' );
  function custom_after_title() {
  global $product;
  if ( $product->get_description() ) {
    echo "<span class='description'>" . $product->get_description() . "</span>";
  }
}