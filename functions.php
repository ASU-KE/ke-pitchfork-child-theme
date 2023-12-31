<?php
/**
 * Pitchfork child theme functions
 *
 * @package ke-pitchfork
 */

 // Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require get_stylesheet_directory() . '/inc/enqueue-assets.php';
require get_stylesheet_directory() . '/inc/acf-register.php';

/**
 * Add Theme Support for Project Thumbnails
 * */
add_theme_support( 'post-thumbnails' );
