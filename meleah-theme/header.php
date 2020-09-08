<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<!-- Google Webfonts Load -->
		<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
		<!-- CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/plugins/owl-carousel/owl.theme.default.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/plugins/sal/sal.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/css/theme.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/css/meleah.css" rel="stylesheet">
		<!-- Fonts/Icons -->
		<script src="https://kit.fontawesome.com/e5141475d1.js" crossorigin="anonymous"></script>

	</head>
	<body <?php body_class(); ?> data-preloader="1">

	<header>
			<nav class="navbar navbar-dark navbar-absolute navbar-fixed"><!-- add 'navbar-dark/navbar-transparent/navbar-transparent-dark' -->
				<div class="container">
					<a class="navbar-brand" href="#">
						<h5>Meleah Murphy</h5>
					</a>
					<!-- removed oldnav.html from this spot -->
					<!-- for walker this is 'header-menu' -->

					
					<?php
               		wp_nav_menu(array(
                		'theme_location'    => 'header-menu',
                		'container'       => 'div',
                		'container_id'    => 'main-nav',
                		'container_class' => 'collapse navbar-collapse justify-content-end',
                		'menu_id'         => false,
                		'menu_class'      => 'nav',
                		'depth'           => 3,
                		'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                		'walker'          => new wp_bootstrap_navwalker()
                	));
                	?>
        			

					<!-- end nav -->
					
					<!-- Nav Toggle button -->
					<button class="nav-toggle-btn">
			            <span class="lines"></span>
			        </button><!-- toggle button will show when screen resolution is less than 992px -->
				</div><!-- end container -->
			</nav>
		</header>
