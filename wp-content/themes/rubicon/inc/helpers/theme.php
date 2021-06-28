<?php
function get_theme_page_title_block($title, $has_breadcrumbs = true) {
  $breadcrumbs = null;
  if ( function_exists('yoast_breadcrumb') ) {
    $breadcrumbs = yoast_breadcrumb( '<div id="breadcrumbs">','</div>', false);
  }

	$html_breadcrumbs = ($has_breadcrumbs && $breadcrumbs) ? '<div class="divider"></div><div class="center-align">'. $breadcrumbs .'</div><div class="divider"></div>' : null;

	$block = <<<HTML
<div class="col s12 breadcrumb-section">
  <div class="row">
    <div class="col s12">
      <h1 class="page-title">{$title}</h1>
        {$html_breadcrumbs}
    </div>
  </div>
</div>
HTML;

	return $block;
}