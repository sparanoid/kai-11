<?php
/**
 * Twenty Eleven Kai functions and definitions
 *
 * @package WordPress
 * @subpackage Twenty_Eleven_Kai
 * @since Twenty Eleven Kai 1.0
 */

function add_twentyeleven_credits() {
  echo '<a href="http://postholic.com/rsrc/twentyeleven-kai/">Twenty Eleven Kai</a><span class="sep"> | </span>';
}

add_action('twentyeleven_credits', 'add_twentyeleven_credits');

/**s
 * Override Twenty Eleven stylesheet loading behavier and load Twenty Eleven Kai stylesheet
 *
 * @since Twenty Eleven Kai 1.5.1
 */
function twentyeleven_scripts_styles_override() {
   wp_enqueue_style( 'twentyeleven-style', get_template_directory_uri() . '/style.css' );
   wp_enqueue_style( 'twentyeleven-kai-style', get_stylesheet_directory_uri() . '/core.css' );
 }
add_action( 'wp_enqueue_scripts', 'twentyeleven_scripts_styles_override' );

/**
 * Add theme support for infinity scroll
 *
 * @since Twenty Twelve Kai 1.5.2
 */
function twenty_eleven_kai_infinite_scroll_init() {
  add_theme_support( 'infinite-scroll', array(
    'container'      => 'content',
		'footer_widgets' => array( 'sidebar-3', 'sidebar-4', 'sidebar-5' )
	) );
}
add_action( 'after_setup_theme', 'twenty_eleven_kai_infinite_scroll_init' );
?>