<?php 

add_shortcode( 'product-row', 'product_row' );


function product_row( $atts, $content = null ) {

  $a = shortcode_atts( array(
    'title' => 'Products',  
    'type' => '' 
  ), $atts );

  if($a['type'] == 'recent') {
    $products = new WP_Query(
      array(
        'post_type'      => 'product',
        'posts_per_page' => 4,
        'post_status' => 'publish',
        'orderby' => 'date',
        'no_found_rows' => true,
      )
    );
  } else if ($a['type'] == 'featured') {
    $products = new WP_Query(
      array(
        'post_type'      => 'product',
        'meta_key' => 'total_sales',
        'orderby' => 'meta_value_num',
        'posts_per_page' => 4,
      )
    );
  }
  

	if ( $products->have_posts() ) :

    ob_start();    ?>

<div class="product-row">
  <div class="container">
    <div class="row">
      <div class="heading-wrapper">
        <h5><?php echo $a['title']; ?></h5>
      </div>
    </div>
    <div class="row">
      <div class="product-wrapper">

        <?php
          while ( $products->have_posts() ) :
            $products->the_post();  
            
            wc_get_template_part( 'content', 'product' );

          endwhile; 
        ?>

      </div>
    </div>
  </div>
</div>
<?php else : ?>
<?php echo __( 'No products found' ); ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php	return ob_get_clean(); 
}