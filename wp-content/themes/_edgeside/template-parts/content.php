<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _edgeside
 */

?>

<!-- This page displays a single post  -->
<!--<article id="post-<?//php the_ID(); ?>" <?//php post_class(); ?>>-->
<article <?php post_class(); ?>>
	
<div id="blog-post">
	
<!-- Featured Image -->
<div class="post-image">
	<?php echo the_post_thumbnail('post-header-image'); ?>
</div>
<!-- #Featured Image -->


<div class="post-div"><!-- header title and content -->
	<header class="entry-header">

		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php _edgeside_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>

	</header><!-- .entry-header -->
	
	
	<div class="entry-content">
		
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', '_edgeside' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_edgeside' ),
				'after'  => '</div>',
			) );
		?>
		
		
	</div><!-- .entry-content -->
</div><!-- #header title and content -->
</div>

	<footer class="entry-footer">
		<?php _edgeside_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->


<hr> <!-- post separation line -->