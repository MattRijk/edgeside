<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _edgeside
 */

get_header(); ?>

	<!-- this page is connected to single post. -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-custom', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		<h2 class="simple-author-title">About The Author</h2>
		<div id="simple-author-box">
			<?php if ( function_exists( 'wpsabox_author_box' ) ) echo wpsabox_author_box(); ?>
		</div><hr>
		
		<h2 class="blog-widget-title">Related Articles</h2>
		<div id="simple-related-post">
			<div class="widget-area" role="complementary">
				<?php dynamic_sidebar('related-post-widget'); ?>
			</div>
		</div>

		</main><!-- #main -->


	
	</div><!-- #primary -->
	

<?php 
get_sidebar(); 
get_footer(); 
?>
