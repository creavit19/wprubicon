<?php
get_header();

if(is_archive()) {
	require_once THEME_DIR .'/woocommerce/archive.php';
} else { ?>

  <div class="col s12 breadcrumb-section">
    <div class="row">
      <div class="col s12">
        <?php woocommerce_template_single_title(); ?>
        <div class="divider"></div>
        <div class="center-align">
          <?php woocommerce_breadcrumb([
            'delimiter'   => '&nbsp;»&nbsp;',
					  'wrap_before' => '<div id="breadcrumbs">',
					  'wrap_after'  => '</div>'
            ]); ?>
        </div>
        <div class="divider"></div>
      </div>
    </div>
  </div>
	<div class="col s12">
		<?php woocommerce_content(); ?>
	</div>
<?php }

get_footer();