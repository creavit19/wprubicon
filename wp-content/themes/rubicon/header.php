<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title(''); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?php echo TEMP_DIR ?>img/favicon/favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class='container'>
		<div class="row">
			<header>
				<div class="col s12 grey darken-4">
					<div class="slogan">
						The best hand tools for home and work
					</div>
				</div>
				<div class="col s12 lime lighten-5">
					<div class="row">
						<div class="col s12 m7">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo"><img src="<?php echo TEMP_DIR ?>img/logo.png" alt="" /></a>
						</div>
						<div class="col s12 m5 center-align">
							<div class="email_block"><a href="#">info@rubicontools.com</a></div>
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