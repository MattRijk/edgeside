<?php
/**
 * _edgeside functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _edgeside
 */

if ( ! function_exists( '_edgeside_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _edgeside_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _edgeside, use a find and replace
	 * to change '_edgeside' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( '_edgeside', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	 
	add_image_size('post-header-image', 960, 300, true);
	add_theme_support( 'post-thumbnails' );
	
	

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', '_edgeside' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( '_edgeside_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', '_edgeside_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _edgeside_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_edgeside_content_width', 640 );
}
add_action( 'after_setup_theme', '_edgeside_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
 


	
	/* _______ Header _______*/
	// Front Page Search Box Widget Area
	
	register_sidebar( array(
		'name'          => 'Header-Right-Nav',
		'id'            => 'header-right-nav',
		'before_widget' => '<section id="header-nav" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 id="" class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Search',
		'id'            => 'search-box',
		'before_widget' => '<section id="search-box" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 id="search-box-title" class="widget-title">',
		'after_title'   => '</h2>',
	) );

	
	
	/* _______ Front Page _______*/
	
	// Front Page Text 1 Widget Area
	register_sidebar( array(
		'name'          => 'Front Page Text 1',
		'id'            => 'front-page-text-1',
		'before_widget' => '<section id="front-text-1" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 id="" class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Front Page Text 2 Widget Area
	register_sidebar( array(
		'name'          => 'Front Page Text 2',
		'id'            => 'front-page-text-2',
		'before_widget' => '<section id="front-text-2" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 id="" class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	// Front Page Main Image Widget Area
	register_sidebar( array(
		'name'          => 'Front Page Main',
		'id'            => 'front-page-main',
		'before_widget' => '<section id="page-main-img-widget" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 id="page-main-widget-title" class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	// Front Page Aside One Widget Area
	register_sidebar( array(
		'name'          => 'Front Page Aside One',
		'id'            => 'front-page-one',
		'before_widget' => '<section id="page-widget" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 id="" class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Front Page Aside Two Widget Area
	register_sidebar( array(
		'name'          => 'Front Page Aside Two',
		'id'            => 'front-page-two',
		'before_widget' => '<section id="page-widget" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 id="" class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Front Page Aside Three Widget Area
	register_sidebar( array(
		'name'          => 'Front Page Aside Three',
		'id'            => 'front-page-three',
		'before_widget' => '<section id="page-widget" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 id="" class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	/* _______ Sidebar _______*/
function _edgeside_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', '_edgeside' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', '_edgeside' ),
		'before_widget' => '<section id="blog-sidebar-widget" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="blog-widget-title">',
		'after_title'   => '</h2>',
	) );
	
	
		/* _______ Pages _______*/
	// Search Engine Optimization Page Widget Area
	register_sidebar( array(
		'name'          => 'Search Engine Optimization',
		'id'            => 'page-1',
		'before_widget' => '<section id="page-widget" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 id="page-widget-title" class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Web Development Page Widget Area
	register_sidebar( array(
		'name'          => 'Web Development',
		'id'            => 'page-2',
		'before_widget' => '<section id="page-widget" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 id="page-widget-title" class="widget-title">',
		'after_title'   => '</h2>',
	) );
	//Web Care Page Widget Area
	register_sidebar( array(
		'name'          => 'Web Care',
		'id'            => 'web-care',
		'before_widget' => '<section id="web-care-widget" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 id="page-widget-title" class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Social Media Page Widget Area
	register_sidebar( array(
		'name'          => 'Social Media',
		'id'            => 'page-3',
		'before_widget' => '<section id="social-media-widget" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 id="page-widget-title" class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	/* _______ Web Care Widgets _______*/
		//Web Care Page Widget Area
		
	register_sidebar( array(
		'name'          => 'Web Care Questions',
		'id'            => 'web-care-questions',
		'before_widget' => '<section id="web-care-widget" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 id="page-widget-title" class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	/* _______ Post Widget _______*/
	//  Author Widget Area
	register_sidebar( array(
		'name'          => 'Author Widget',
		'id'            => 'author-widget',
		'before_widget' => '<section id="author-widget" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 id="author-widget" class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	//  Related Post Widget Area
	register_sidebar( array(
		'name'          => 'Related Post Widget',
		'id'            => 'related-post-widget',
		'before_widget' => '<section id="related-post-widget" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 id="author-widget" class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	
	/* _______ Footer _______*/
	
	
	// Social Icons Widget Area
	register_sidebar( array(
		'name'          => 'Social Icons',
		'id'            => 'social-icons',
		'before_widget' => '<section id="" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-main-title-footer">',
		'after_title'   => '</h2>',
	) );
	// Footer One Widget Area
	register_sidebar( array(
		'name'          => 'Footer One',
		'id'            => 'footer-one',
		'before_widget' => '<section id="footer-one-section" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-main-title-footer">',
		'after_title'   => '</h2>',
	) );
	// Footer Two Widget Area
	register_sidebar( array(
		'name'          => 'Footer Two',
		'id'            => 'footer-two',
		'before_widget' => '<section id="widget widget_nav_menu" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-main-title-footer">',
		'after_title'   => '</h2>',
	) );
	// Footer Three Widget Area
	register_sidebar( array(
		'name'          => 'Footer Three',
		'id'            => 'footer-three',
		'before_widget' => '<section id="widget widget_nav_menu" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 id="" class="widget-main-title-footer">',
		'after_title'   => '</h2>',
	) );
	
	// Footer Four Widget Area
	register_sidebar( array(
		'name'          => 'Footer Four',
		'id'            => 'footer-four',
		'before_widget' => '<section id="widget widget_nav_menu" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 id="" class="widget-main-title-footer">',
		'after_title'   => '</h2>',
	) );
	// Footer Five Widget Area
	register_sidebar( array(
		'name'          => 'Footer Five',
		'id'            => 'footer-five',
		'before_widget' => '<section id="widget widget_nav_menu" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 id="" class="widget-main-title-footer">',
		'after_title'   => '</h2>',
	) );
	// Footer Six Widget Area
	register_sidebar( array(
		'name'          => 'Footer Six',
		'id'            => 'footer-six',
		'before_widget' => '<section id="widget widget_nav_menu" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 id="" class="widget-main-title-footer">',
		'after_title'   => '</h2>',
	) );
	
}

add_action( 'widgets_init', '_edgeside_widgets_init' );




/**
 * Enqueue scripts and styles.
 */
function _edgeside_scripts() {


	
	wp_enqueue_style( '_edgeside-style', get_stylesheet_uri() );

	wp_enqueue_script( '_edgeside-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( '_edgeside-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	wp_enqueue_script( '_edgeside-questions', get_template_directory_uri() . '/js/questions.js', array('jquery','jquery-ui-slider','jquery-effects-blind', 'jquery-ui-core'), '20151215', true );
	

	
	
	

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_edgeside_scripts' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Search Box for Navigation Bar.
 */


function add_search_to_wp_menu ( $items, $args ) {
	if( 'primary' === $args -> theme_location ) {
$items .= '<li class="menu-item menu-item-search">';
$items .= '<form method="get" id="header-search" class="menu-search-form" action="' . get_bloginfo('home') . '/"><p><input class="text_input" type="text" value="" name="s" id="s" onfocus="if (this.value == \'Enter Text &amp; Click to Search\') {this.value = \'\';}" onblur="if (this.value == \'\') {this.value = \'Enter Text &amp; Click to Search\';}" /><input type="submit" class="my-wp-search" id="searchsubmit" value="search" /></p></form>';
$items .= '</li>';
	}
return $items;
}
add_filter('wp_nav_menu_items','add_search_to_wp_menu',10,2);


// Changing excerpt length
function new_excerpt_length($length) {
return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changing excerpt more
// function new_excerpt_more($more) {
// return ' read more ...';
// }
// add_filter('excerpt_more', 'new_excerpt_more');

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '">... Continue reading &#8594;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');




