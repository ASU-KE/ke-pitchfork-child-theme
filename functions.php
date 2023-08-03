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
require get_stylesheet_directory() . '/inc/custom-post-types.php';
require get_stylesheet_directory() . '/inc/acf-register.php';

/**
 * Add Theme Support for Project Thumbnails
 * */
add_theme_support( 'post-thumbnails', array( 'project' ) );

/**
 * Add block category for KE Sitelets
 * */
if ( function_exists( 'register_block_pattern_category' ) ) {
	register_block_pattern_category(
		'ke-sitelet',
		array(
			'label' => __( 'KE Sitelet', 'ke-pitchfork' ),
			'description' => __( 'Pages for KE Sitelets', 'ke-pitchfork' ),
		)
	);
}
