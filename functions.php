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

/**
 * Theme Supports
 */

add_theme_support('html5', array('search-form'));
add_theme_support( 'post-thumbnails' ); 

//Register Theme Menu
register_nav_menus( array(
	'top_menu_left' => 'Top Header Left Menu',
	'top_menu_right' => 'Top Header Right Menu',
	'side_menu' => 'Side Main Menu',
	'footer_menu' => 'My Custom Footer Menu',
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
	wp_enqueue_style( 'bootstrap3', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'owl_carousel_css', get_template_directory_uri() . '/assets/owl_carousel/owl.carousel.css' );
	wp_enqueue_style( 'owl_theme', get_template_directory_uri() . '/assets/owl_carousel/owl.theme.css' );
	wp_enqueue_style( 'adzbitecss', get_template_directory_uri() . '/assets/css/extra.css' );
	wp_register_script( 'bootstrap3js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js' );
	wp_register_script( 'owl_carousel_js', get_template_directory_uri() . '/assets/owl_carousel/owl.carousel.js' );
	wp_register_script( 'adzbitejs', get_template_directory_uri() . '/assets/js/main.js' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap3js' );
	wp_enqueue_script( 'owl_carousel_js' );
	wp_enqueue_script( 'adzbitejs' );

}

add_action( 'wp_enqueue_scripts', 'adzbite_init' );

/**
 * Register our sidebars and widgetized areas.
 */
function left_sidebar() {

	register_sidebars(1, array(
		'name' => 'Left Sidebar',
		'id' => 'left_sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );

	register_sidebars(1, array(
		'name' => 'Right Sidebar',
		'id' => 'right_sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );
}
add_action( 'widgets_init', 'left_sidebar' );






