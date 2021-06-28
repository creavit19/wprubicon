<?php
$post_url = get_permalink();
$post_title = get_the_title();
$post_date = get_the_date();
$post_author = get_the_author_posts_link();
$post_content = wp_trim_words(get_the_content(), 60, '...');

$thumbnail = get_the_post_thumbnail();
$html_thumbnail = (!empty($thumbnail)) ? '<a href="'. $post_url .'" class="archive-img">'. $thumbnail .'</a>' : null;

$txt_more = __('Read More', 'rubicon');
$txt_posted_by = __('Posted by', 'rubicon');
?>
<div class="col s12">
		<?php echo $html_thumbnail; ?>
		<div class="blog-post-content">
			<h3 class="archive-title"><a href="<?php echo $post_url; ?>"><?php echo $post_title; ?></a>
			</h3>
			<h5 class="archive-sub-title"><?php echo $txt_posted_by .' '. $post_author; ?> <span
					class="separator">/</span> <?php echo $post_date; ?></h5>
			<?php echo $post_content; ?>
			<a class="read-more" href="<?php echo $post_url; ?>"><?php echo $txt_more; ?></a>
	</div>
</div>