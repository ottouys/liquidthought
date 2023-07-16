<?php get_header(); ?>

<?php 

    // Get the information from the Options Page
    $header = get_field('header', 'option');

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
      <div class="col-lg-7">
        <img src="<?php echo $category_side_image; ?>" alt="Summer Clearance Sale" class="img-responsive">
      </div>
      <div class="col-lg-5">
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
                $allCatsHeader = '<li><a href="#tabs-all">Both</a></li>';
                $allCatsBody = "";                    

                foreach ($all_categories as $cat) {
                  $category_id = $cat->term_id;                                 
                  $name = $cat->name;  
                  $slug = $cat->slug;  
                  $category_link = get_category_link($category_id);
                  $category_color = (get_field('primary_colour', $cat)) ? get_field('primary_colour', $cat) : "#000";



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
                    $allCatsBody .= "<a href='{$category_link}' class='btn btn-secondary' style='background-color:{$category_color};'>{$name}</a>";
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
              <?php 
                $term = get_term_by('id', $keyChild,'product_cat');
                $category_color = (get_field('primary_colour', $term)) ? get_field('primary_colour', $term) : "#000";     
                
                ?>
              <a href="<?php echo get_category_link($keyChild); ?>" class="btn btn-secondary"
                style="background-color:<?php echo $category_color; ?>;"><?php echo $childCat; ?></a>
              <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Recently Added -->
<?php echo do_shortcode("[product-row title='Recently Added' type='recent']"); ?>

<!-- About -->
<?php 
 // Get the information from the Home Page
 $about = get_field('about');

//  print "<pre>";
//  print_r($about);
//  print "</pre>";


 $description = ($about['description']) ? $about['description'] : "";
 $image = ($about['image']) ? $about['image'] : "";
 $background_image = ($about['background_image']) ? $about['background_image'] : "";
?>
<?php if(!empty($description) && !empty( $image)) : ?>
<div id="about" style="background-image:url(<?php echo $background_image; ?>);">
  <div class="container">
    <div class="row card-halves">
      <div class="col-lg-6 about-card">
        <div class="card">
          <?php echo $description; ?>
          <div class="cta">
            <a href="/about" class="btn btn-dark">About Us</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 about-card img">
        <img src="<?php echo $image; ?>" class="img-responsive">
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<!-- Unique Selling Points -->
<?php if( have_rows('unique_selling_points') ): ?>
<div id="unique-selling-points">
  <div class="container">
    <div class="row">
      <?php while( have_rows('unique_selling_points') ) : the_row(); ?>
      <div class="col-lg-4 selling-point">
        <?php             
            $icon = get_sub_field('icon');
            $heading = get_sub_field('heading');
            $description = get_sub_field('description');          
        ?>
        <?php if(!empty($icon)) : ?>
        <div class="icon">
          <img src="<?php echo $icon; ?>" alt="" srcset="">
        </div>
        <?php endif; ?>
        <?php if(!empty($heading)) : ?>
        <div class="heading">
          <h3><?php echo $heading; ?></h3>
        </div>
        <?php endif; ?>
        <?php if(!empty($description)) : ?>
        <div class="description">
          <p><?php echo $description; ?></p>
        </div>
        <?php endif; ?>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<?php endif; ?>

<!-- Featured -->
<?php echo do_shortcode("[product-row title='Featured' type='featured']"); ?>

<!-- Category Tiles -->
<?php echo do_shortcode("[category-tiles]"); ?>

<?php get_footer(); ?>