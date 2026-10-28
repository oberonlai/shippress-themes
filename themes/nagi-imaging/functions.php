<?php
/**
 * Nagi Imaging — functions and definitions.
 *
 * @package nagi-imaging
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'NAGI_IMAGING_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function nagi_imaging_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'nagi_imaging_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head, not deferred, so the html.sp-js class is
 * set before the first paint.
 */
function nagi_imaging_enqueue() {
	wp_enqueue_style( 'nagi-imaging-style', get_stylesheet_uri(), array(), NAGI_IMAGING_VERSION );
	wp_enqueue_style( 'nagi-imaging-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'nagi-imaging-style' ), NAGI_IMAGING_VERSION );
	wp_enqueue_script( 'nagi-imaging-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), NAGI_IMAGING_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'nagi_imaging_enqueue' );

/**
 * Pattern category.
 */
function nagi_imaging_pattern_categories() {
	register_block_pattern_category(
		'nagi-imaging',
		array(
			'label'       => __( 'Nagi Imaging', 'nagi-imaging' ),
			'description' => __( 'Sections for a diagnostic imaging centre: the scattered photo field, the pinned statement on slate mist, the studies list, the reporting method, fees, referrer notes and the visit block.', 'nagi-imaging' ),
		)
	);
}
add_action( 'init', 'nagi_imaging_pattern_categories' );
