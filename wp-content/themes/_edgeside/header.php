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
				</a>
			</div>	

			<div id="header-right-area">
				
				<div id="phone-number">
					<h2>1 800 545 3433</h2>
				</div>
				<div id="header-right-nav-area">
					
					<div id="social-icons-header" class="widget-area" role="complementary">
						<?php dynamic_sidebar('social-icons'); ?>
					</div>
					<div id="header-right-nav-links">
						<a class="header-nav-a" href="">About</a>
						<a class="header-nav-a" href"">Blog</a>
						<a class="header-nav-a" href"">Contact</a>
					</div>
				
				</div>
			</div>
		</div><!-- .site-branding -->


		<nav id="site-navigation" class="main-navigation" role="navigation">
			
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			
		</nav><!-- #site-navigation -->
		
		<!-- search box -->
	<div id="search-box" class="widget-area" role="complementary" style="overflow: hidden;">
		<?php dynamic_sidebar('search-box'); ?>
	</div>
		<!-- #search box -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
