<?php
define('THEME_DIR', get_template_directory());
define('THEME_DIR_URI', get_template_directory_uri());

require_once THEME_DIR .'/inc/helpers/file.php';
require_once THEME_DIR .'/inc/wp/enqueue_scripts.php';
require_once THEME_DIR .'/inc/wp/supports.php';

require_once THEME_DIR .'/inc/hooks/images.php';

require_once THEME_DIR .'/inc/acf/options_page.php';

require_once THEME_DIR .'/inc/wp/menus.php';
// require_once THEME_DIR .'/inc/wp/image_sizes.php';
require_once THEME_DIR .'/inc/wp/widget_areas.php';
require_once THEME_DIR .'/inc/shortcodes/footer_shortcodes.php';

require_once THEME_DIR .'/inc/for_templates/ajax-fbi-wanted.php';
