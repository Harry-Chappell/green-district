<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#215241">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#215241">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        
        <!-- Font Awesome -->
		<script src="https://kit.fontawesome.com/e4c66c7e6d.js" crossorigin="anonymous"></script>

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

	</head>

	<!-- Set Homepage ID -->
	<?php $home_id = get_option('page_on_front'); ?>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">

					<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

					<div id="hamburger" class="hamburger d-hide t-hide" onclick="mobileMenuToggle()">
						<div></div>
						<div></div>
						<div></div>
					</div>

					<div id="menu-cntr" class="menu-cntr">

						<div class="social">

							<?php if( get_field('tiktok', $home_id) ): ?>
								<a href="<?php the_field('tiktok', $home_id); ?>" title="Tiktok"><i class="fa-brands fa-tiktok"></i></a>
							<?php endif; ?>

							<?php if( get_field('instagram', $home_id) ): ?>
								<a href="<?php the_field('instagram', $home_id); ?>" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
							<?php endif; ?>

							<?php if( get_field('facebook', $home_id) ): ?>
								<a href="<?php the_field('facebook', $home_id); ?>" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
							<?php endif; ?>

							<?php if( get_field('twitter', $home_id) ): ?>
								<a href="<?php the_field('twitter', $home_id); ?>" title="Twitter"><i class="fa-brands fa-twitter"></i></a>
							<?php endif; ?>

							<?php if( get_field('youtube', $home_id) ): ?>
								<a href="<?php the_field('youtube', $home_id); ?>" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
							<?php endif; ?>

							<?php if( get_field('linkedin', $home_id) ): ?>
								<a href="<?php the_field('linkedin', $home_id); ?>" title="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
							<?php endif; ?>

						</div>

						<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
							)); ?>
							
						</div>

					</nav>

				</div>

			</header>
