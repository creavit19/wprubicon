<?php 
get_header(); 
echo get_theme_page_title_block(get_the_title());
?>
<div class="col s12">
  <?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class() ?> >
      <?php the_post_thumbnail(); ?>
      <div class="page-content">
        <?php the_content(); ?>
        <?php edit_post_link( __( 'Edit', 'rubicon' ), '<span class="edit-link">', '</span>' ); ?>
      </div>

      <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'rubicon' ), 'after' => '</p></nav>' ) ); ?>

    </article>
  <?php endwhile;?>
</div>
<?php get_footer(); ?>
