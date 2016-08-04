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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section>
			<!-- front-page-text-1 widget area -->
				<div id="" class="widget-area" role="complementary">
					<?php dynamic_sidebar('front-page-text-1'); ?>
				</div>
			<!-- #front-page-text-1 widget area-->
			
			<!-- main widget area -->
				<div class="widget-area" role="complementary">
					<?php dynamic_sidebar('front-page-main'); ?>
				</div>
			<!-- #main widget area -->
				
			<!-- front-page-text-2 widget area -->
				<div id="" class="widget-area" role="complementary">
					<?php dynamic_sidebar('front-page-text-2'); ?>
				</div>
			<!-- #front-page-text-2 widget area-->
				
			</section>
			
			

			
			
			<section>
				
				<!-- front-page-text-2 widget area -->
			<!-- #front-page-text-2 widget area-->
				
			<!-- search opt widget -->
			<aside>
				<div id="page-widget" class="widget-area" role="complementary">
					<?php dynamic_sidebar('front-page-one'); ?>
				</div>
			</aside>
			<!-- #search opt widget -->
			
			
			<!-- websites widget -->
			<aside>
				<div id="page-widget" class="widget-area" role="complementary">
					<?php dynamic_sidebar('front-page-two'); ?>
				</div>
			</aside>
			<!-- #websites widget -->
			
			<!-- site management widget -->
			
			<aside>
				<div id="page-widget" class="widget-area" role="complementary">
					<?php dynamic_sidebar('front-page-three'); ?>
				</div>
				
			</aside>
			<!-- #site management widget -->
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
