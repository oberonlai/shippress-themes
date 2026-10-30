<?php
/**
 * Hazuki Instruments — functions and definitions.
 *
 * @package hazuki-instruments
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'HAZUKI_INSTRUMENTS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hazuki_instruments_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hazuki_instruments_setup' );

/**
 * Front-end styles and the scroll-effects script. sp-scroll.js loads in the head, not deferred, so the
 * html.sp-js class exists before the first paint.
 */
function hazuki_instruments_enqueue() {
	wp_enqueue_style( 'hazuki-instruments-style', get_stylesheet_uri(), array(), HAZUKI_INSTRUMENTS_VERSION );
	wp_enqueue_style( 'hazuki-instruments-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), HAZUKI_INSTRUMENTS_VERSION );
	wp_enqueue_script( 'hazuki-instruments-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HAZUKI_INSTRUMENTS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'hazuki_instruments_enqueue' );

/**
 * Pattern category.
 */
function hazuki_instruments_pattern_categories() {
	register_block_pattern_category(
		'hazuki-instruments',
		array(
			'label'       => __( 'Hazuki Instruments', 'hazuki-instruments' ),
			'description' => __( 'Sections for a musical-instrument shop: the four-panel seam strip, dated floor-note rows, the 3-then-4 floor tiles, the trial booth band, care prices and staff rows.', 'hazuki-instruments' ),
		)
	);
}
add_action( 'init', 'hazuki_instruments_pattern_categories' );
