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

	<div class="widget-area" role="complementary">
		<?php dynamic_sidebar('web-care'); ?>
	</div>

	<div id="entry-content" class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_edgeside' ),
				'after'  => '</div>',
			) );
		?>
		<div class="widget-area" role="complementary">
		  <p>hello, world</p>
		  <?php dynamic_sidebar('web-care-questions'); ?>
		</div>
<?php echo 'hello php.'; ?>
<p class="tagline">From Cloud9 IDE!</p>

 <div class="toggler">
      <div id="effect" class="ui-widget-content ui-corner-all">
         <h3 class="ui-widget-header ui-corner-all">Toggle</h3>
         <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
         </p>
      </div>
 </div>
 <a href="#" id="button" class="ui-state-default ui-corner-all">Toggle</a>


      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
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
	
	
<script type="text/javascript" src="">

</script>


</article><!-- #post-## -->
