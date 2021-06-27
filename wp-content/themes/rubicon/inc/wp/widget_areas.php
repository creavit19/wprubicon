<?php
function rubicon_widget_areas() {
	
	// Footer Phone
	register_sidebar( array(
		'name'          => __('Footer Phone'),
		'id'            => 'footer-phone',
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
		'before_sidebar' => '',
		'after_sidebar'  => '',
	) );

  // Footer Social
	register_sidebar( array(
		'name'          => __('Footer Social'),
		'id'            => 'footer-social',
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
		'before_sidebar' => '',
		'after_sidebar'  => '',
	) );

}
add_action( 'widgets_init', 'rubicon_widget_areas' );
