<?php 

add_shortcode( 'product-row', 'product_row' );


function product_row( ) {

  $products = new WP_Query(
		array(
			'post_type'      => 'product',
			'posts_per_page' => -1,
			'order'          => 'ASC',
			'orderby'        => 'menu_order',
		)
	);

	if ( $slides->have_posts() ) :

    ob_start();    ?>

<div class="product-row">
  <div class="product-wrapper">




    <!-- <?php
		while ( $products->have_posts() ) :
			$slides->the_post();    
      
      global $post;

      $image = get_post_meta( $post->ID, '_nectar_slider_image', true );


      if(empty($image) || !$image){
        continue;
      }

      ?>

    <div class="slider-item">
      <img src="<?php echo $image; ?>">
      <?php 
          // print "<pre>";
          // print_r($image);
          // print "</pre>";
        ?>

    </div>
    <?php endwhile; ?> -->

  </div>
</div>

<?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php	return ob_get_clean(); 
}