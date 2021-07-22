<div class="col s12">
  <?php 

if ( is_singular( 'product' ) ) {

  while ( have_posts() ) :
    the_post();
    wc_get_template_part( 'content', 'single-product' );
  endwhile;

} else {
  ?>
  
  <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) {
     echo get_theme_page_title_block(woocommerce_page_title(false));
  }
  ?>
  <?php if(is_shop()){ 
  
  echo do_shortcode( '[action_summer]' );
    
  ?>
  <div class="hide-on-med-and-down typing" id="type">
    Where can I buy a reliable tool?#
    Of course in the Rubicon store.#
    Are you sure of the quality?#
    Certainly! Premium quality!#
    By the way, the prices are good there.#
    OK!  
  </div>
  <?php } ?>
<!--
  <?php do_action( 'woocommerce_archive_description' ); ?>
-->
  <?php if ( woocommerce_product_loop() ) : ?>

    <?php do_action( 'woocommerce_before_shop_loop' ); ?>

    <?php woocommerce_product_loop_start(); ?>

    <?php if ( wc_get_loop_prop( 'total' ) ) : ?>
      <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>
        <?php wc_get_template_part( 'content', 'product' ); ?>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php woocommerce_product_loop_end(); ?>

    <?php do_action( 'woocommerce_after_shop_loop' ); ?>

    <?php
  else :
    do_action( 'woocommerce_no_products_found' );
  endif;
}
  ?>
</div>
