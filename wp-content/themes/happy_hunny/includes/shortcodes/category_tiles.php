<?php 

add_shortcode( 'category-tiles', 'category_tiles' );

function category_tiles( ) {
  $taxonomy     = 'product_cat';
  $orderby      = 'name';  
  $empty        = 1;

  $args = array(
        'taxonomy'     => $taxonomy,
        'orderby'      => $orderby,                          
        'hide_empty'   => $empty,
        'number'       => 5,
  );

  $all_categories = get_categories( $args );    

  $firstItem = true;
  //$total = 1;

  ?>

<?php if(!empty($all_categories)) { ?>
<?php ob_start(); ?>
<div id="category-tiles">
  <div class="container">
    <div class="row">
      <?php foreach ($all_categories as $cat) { ?>
      <?php 
          $category_id = $cat->term_id;                                 
          $name = $cat->name;  
          $slug = $cat->slug;  
          $category_link = get_category_link($category_id);

          if($firstItem) {
            $itemClasses = 'col-8';
          } else {
            $itemClasses = 'col-4';
          }

          // Get the thumbnail id using the queried category term_id
          $thumbnail_id = get_term_meta( $category_id, 'thumbnail_id', true ); 

          // Get the image URL
          $image = wp_get_attachment_url( $thumbnail_id );

          // print "<pre>";
          // print "Total: " . $total . "<br/>";
          // print_r($cat);
          // print "</pre>";
      ?>
      <div class="cat-tile <?php echo $itemClasses; ?>" style="background-image: url(<?php echo $image; ?>)">
        <div class="btn-wrapper">
          <a href="<?php echo $category_link; ?>"><?php echo $name; ?></a>
        </div>
      </div>
      <?php $firstItem = false; ?>
      <?php } ?>
    </div>
  </div>
</div>
<?php } ?>
<?php wp_reset_postdata(); ?>
<?php 

  return ob_get_clean();
}