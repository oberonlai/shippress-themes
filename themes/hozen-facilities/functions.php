<?php
/**
 * Hozen Facilities — functions and definitions.
 *
 * @package hozen-facilities
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'HOZEN_FACILITIES_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hozen_facilities_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hozen_facilities_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head, not deferred, so html.sp-js is set before
 * the first paint (the hidden reveal states only exist under html.sp-js).
 */
function hozen_facilities_enqueue() {
	wp_enqueue_style( 'hozen-facilities-style', get_stylesheet_uri(), array(), HOZEN_FACILITIES_VERSION );
	wp_enqueue_style( 'hozen-facilities-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'hozen-facilities-style' ), HOZEN_FACILITIES_VERSION );
	wp_enqueue_script( 'hozen-facilities-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HOZEN_FACILITIES_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'hozen_facilities_enqueue' );

/**
 * Pattern category.
 */
function hozen_facilities_pattern_categories() {
	register_block_pattern_category(
		'hozen-facilities',
		array(
			'label'       => __( 'Hozen Facilities', 'hozen-facilities' ),
			'description' => __( 'Sections for a facilities management company: the floating header card, the plant-room hero with a look-up band, the brand statement with blurred ghost photographs, the staggered site pair with ghost numerals, the hub rows, a parallax roof band, how a call-out is taken, the price table, field notes and the contact cluster.', 'hozen-facilities' ),
		)
	);
}
add_action( 'init', 'hozen_facilities_pattern_categories' );

/**
 * URL of a theme photograph (patterns use it so the markup stays valid wherever the theme sits).
 *
 * @param string $file File name inside assets/images/.
 * @return string
 */
function hozen_facilities_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}
