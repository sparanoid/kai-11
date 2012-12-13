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

/**
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
 * Override default Jetpack Infinite Scroll footer
 *
 * @since Twenty Eleven Kai 1.5.4
 */
function twentyeleven_kai_infinite_scroll_credit() {
  return '<a href="http://postholic.com/rsrc/twentyeleven-kai/">Twenty Twelve Kai</a>';
}

add_filter( 'infinite_scroll_credit', 'twentyeleven_kai_infinite_scroll_credit' );

/**
 * Initialize the update checker
 *
 * @since Twenty Eleven Kai 1.5.4
 */
require 'includes/theme-update-checker.php';
$twentyeleven_kai_update_checker = new ThemeUpdateChecker(
  'twentyeleven-kai',
  'http://sparanoid.com/lab/wordpress/twentyeleven-kai.json'
);
?>