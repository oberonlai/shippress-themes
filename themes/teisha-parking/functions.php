<?php
/**
 * Teisha Parking: functions and definitions.
 *
 * @package teisha-parking
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'TEISHA_PARKING_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function teisha_parking_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'teisha_parking_setup' );

/**
 * Front-end styles and scripts. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before first paint.
 */
function teisha_parking_enqueue() {
	wp_enqueue_style( 'teisha-parking-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), TEISHA_PARKING_VERSION );
	wp_enqueue_style( 'teisha-parking-style', get_stylesheet_uri(), array( 'teisha-parking-sp-scroll' ), TEISHA_PARKING_VERSION );
	wp_enqueue_script( 'teisha-parking-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), TEISHA_PARKING_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'teisha_parking_enqueue' );

/**
 * Pattern category.
 */
function teisha_parking_pattern_categories() {
	register_block_pattern_category(
		'teisha-parking',
		array(
			'label'       => __( 'Teisha Parking', 'teisha-parking' ),
			'description' => __( 'Sections for a monthly car-park operator: the three-column dusk window, the hairline ticker with the numeral ledger, the sites masonry, the walked-bay band, four ruled steps, the contract coverage, the fee table, drivers\' notes and the single request band.', 'teisha-parking' ),
		)
	);
}
add_action( 'init', 'teisha_parking_pattern_categories' );
