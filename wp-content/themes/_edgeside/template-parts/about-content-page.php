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
	
	
	<div class="about-container">
		

	
		
		<div id="about-entry-content" class="entry-content">
			<div class"about-box-container">
				<h1>Matthew Rijk - Lead Developer</h1>
		<div class="about-photo">
			<img src="/wp-content/themes/_edgeside/img/matthew_rijk.jpg"></img>
		</div>
				<div class="about-box">
					<h1>Development Stack</h1>
					<div class="about-list-container">
						<ul>
							<li>Python</li>
							<li>PHP</li>
						</ul>
						<ul>
							<li>Wordpress</li>
							<li>Django</li>
						</ul>
						<ul>
							<li>Javascript</li>
							<li>CSS</li>
						</ul>
						<ul>
							<li>MySQL</li>
						</ul>
					</div>	
					
				</div>
			</div> <!-- END about-box-container -->
			<div class="about-content">
				<?php
					the_content();
		
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_edgeside' ),
						'after'  => '</div>',
					) );
				?>
			</div>
		</div><!-- .entry-content -->
	
	</div>
	
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
