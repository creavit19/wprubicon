
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title>Tools for life</title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?php echo TEMP_DIR ?>img/favicon/favicon.ico" type="image/x-icon">
	<link type="text/css" rel="stylesheet" href="<?php echo TEMP_DIR ?>libs/materialize/css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="<?php echo TEMP_DIR ?>css/styles.css">
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
							<a href="#!" class="brand-logo"><img src="<?php echo TEMP_DIR ?>img/logo.png" alt="" /></a>
						</div>
						<div class="col s12 m5 center-align">
							<div class="email_block"><a href="#">info@rubicontools.com</a></div>
						</div>
					</div>
				</div>
				<nav class='col s12 brown lighten-2'>
					<div class="nav-wrapper">
					
					<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
					<ul class="left hide-on-med-and-down">
						<li class='active'><a href="#">Home</a></li>
						<li><a href="#">Catalog</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contacts</a></li>
					</ul>
					</div>
				</nav>
				<ul class="sidenav" id="mobile-demo">
					<li class='active'><a href="#">Home</a></li>
					<li><a href="#">Catalog</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contacts</a></li>
				</ul>	  		  
			</header>
			<main>
				<div class="col s12 clear-padding">
					<div class="carousel carousel-slider">
						<a class="carousel-item" href="#one!"><img src="<?php echo TEMP_DIR ?>img/slider/slide1.jpg"></a>
						<a class="carousel-item" href="#two!"><img src="<?php echo TEMP_DIR ?>img/slider/slide2.jpg"></a>
						<a class="carousel-item" href="#three!"><img src="<?php echo TEMP_DIR ?>img/slider/slide3.jpg"></a>
					  </div>
				</div>
				<div class="col s12 lime lighten-5">
					<div class="row">
						<div class="col s12 m6 l3">
							<div class="planning">
								<a href="#">
									<div class="service_block">
										<img src="<?php echo TEMP_DIR ?>img/icon1.png" />						
										<div class="link_title">Home</div>
										<div class="service_txt">Any small home repairs will be a pleasant hobby</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col s12 m6 l3">
							<div class="planning">
								<a href="#">
									<div class="service_block">
										<img src="<?php echo TEMP_DIR ?>img/icon2.png" />						
										<div class="link_title">Job</div>
										<div class="service_txt">Professional tools of the highest quality and long service life</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col s12 m6 l3">
							<div class="planning">
								<a href="#">
									<div class="service_block">
										<img src="<?php echo TEMP_DIR ?>img/icon3.png" />						
										<div class="link_title">Garden</div>
										<div class="service_txt">Nunc consequat iaculis risus, nec eleifend ligula tempus in. Sed orci</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col s12 m6 l3">
							<div class="planning">
								<a href="#">
									<div class="service_block">
										<img src="<?php echo TEMP_DIR ?>img/icon4.png" />						
										<div class="link_title">Hike</div>
										<div class="service_txt">Tools brand Rubicon become an indispensable tool in the campaign</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12 brown lighten-2">
					<h2 class='white-text'>Our products</h2>
				</div>
				<div class="col s12 white">
					<div class="row">
						<div class="col s12 l4">
							<a href="#" class='brown-text text-lighten-2 products'>
								<img src="<?php echo TEMP_DIR ?>img/post_prev1.jpg" alt="">
								<h3>Crimpers</h3>
							</a>
						</div>
						<div class="col s12 l4">
							<a href="#" class='brown-text text-lighten-2 products'>
								<img src="<?php echo TEMP_DIR ?>img/post_prev2.jpg" alt="">
								<h3>Wrench</h3>
							</a>
						</div>
						<div class="col s12 l4">
							<a href="#" class='brown-text text-lighten-2 products'>
								<img src="<?php echo TEMP_DIR ?>img/post_prev3.jpg" alt="">
								<h3>Screwdrivers</h3>
							</a>
						</div>
					</div>
				</div>
			</main>
			<footer>
				<div class="col s12 grey darken-1 white-text">
					<div class="copyright">RUBICON &copy; 2015  |  <a href="#" class='lime-text text-lighten-2'>Privacy Policy</a></div>
				</div>
			</footer>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo TEMP_DIR ?>libs/materialize/js/materialize.min.js"></script>
	<script type="text/javascript" src="<?php echo TEMP_DIR ?>js/app.js"></script>
    <?php wp_footer(); ?>
</body>
</html>