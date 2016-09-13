<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _edgeside
 */

get_header(); ?>



	<div id="primary-front-page" class="content-area">
		<div id="box"> </div>
		<main id="main" class="site-main" role="main">

		<section id="main-container">
			
			<!-- main widget area -->
			<div class="main-image">
				<div class="widget-area" role="complementary">
					<?php dynamic_sidebar('front-page-main'); ?>
				</div>
				<div class="caption-hero">
					<h4>We make your digital marketing dollars work double time.</h4>
				</div>
			</div>
	
			<!-- #main widget area -->
		</section>
		<div id="lower-box"> </div>
		
		<!-- front-page-text-2 widget area -->
			<div id="front-text-two" class="widget-area" role="complementary">
				<?php dynamic_sidebar('front-page-text-2'); ?>
			</div>
		<!-- #front-page-text-2 widget area-->
		
			
		<section id="services-container">
			
			<!-- search opt widget -->
			<aside class="services">
				<div id="page-widget" class="widget-area" role="complementary">
					<?php dynamic_sidebar('front-page-one'); ?>
				</div>
			</aside>
			<!-- #search opt widget -->
			
			
			<!-- websites widget -->
			<aside class="services">
				<div id="page-widget" class="widget-area" role="complementary">
					<?php dynamic_sidebar('front-page-two'); ?>
				</div>
			</aside>
			<!-- #websites widget -->
			
			<!-- site management widget -->
			
			<aside class="services">
				<div id="page-widget" class="widget-area" role="complementary">
					<?php dynamic_sidebar('front-page-three'); ?>
				</div>
				
			</aside>
		<!-- #site management widget -->
		</section>
			
		</main><!-- #main -->
	</div><!-- #primary -->
	
	


<?php get_footer();
