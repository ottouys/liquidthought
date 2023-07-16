<?php get_header(); ?>
<?php
$s=get_search_query();
$args = array(
                's' =>$s,
                'post_type'      => 'product'
            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) { ?>

<div class="container">
  <div class="row">
    <?php _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>"); ?>
  </div>
  <div class="row">
    <?php while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 
           wc_get_template_part( 'content', 'product' );
      } ?>
  </div>
</div>

<?php }else{ ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
      <div class="alert alert-info">
        <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
      </div>
    </div>
  </div>
</div>

<?php } ?>

<?php get_footer(); ?>