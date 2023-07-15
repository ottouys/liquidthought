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
	
}

// Allow Options Page
if( function_exists('acf_add_options_page') ) {    
    acf_add_options_page();    
}