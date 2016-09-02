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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 id="page-title" class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<!--<div class="widget-area" role="complementary">-->
	<!--	<?#php dynamic_sidebar('web-care'); ?>-->
	<!--</div>-->
	
	<div class="main-image">
		<div class="widget-area" role="complementary">
			<?php dynamic_sidebar('web-care'); ?>
		</div>
		<div class="caption-hero-webcare">
			<h4 class="">We make your digital marketing dollars work double time.</h4>
		</div>
	</div>

	<div id="entry-content" class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_edgeside' ),
				'after'  => '</div>',
			) );
		?>

<div>
<!---------------------     ----------------------->

<section id="webcare-services">
	<div class='webcare-text'>
		<aside>
			<div id="" class="widget-area" role="complementary">
				<?php dynamic_sidebar('web-care-service-one'); ?>
			</div>
		</aside>
	
	</div>
	<div class='webcare-text'>
		<aside>
			<div id="" class="widget-area" role="complementary">
				<?php dynamic_sidebar('web-care-service-two'); ?>
			</div>
		</aside>
	</div>

	<div id="webcare-form" class='webcare-text'>
		<h2>Free Consultation</h2>
		<aside id="web-contact-form">
			<div id="" class="widget-area" role="complementary">
				<?php dynamic_sidebar('web-care-consult-form'); ?>
			</div>
		</aside>
	</div>
</section>	




<section id='main-webplans'>

<aside class="webplans-aside">
<div class="webplans-title">
	<h3 class="webplans-title-center">Plan A</h3>
	<h1 class="webplans-title-center">$100.00</h1>
	<h5 class="webplans-title-center">per month</h5>
</div>
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-1" class="tooltip-input">
		<label for="someID-1" class="tooltip-label"><p>Software updates</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-2" class="tooltip-input">
		<label for="someID-2" class="tooltip-label"><p>Security Monitoring</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-3" class="tooltip-input">
		<label for="someID-3" class="tooltip-label"><p>Spam Protection and Cleanup</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-3" class="tooltip-input">
		<label for="someID-3" class="tooltip-label"><p>Daily Back Up and Restore</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-3" class="tooltip-input">
		<label for="someID-3" class="tooltip-label"><p>DDOS & Hacker Protection</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-4" class="tooltip-input">
		<label for="someID-4" class="tooltip-label"><p>Detailed Monthly Report</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-4" class="tooltip-input">
		<label for="someID-4" class="tooltip-label"><p>30 minutes Support Time</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-4" class="tooltip-input">
		<label for="someID-4" class="tooltip-label"><p>Edge Side Media Client Dashboard</p></label> 
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-4" class="tooltip-input">
		<label for="someID-4" class="tooltip-label"><p>Email Support</p></label> 
	</div><!--/.tooltip-->
	
	<div class="contact-us">
		<a herf="">Contact Us</a>
	</div>
</aside>

<aside class="webplans-aside">		
	<div class="webplans-title">
		<h3 class="webplans-title-center">Plan A</h3>
		<h1 class="webplans-title-center">$175.00</h1>
		<h5 class="webplans-title-center">per month</h5>
	</div>
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-15" class="tooltip-input">
		<label for="someID-15" class="tooltip-label"><p>Software updates</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-2" class="tooltip-input">
		<label for="someID-2" class="tooltip-label"><p>Security Monitoring</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-3" class="tooltip-input">
		<label for="someID-3" class="tooltip-label"><p>Spam Protection and Cleanup</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-3" class="tooltip-input">
		<label for="someID-3" class="tooltip-label"><p>Daily Back Up and Restore</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-3" class="tooltip-input">
		<label for="someID-3" class="tooltip-label"><p>DDOS & Hacker Protection</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-4" class="tooltip-input">
		<label for="someID-4" class="tooltip-label"><p>Detailed Monthly Report</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-4" class="tooltip-input">
		<label for="someID-4" class="tooltip-label"><p>30 minutes Support Time</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-4" class="tooltip-input">
		<label for="someID-4" class="tooltip-label"><p>Edge Side Media Client Dashboard</p></label> 
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-4" class="tooltip-input">
		<label for="someID-4" class="tooltip-label"><p>Email Support</p></label> 
	</div><!--/.tooltip-->
	
	<div class="contact-us">
		<a herf="">Contact Us</a>
	</div>
</aside>	
	


<aside class="webplans-aside">
	<div class="webplans-title">
		<h3 class="webplans-title-center">Plan A</h3>
		<h1 class="webplans-title-center">$275.00</h1>
		<h5 class="webplans-title-center">per month</h5>
	</div>
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-1" class="tooltip-input">
		<label for="someID-1" class="tooltip-label"><p>Software updates</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-2" class="tooltip-input">
		<label for="someID-2" class="tooltip-label"><p>Security Monitoring</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-3" class="tooltip-input">
		<label for="someID-3" class="tooltip-label"><p>Spam Protection and Cleanup</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-3" class="tooltip-input">
		<label for="someID-3" class="tooltip-label"><p>Daily Back Up and Restore</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-3" class="tooltip-input">
		<label for="someID-3" class="tooltip-label"><p>DDOS & Hacker Protection</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-4" class="tooltip-input">
		<label for="someID-4" class="tooltip-label"><p>Detailed Monthly Report</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-4" class="tooltip-input">
		<label for="someID-4" class="tooltip-label"><p>30 minutes Support Time</p><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></label> 
		<div role="tooltip" id="tooltipID" class="tooltip-content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum autem nemo, et odit officia ut illo provident fuga excepturi modi. Lorem ipsum dolor sit amet.
		</div> <!--/.tooltip-content-->
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-4" class="tooltip-input">
		<label for="someID-4" class="tooltip-label"><p>Edge Side Media Client Dashboard</p></label> 
	</div><!--/.tooltip-->
	
	<div class="tooltip">  
		<input type="checkbox" value="selected" id="someID-4" class="tooltip-input">
		<label for="someID-4" class="tooltip-label"><p>Email Support</p></label> 
	</div><!--/.tooltip-->
	
	<div class="contact-us">
		<a herf="">Contact Us</a>
	</div>
</aside>
</section>
<!---------------------     ----------------------->
<section id="web-care-questions">
	<div class="widget-area" role="complementary">
		<?php dynamic_sidebar('web-care-questions'); ?>
	</div>
</section>
<!-------------------- ----------------------------->

<script src="https://use.fontawesome.com/27c4becfd6.js"></script>
</div>
<!-------------------- ------------------->
 






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
