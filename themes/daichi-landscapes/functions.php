<?php
/**
 * Daichi Landscapes — functions and definitions.
 *
 * @package daichi-landscapes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'DAICHI_LANDSCAPES_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared; without the plugin it does nothing.
 */
function daichi_landscapes_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'daichi_landscapes_setup' );

/**
 * Front-end styles and the small scroll script (in the head, not deferred, so html.sp-js is set before first paint).
 */
function daichi_landscapes_enqueue() {
	wp_enqueue_style( 'daichi-landscapes-style', get_stylesheet_uri(), array(), DAICHI_LANDSCAPES_VERSION );
	wp_enqueue_style( 'daichi-landscapes-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'daichi-landscapes-style' ), DAICHI_LANDSCAPES_VERSION );
	wp_enqueue_script( 'daichi-landscapes-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), DAICHI_LANDSCAPES_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'daichi_landscapes_enqueue' );

/**
 * Pattern category.
 */
function daichi_landscapes_pattern_categories() {
	register_block_pattern_category(
		'daichi-landscapes',
		array(
			'label'       => __( 'Daichi Landscapes', 'daichi-landscapes' ),
			'description' => __( 'Sections for a commercial landscaping company: a photograph with stair-step white title tiles, a sticky-photo service list, a six-stage timeline on a pale band with one swell edge, ring meters and a crew strip.', 'daichi-landscapes' ),
		)
	);
}
add_action( 'init', 'daichi_landscapes_pattern_categories' );
