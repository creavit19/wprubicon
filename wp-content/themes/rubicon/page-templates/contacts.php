<?php
/* Template Name: Contacts page */
get_header();

echo get_theme_page_title_block(get_the_title());
?>

<div class="col s12">
<h4><?php echo get_field('form_title'); ?></h4>
<?php echo do_shortcode('[contact-form-7 id="99" title="Contact form 1"]'); ?>
</div>




<?php get_footer(); ?>