<?php
/**
 * Pitchfork child theme functions and definitions
 *
 * @package ke-pitchfork
 */

 // Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


// Enqueue child theme scripts and styles.
function ke_pitchfork_enqueue_frontend() {

    $cssFilePath = glob( get_stylesheet_directory() . '/css/build/childTheme.min.*.css' );
    $cssFileURI = get_stylesheet_directory_uri() . '/css/build/' . basename($cssFilePath[0]);
    wp_enqueue_style( 'ke-pitchfork-styles', $cssFileURI );

    $jsFilePath = glob( get_stylesheet_directory() . '/js/build/childTheme.min.*.js' );
    $jsFileURI = get_stylesheet_directory_uri() . '/js/build/' . basename($jsFilePath[0]);
    wp_enqueue_script( 'ke-pitchfork-scripts', $jsFileURI , null , null , true );

}
add_action( 'wp_enqueue_scripts', 'ke_pitchfork_enqueue_frontend' );


// Enqueue the Block Editor styles only.
function ke_pitchfork_enqueue_editor_styles() {

    $cssFilePath = glob( get_stylesheet_directory() . '/css/build/blockEditor.min.*.css' );
    $cssFileURI = get_stylesheet_directory_uri() . '/css/build/' . basename($cssFilePath[0]);
    wp_enqueue_style( 'ke-pitchfork-blockeditor-styles', $cssFileURI );

}
add_action('enqueue_block_editor_assets', 'ke_pitchfork_enqueue_editor_styles');
