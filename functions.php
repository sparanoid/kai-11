<?php
/**
 * Kai 11 functions and definitions
 *
 * @package WordPress
 * @subpackage Twenty_Eleven_Kai
 * @since Kai 11 1.0
 */

function add_kai_11_credits() {
  echo '<a href="http://postholic.com/rsrc/kai-11/">Kai 11</a><span class="sep"> | </span>';
}

add_action('twentyeleven_credits', 'add_kai_11_credits');

/**
 * Override Twenty Eleven stylesheet loading behavier and load Kai 11 stylesheet
 *
 * @since Kai 11 1.5.1
 */
function twentyeleven_scripts_styles_override() {
   wp_enqueue_style( 'twentyeleven-style', get_template_directory_uri() . '/style.css' );
   wp_enqueue_style( 'kai-11-style', get_stylesheet_directory_uri() . '/core.css' );
 }
add_action( 'wp_enqueue_scripts', 'twentyeleven_scripts_styles_override' );

/**
 * Override default Jetpack Infinite Scroll footer
 *
 * @since Kai 11 1.5.4
 */
function kai_11_infinite_scroll_credit() {
  return '<a href="http://postholic.com/rsrc/kai-11/">Twenty Twelve Kai</a>';
}

add_filter( 'infinite_scroll_credit', 'kai_11_infinite_scroll_credit' );

/**
 * Initialize the update checker
 *
 * @since Kai 11 1.5.4
 */
require 'includes/theme-update-checker.php';
$kai_11_update_checker = new ThemeUpdateChecker(
  'kai-11',
  'http://sparanoid.com/lab/wordpress/kai-11.json'
);
?>