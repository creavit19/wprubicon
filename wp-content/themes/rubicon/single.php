<?php 
$date = get_the_date('d F y');
$thumbnail = get_the_post_thumbnail();
$content = get_the_content();
get_header();
echo get_theme_page_title_block(get_the_title());
?>
<div class="col s12">
  <div class="row">
    <div class="col s12">
    <div class="post-thumbnail"><?php echo $thumbnail ?></div>
    <div class="content"><?php echo $content ?></div>
    <div class="date"><?php echo $date ?></div>
    </div>
  </div>
</div>
<?php get_footer(); ?>