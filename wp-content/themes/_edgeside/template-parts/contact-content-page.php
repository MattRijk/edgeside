<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _edgeside
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 id="page-title" class="entry-title">', '</h1>' ); ?>
		

	</header><!-- .entry-header -->
	

	<div id="entry-content" class="entry-content">
		
	<div id="webcare-form-2" class='webcare-text'>
		<p id="contact-p"><strong>We would love to help you with your project. Please fill out the form below and we will get back to you shortly.</strong></p>
		<aside>
			<div id="" class="widget-area" role="complementary">
				<?php dynamic_sidebar('web-care-consult-form'); ?>
			</div>
		</aside>
	</div>
		
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_edgeside' ),
				'after'  => '</div>',
			) );
		?>
		
	</div><!-- .entry-content -->
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', '_edgeside' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
