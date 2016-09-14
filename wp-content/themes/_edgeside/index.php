<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _edgeside
 */

get_header(); ?>

	<div id="primary-index" class="content-area">
		<main id="main-index" class="site-main" role="main">
			
		<!--Blog Post List Page. Displays all pages. -->
		
		
		<h1>Read Our latest Posts ... </h1>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
	
			<?php
			endif; ?>

		<?php	
			/* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php 
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-custom-post', get_post_format() ); ?>
				

					<?php endwhile; ?>
					
			

			<?#php wp_pagenavi(); ?>
			<?php _edgeside_paging_nav(); ?>
			<?#php kriesi_pagination(); ?>

			
		
		<?php else : ?>


		<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		
		

		</main><!-- #main -->
		<div id="sidebar-index">
			<?php get_sidebar(); ?>
		</div>
		
	</div><!-- #primary -->
	
	


<?php get_footer(); ?>
