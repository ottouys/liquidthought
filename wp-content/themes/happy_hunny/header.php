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
                        <p>$text</p>
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
              <img src="<?php echo $search_icon; ?>" alt="Search">
            </div>
            <div class="form">
              <form role="search" method="get" id="searchform" class="searchform"
                action="http://localhost/liquidthought/">
                <div>
                  <label class="screen-reader-text" for="s">Search for:</label>
                  <input type="text" value="" name="s" id="s">
                  <input type="submit" id="searchsubmit" value="Search">
                </div>
              </form>
            </div>
            <?php endif ; ?>
          </div>
          <div class="col text-center main-logos">
            <?php if(isset($icon)) : ?>
            <img src="<?php echo $icon; ?>" alt="Logo">
            <?php else : ?>
            <img src="<?php echo get_site_icon_url(); ?>" alt="Logo">
            <?php endif ; ?>

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
					// 'theme_location' => 'primary',
					// 'menu_class'     => 'nav-menu',
				)
			);
			?>
      </nav><!-- #site-navigation -->

      <?php 

        // Get the information from the Options Page
        $slogan = $header['slogan'];
        $category_side_image = $header['category_side_image'];        

      ?>
      <div id="header-categories">
        <div class="container">
          <div class="row">
            <div class="col">
              <?php echo $slogan; ?>
            </div>
          </div>
          <div class="row">
            <div class="col-7">
              <img src="<?php echo $category_side_image; ?>" alt="Summer Clearance Sale" class="img-responsive">
            </div>
            <div class="col-5">
              <div class="card">
                <h4>Head-to-toe</h4>
                <p>Explore our categories</p>
                <?php 

                    $taxonomy     = 'product_cat';
                    $orderby      = 'name';  
                    $empty        = 1;

                    $args = array(
                          'taxonomy'     => $taxonomy,
                          'orderby'      => $orderby,                          
                          'hide_empty'   => $empty
                    );

                    $all_categories = get_categories( $args );

                    $parentCats = array();
                    $allCatsHeader = '<li><a href="#tabs-all">All</a></li>';
                    $allCatsBody = "";                    

                    foreach ($all_categories as $cat) {
                      $category_id = $cat->term_id;                                 
                      $name = $cat->name;  
                      $slug = $cat->slug;  
                      $category_link = get_category_link($category_id);

                      if($cat->parent == 0) {                          
                          
                          $allCatsHeader .= "<li><a href='#tabs-{$slug}'>{$name}</a></li>";

                          $args2 = array(
                                  'taxonomy'     => $taxonomy,
                                  'child_of'     => 0,
                                  'parent'       => $category_id,
                                  'orderby'      => $orderby,                                  
                                  'hide_empty'   => $empty
                          );
                          $sub_cats = get_categories( $args2 );
                          if($sub_cats) {
                              foreach($sub_cats as $sub_category) {
                                $parentCats[$slug][$sub_category->term_id] = $sub_category->name ;
                              }   
                          }
                      } else{
                        $allCatsBody .= "<a href='{$category_link}' class='cat-btn'>{$name}</a>";
                      }       
                    }                     
                ?>
                <div id="tabs">
                  <ul>
                    <?php echo $allCatsHeader; ?>
                  </ul>
                  <div id="tabs-all">
                    <?php echo $allCatsBody; ?>
                  </div>
                  <?php foreach ($parentCats as $key => $childCatArray) : ?>
                  <div id="tabs-<?php echo $key; ?>">
                    <?php foreach ($childCatArray as $keyChild => $childCat) : ?>
                    <a href="<?php echo get_category_link($keyChild); ?>" class="cat-btn"><?php echo $childCat; ?></a>
                    <?php endforeach; ?>
                  </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>


  </header><!-- #masthead -->

  <div id="main" class="wrapper">