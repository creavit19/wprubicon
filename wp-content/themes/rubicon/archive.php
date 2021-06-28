<?php
get_header();
echo get_theme_page_title_block(get_the_archive_title());
?>
<div class="col s12">
  <?php
    if(have_posts()) {
      while(have_posts()) {
        the_post();
        echo '<div class="row">';
        get_template_part('template-parts/posts/post', 'item');
        echo '</div>';
      }

      echo get_the_posts_pagination(array(
        'prev_text' => '«',
        'next_text' => '»',
        'class' => 'archive-nav',
      ));
    } else {
      get_template_part('template-parts/posts/post', 'none');
    }
  ?>
</div>
<?php
get_footer();
?>
