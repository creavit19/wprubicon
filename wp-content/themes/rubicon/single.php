<?php 
$title = get_the_title();
$date = get_the_date('d F y');
$thumbnail = get_the_post_thumbnail();
$content = get_the_content();
if ( function_exists('yoast_breadcrumb') ) {
  $breadcrumbs = yoast_breadcrumb( '<div id="breadcrumbs">','</div>', false);
}
get_header();
?>
<div class="col s12 breadcrumb-section">
  <div class="row">
    <div class="col s12 center-align">
      <h1><?php echo $title ?></h1>
      <div class="date"><?php echo $date ?></div>
      <div class="divider"></div>
      <?php if(!empty($breadcrumbs)) echo $breadcrumbs ?>
      <div class="divider"></div>
    </div>
  </div>
</div>
<div class="col s12">
  <div class="row">
    <div class="col s12">
    <div class="post-thumbnail"><?php echo $thumbnail ?></div>
    <div class="content"><?php echo $content ?></div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
