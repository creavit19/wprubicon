<?php 
$title = get_the_title();
$date = get_the_date('d F y');
$content = get_the_content();
$thumbnail = get_the_post_thumbnail();
get_header();
?>
<main>
  <div class="col s12 lime lighten-5">
    <div class="row">
      <div class="col s12 center-align">
        <h1><?php echo $title ?></h1>
        <div class="date"><?php echo $date ?></div>
        <div class="post-thumbnail"><?php echo $thumbnail ?></div>
      </div>
      <div class="divider"></div>
      <div class="col s12">
      <div class="content"><?php echo $content ?></div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
