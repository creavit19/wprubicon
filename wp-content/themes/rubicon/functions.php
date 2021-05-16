<?php
define('THEME_DIR', get_template_directory());
define('THEME_DIR_URI', get_template_directory_uri());

define('TEMP_DIR', get_template_directory_uri().'/template/');

require_once THEME_DIR .'/inc/helpers/file.php';
require_once THEME_DIR .'/inc/wp/enqueue_scripts.php';

add_theme_support('title-tag');
