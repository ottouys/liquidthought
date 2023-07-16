<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="https://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
  <!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js?ver=3.7.0" type="text/javascript"></script>
<![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="hfeed site">
    <!-- Top Bar -->
    <?php 
        // Get the information from the Options Page
        $topBar = get_field('top_bar', 'option');

        // Get sub field values.
        $active = $topBar['top_bar_active'][0];
        $text = $topBar['top_bar_text'];

        if(isset($topBar) && $active && $text!=''){ 
            echo <<<HTML
                <div id="topbar">                
                    <div class="content">                        
                        <p>
                          <a href="/shop">
                          $text
                            <svg class="icon icon-arrow" width="17px" height="11px" viewBox="0 0 17 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <g id="Category" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                  <g id="Happy-Hunny-Category-Filter-1-Mobile" transform="translate(-319.000000, -113.000000)" stroke="#FFFFFF" stroke-width="2">
                                      <g id="Filter-Menu-|-Level-1" transform="translate(50.000000, 0.000000)">
                                          <g id="Item" transform="translate(25.000000, 108.000000)">
                                              <g id="long-arrow-right" transform="translate(245.000000, 6.000000)">
                                                  <line x1="4.7582099e-17" y1="4.363961" x2="13.7146063" y2="4.363961" id="Line"></line>
                                                  <polyline id="Path" transform="translate(10.628820, 4.363961) rotate(-315.000000) translate(-10.628820, -4.363961) " points="7.54303346 1.27817458 13.7146063 1.27817458 13.7146063 7.44974742"></polyline>
                                              </g>
                                          </g>
                                      </g>
                                  </g>
                              </g>
                          </svg>
                        </p>
                      </a>
                    </div>
                </div>
            HTML;            
        } 
    ?>

    <!-- Header -->
    <?php 
     // Get the information from the Options Page
     $header = get_field('header', 'option');

     // Get sub field values.
     $icon = $header['icon'];
     $main_header_logo = $header['main_header_logo'];
     $search_icon = $header['search_icon'];
     $account = $header['account'];
     $wishlist = $header['wishlist'];   
     $cart = $header['cart'];   
    
    ?>
    <header id="masthead" class="site-header">
      <hgroup class="container">
        <div class="row">
          <div class="col search">
            <?php if(isset($search_icon)) : ?>
            <div class="icon">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <img src="<?php echo $search_icon; ?>" alt="Search">
              </button>
            </div>
            <?php endif ; ?>
          </div>
          <div class="col text-center main-logos">

            <?php if(isset($main_header_logo)) : ?>
            <img src="<?php echo $main_header_logo; ?>" alt="Happy Hunny">
            <?php else : ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php endif ; ?>
          </div>
          <div class="col socials">
            <?php if(isset($account)) : ?>
            <a href="/account"><img src="<?php echo $account; ?>" alt="My Account"></a>
            <?php endif ; ?>
            <?php if(isset($wishlist)) : ?>
            <a href="/wishlist"><img src="<?php echo $wishlist; ?>" alt="View My Wishlist"></a>
            <?php endif ; ?>
            <?php if(isset($cart)) : ?>
            <a href="/cart"><img src="<?php echo $cart; ?>" alt="View My Cart"></a>
            <?php endif ; ?>
          </div>
        </div>
      </hgroup>

      <nav id="site-navigation" class="main-navigation">
        <?php
			wp_nav_menu(
				array(
          'menu'           => 'Main Menu'					
				)
			);
			?>
      </nav><!-- #site-navigation -->
  </div>


  </header><!-- #masthead -->

  <div id="main" class="wrapper">