<?php

	/**
	 *
	 * All functions are written here
	 * Read the comments to identify the functions
	 *
	 */

require_once 'inc/shortcodes.php';
require_once 'inc/theme-options.php';
require_once 'inc/post-types.php';
require_once 'inc/breadcrumb.php';
require_once 'inc/ajax.php';

/**
 * Theme Supports
 */

add_theme_support('html5', array('search-form'));
add_theme_support( 'post-thumbnails' ); 

//Register Theme Menu
register_nav_menus( array(
	'top_menu_left' => 'Top Header Left Menu',
	'side_menu' => 'Side Main Menu',
) );

add_filter( 'avatar_defaults', 'custom_avatar' );
 
function custom_avatar ($avatar_defaults) {
$myavatar = get_stylesheet_directory_uri() . '/assets/imgs/meme.jpg';
$avatar_defaults[$myavatar] = "Adzbite Avatar";
return $avatar_defaults;
}


/**
 * Initialize styles and script dependencies
 */
function adzbite_init() {
	wp_enqueue_style( 'fontawesome', '//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'bootstrap3', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'owl_carousel_css', get_template_directory_uri() . '/assets/owl_carousel/owl.carousel.css' );
	wp_enqueue_style( 'owl_theme', get_template_directory_uri() . '/assets/owl_carousel/owl.theme.css' );
	wp_enqueue_style( 'font', 'http://fonts.googleapis.com/css?family=Oswald:400,300' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'adzbitecss', get_template_directory_uri() . '/assets/css/extra.css' );
	wp_register_script( 'bootstrap3js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js' );
	wp_register_script( 'owl_carousel_js', get_template_directory_uri() . '/assets/owl_carousel/owl.carousel.js' );
	wp_register_script( 'ajaxjs', get_template_directory_uri() . '/assets/js/ajax.js' );
	wp_register_script( 'adzbitejs', get_template_directory_uri() . '/assets/js/main.js' );
	wp_localize_script( 'ajaxjs', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap3js' );
	wp_enqueue_script( 'owl_carousel_js' );
	wp_enqueue_script( 'adzbitejs' );
	wp_enqueue_script( 'ajaxjs' );
}

add_action( 'wp_enqueue_scripts', 'adzbite_init' );

/**
 * Register our sidebars and widgetized areas.
 */
function left_sidebar() {

	register_sidebars(1, array(
		'name' => 'Left Sidebar',
		'id' => 'left_sidebar',
		'before_widget' => '<div class="left-sidebar-widget"><div class="first-child">',
		'after_widget' => '</div></div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );

	register_sidebars(1, array(
		'name' => 'Right Sidebar',
		'id' => 'right_sidebar',
		'before_widget' => '<div class="right-sidebar-widget"><div class="first-child">',
		'after_widget' => '</div></div>',
		'before_title' => '<div class="widget-title-wrap"><div class="before-widget-title"></div><h2 class="widget-title">',
		'after_title' => '</h2></div>',
	) );

	register_sidebars(1, array(
		'name' => 'Footer 1',
		'id' => 'footer1',
		'before_widget' => '<div class="footer-widget footer1">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );

	register_sidebars(1, array(
		'name' => 'Footer 2',
		'id' => 'footer2',
		'before_widget' => '<div class="footer-widget footer2">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );

	register_sidebars(1, array(
		'name' => 'Footer 3',
		'id' => 'footer3',
		'before_widget' => '<div class="footer-widget footer3">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );
	register_sidebars(1, array(
		'name' => 'Footer 4',
		'id' => 'footer4',
		'before_widget' => '<div class="footer-widget footer4">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'left_sidebar' );


// EXCERPT STUFF
function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}