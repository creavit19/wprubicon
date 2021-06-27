<?php
function get_theme_page_title_block($title, $has_breadcrumbs = true) {
	$breadcrumbs = yoast_breadcrumb( '<div id="breadcrumbs">','</div>', false );

	$html_breadcrumbs = ($has_breadcrumbs) ? '<div class="col-12">'. $breadcrumbs .'</div>' : null;

	$block = <<<HTML
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title text-center mb-15">
					<h2 class="title text-dark text-capitalize">{$title}</h2>
				</div>
			</div>
			{$html_breadcrumbs}
		</div>
	</div>
</nav>
HTML;

	return $block;
}