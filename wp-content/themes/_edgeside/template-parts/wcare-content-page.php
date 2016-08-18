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
<?php echo 'Begin'; ?>
<div>
<!---------------------     ----------------------->
<ul id="toggle-view">
    <li >
        <h3 style='background:#4c97d0;color:#fff;'>Section one</h3>
        <span style='background:#4c97d0;color:#fff;' class='glyphicon glyphicon-plus'></span>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim.</p>
    </li>
    <br>
    <li>
        <h3 style='background:#4c97d0;color:#fff;'>section two</h3>
        <span style='background:#4c97d0;color:#fff;' class='glyphicon glyphicon-plus'></span>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim.</p>
    </li>
</ul>

  
<!---------------------     ----------------------->
</div>
<?php echo 'End'; ?>



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
