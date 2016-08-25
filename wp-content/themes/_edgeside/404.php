<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _edgeside
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"></h1>
				</header><!-- .page-header -->
			
				<div class="page-content">
				<div id="page-content-container">
					<aside class="box-back-home">
						<div >
							<img id="" class="" src="https://edgeside001-mattrijk.c9users.io/wp-content/themes/_edgeside/img/404-back-home400x300.svg"/>

							<h2 class="back-home-button"><a href="/">BACK HOME</a></h2>	
						</div>
					</aside>
					
					<aside class="box-search">
						<div >
							<img id="" class="" src="https://edgeside001-mattrijk.c9users.io/wp-content/themes/_edgeside/img/404-search-400x300.svg"/>
							<div class="box-search-form">
							<?php get_search_form(); ?>
							</div>
						</div>
					</aside>
				</div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
