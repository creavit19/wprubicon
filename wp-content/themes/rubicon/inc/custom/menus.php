<?php
register_nav_menu( 'primary', 'Primary Menu' );

// Замена стандартного wp-класса на active
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active disabled ';
  }
  return $classes;
}
