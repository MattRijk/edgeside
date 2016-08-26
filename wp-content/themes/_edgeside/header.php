<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _edgeside
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_edgeside' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div>
				<a href="https://edgeside001-mattrijk.c9users.io" >
					<img id="logo-sm" class="logo" src="https://edgeside001-mattrijk.c9users.io/wp-content/themes/_edgeside/img/edge-side-logo.svg"/>
					<img id="logo-lg" class="logo-lg" src="https://edgeside001-mattrijk.c9users.io/wp-content/themes/_edgeside/img/edge-side-logo-no-numbers.svg"/>
				</a>
			</div>
			<div>
					<img class="logo-num" src="https://edgeside001-mattrijk.c9users.io/wp-content/themes/_edgeside/img/edge-side-logo-num.svg"/>
			</div>

			<div id="header-right-area">
				
				<div id="phone-number">
					<h2>1 800 545 3433</h2>
				</div>
				<div id="header-right-nav-area">
					
					<div id="social-icons-header" class="widget-area" role="complementary">
						<?php dynamic_sidebar('social-icons'); ?>
					</div>
					<div id="header-right-nav" class="widget-area" role="complementary">
						<?php dynamic_sidebar('header-right-nav'); ?>
					</div>
				
				</div>
			</div>
		</div><!-- .site-branding -->


		<nav id="site-navigation" class="main-navigation" role="navigation">
			
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			
		</nav><!-- #site-navigation -->
		

		
	 <?php if ( function_exists('yoast_breadcrumb') ) {
	  yoast_breadcrumb('<p id="breadcrumbs">','</p>');
	 } ?>
	
	<div id="ipad-lower-nav">
		<div>
		    <div id="" class="widget-area" role="complementary">
				<?php dynamic_sidebar('search'); ?>
			</div>
		</div>
		<div id="ipad-social-icon">
			<div id="" class="widget-area" role="complementary">
				<?php dynamic_sidebar('social-icons'); ?>
			</div>
		</div>
		<div id="ipad-right-nav-links">
			<?php dynamic_sidebar('ipad-header-right-nav'); ?>
		</div>
	</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
