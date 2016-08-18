<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _edgeside
 */

?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--<script src="https://code.jquery.com/jquery-1.10.2.js"></script>-->
<!--<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>-->

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

  <p>Envelope icon as a link:
    <a href="#"><span class="glyphicon glyphicon-envelope"></span></a>
  </p>
  
  
  <div class="">
    <h4>Manage Email Notifications</h4>
    <div class="">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading clickable">
                <div id="format-test">
                    <h3 class="panel-title">
                    Question 1: How do I get in touch with someone for web site support?
                    </h3>
                    <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
                </div>
                </div>
                <div class="panel-body">
                This is a longer line with more text to show how that space will collapse in mobile..
                </div>
            </div>
        </div>
    </div>
</div>
 <div class="">
    <div class="">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading clickable">
                <div id="format-test">
                    <h3 class="panel-title">
                    Question 1: How do I get in touch with someone for web site support?
                    </h3>
                    <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
                </div>
                </div>
                <div class="panel-body">
                This is a longer line with more text to show how that space will collapse in mobile..
                </div>
            </div>
        </div>
    </div>
</div>
 <div class="">
    <div class="">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading clickable">
                <div id="format-test">
                    <h3 class="panel-title">
                    Question 1: How do I get in touch with someone for web site support?
                    </h3>
                    <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
                </div>
                </div>
                <div class="panel-body">
                This is a longer line with more text to show how that space will collapse in mobile..
                </div>
            </div>
        </div>
    </div>
</div>
  
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
