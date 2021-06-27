<?php
require_once THEME_DIR.'/inc/classes/ThemeHeader.class.php';
$header = new ThemeHeader();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="container lime lighten-5">
      <div class="row">
        <header class="ex-clearfix">
            <?php echo $header->get_header_top(); ?>
            <div class="col s12">
              <div class="row">
                <?php echo $header->get_logo(); ?>
                <div class="col s12 m5 left-align">
                  <?php echo $header->get_email(); ?>
                  <?php echo $header->get_phone(); ?>
                </div>
              </div>
            </div>
            <nav class='col s12 brown lighten-2'>
              <div class="nav-wrapper">
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <?php 
              wp_nav_menu( array(
              'container' => '',
              'menu_class'=>'left hide-on-med-and-down',
              'theme_location'=>'primary'
                ) );
              ?>
              </div>
            </nav>
            <?php 
              wp_nav_menu( array(
              'container' => '',
              'menu_class'=>'sidenav',
              'theme_location'=>'primary',
              'menu_id'=> 'mobile-demo', 
                ) );
            ?>		  
        </header>
      <main>