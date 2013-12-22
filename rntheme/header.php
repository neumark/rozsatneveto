<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<div id="masthead" class="site-header" role="banner">
                <div class="container head">
                    <a href="index.html"><img id="logo" src="wp-content/themes/rntheme/images/rozsa_logo.png" alt="Rózsátnevető Waldorf Óvoda" width="387" height="100"></a>
                    <h1>„ Minden emberi lény egy fénylő <br>szellemet hordoz.”</h1>
                    <p>Rózsátnevető Waldorf Óvoda&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://goo.gl/maps/omKTq" target="_blank">Budapest, XI. ker. Diószegi út 44.</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="mailto:rozsatneveto.ovoda@gmail.com">rozsatneveto.ovoda@gmail.com</a>&nbsp;&nbsp;|&nbsp;&nbsp;06 1 635 4878</p>
                </div>
			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</div><!-- #masthead -->

		<div id="main" class="site-main">
