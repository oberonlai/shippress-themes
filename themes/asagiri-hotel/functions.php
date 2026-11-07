<?php
/**
 * Asagiri Hotel — functions and definitions.
 *
 * @package asagiri-hotel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'ASAGIRI_HOTEL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function asagiri_hotel_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'asagiri_hotel_setup' );

/**
 * Front-end styles and the scroll script (in the head, not deferred, so the hidden states exist before first paint).
 */
function asagiri_hotel_enqueue() {
	wp_enqueue_style( 'asagiri-hotel-style', get_stylesheet_uri(), array(), ASAGIRI_HOTEL_VERSION );
	wp_enqueue_style( 'asagiri-hotel-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'asagiri-hotel-style' ), ASAGIRI_HOTEL_VERSION );
	wp_enqueue_script( 'asagiri-hotel-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), ASAGIRI_HOTEL_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'asagiri_hotel_enqueue' );

/**
 * Pattern category.
 */
function asagiri_hotel_pattern_categories() {
	register_block_pattern_category(
		'asagiri-hotel',
		array(
			'label'       => __( 'Asagiri Hotel', 'asagiri-hotel' ),
			'description' => __( 'Sections for an airport hotel told in clock order: the inset night photograph, rooms opener with a flush-right strip, the wide photograph with a ruled card, shuttle times, the night clock, the panel with a rising photograph, night notes and the ink close.', 'asagiri-hotel' ),
		)
	);
}
add_action( 'init', 'asagiri_hotel_pattern_categories' );
