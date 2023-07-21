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


// Enqueue child scripts and styles.
function pitchfork_child_scripts() {

    $cssFilePath = glob( get_template_directory() . '/css/build/child-theme.min.*.css' );
    $cssFileURI = get_template_directory_uri() . '/css/build/' . basename($cssFilePath[0]);
    wp_enqueue_style( 'ke-pitchfork-styles', $cssFileURI );

    $jsFilePath = glob( get_template_directory() . '/js/build/child-theme.min.*.js' );
    $jsFileURI = get_template_directory_uri() . '/js/build/' . basename($jsFilePath[0]);
    wp_enqueue_script( 'ke-pitchfork-scripts', $jsFileURI , null , null , true );

}
add_action( 'wp_enqueue_scripts', 'pitchfork_child_scripts' );


// Enqueue to the admin. Block editor styles only.
function pitchfork_child_enqueue_editor_scripts() {

    $cssFilePath = glob( get_template_directory() . '/css/build/block-editor.min.*.css' );
    $cssFileURI = get_template_directory_uri() . '/css/build/' . basename($cssFilePath[0]);
    wp_enqueue_style( 'ke-pitchfork-blockeditor-styles', $cssFileURI );

}
add_action('enqueue_block_editor_assets', 'pitchfork_child_enqueue_editor_scripts');
