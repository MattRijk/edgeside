<p>my post</p>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<!-- Featured Image -->
	<div class="post-image">
		<?php echo the_post_thumbnail('post-header-image'); ?>
	</div>
	<!-- #Featured Image -->
	
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
</article>