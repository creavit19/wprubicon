<?php get_header(); 
$slider_images = get_field('slider');
?>
<div class="col s12 clear-padding">
  <div class="carousel carousel-slider" id="main-slider">
  <?php foreach($slider_images as $slider_img) { ?>
    <div class="carousel-item"><img src="<?php echo $slider_img['image']; ?>"></div> 
  <?php } ?>
  </div>
</div>
<div class="col s12">
  <div class="row">
  <?php
  $categories = get_terms(array(
    'taxonomy' => 'product_cat'
  ));
  foreach($categories as $category){
    if($category->parent != 0 or $category->slug == 'uncategorized') continue;
    $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
    $image_url = wp_get_attachment_url( $thumbnail_id );
  ?>
    <div class="col s12 l6 xl3">
      <div class="planning">
        <a href="<?php echo get_term_link($category->term_id, 'product_cat'); ?>">
          <div class="service_block">
            <img src="<?php echo $image_url; ?>" />						
            <div class="link_title"><?php echo $category->name; ?></div>
            <div class="service_txt"><?php echo $category->description; ?></div>
          </div>
        </a>
      </div>
    </div>
  <?php } ?>
  </div>
</div>
<div class="col s12 brown lighten-2">
  <h2 class='white-text'>Our products</h2>
</div>
<div class="col s12">
  <div class="row">
    <?php
    $promo = get_terms(array(
      'taxonomy' => 'product_promo'
    ));
    foreach($promo as $item){
    ?>
    <div class="col s12 l4">
      <a href="<?php echo get_term_link($item->term_id, 'product_promo'); ?>" class='brown-text text-lighten-2 products'>
        <img src="<?php echo get_field('image', 'product_promo_'.$item->term_id); ?>" alt="">
        <h3><?php echo $item->name; ?></h3>
      </a>
    </div>
    <?php } ?>
  </div>
</div>
<?php get_footer(); ?>