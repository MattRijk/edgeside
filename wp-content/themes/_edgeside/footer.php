<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _edgeside
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		
		<!-- social icon section -->
		<div class="widget-area" role="complementary">
			<?php dynamic_sidebar('social-icons'); ?>
		</div>
		<!-- #social icon section  -->
		
		
		<!-- footer one section -->
		<div class="widget-area" role="complementary">
			<?php dynamic_sidebar('footer-one'); ?>
		</div>
		<!-- #footer one section -->
		
		<!-- footer two section -->
		<div class="widget-area" role="complementary">
			<?php dynamic_sidebar('footer-two'); ?>
		</div>
		
		<!-- #footer two section -->
		
		<!-- footer three section -->
		<div class="widget-area" role="complementary">
			<?php dynamic_sidebar('footer-three'); ?>
		</div>
		<!-- #footer three section -->
		
		<!-- footer four section -->
		<!-- #footer four section -->
		
		<!-- footer five section -->
		<!-- #footer five section -->
	
		
		<div class="site-info">
			Copyright &copy; Edge Side Media 2016
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
	
</body>
</html>
