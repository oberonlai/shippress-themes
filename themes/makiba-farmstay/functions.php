<?php
/**
 * Makiba Farmstay: functions and definitions.
 *
 * @package makiba-farmstay
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'MAKIBA_FARMSTAY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function makiba_farmstay_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'makiba_farmstay_setup' );

/**
 * Front-end styles and the small scroll script (head, not deferred, so the hidden states exist before first paint).
 */
function makiba_farmstay_enqueue() {
	wp_enqueue_style( 'makiba-farmstay-style', get_stylesheet_uri(), array(), MAKIBA_FARMSTAY_VERSION );
	wp_enqueue_style( 'makiba-farmstay-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'makiba-farmstay-style' ), MAKIBA_FARMSTAY_VERSION );
	wp_enqueue_script( 'makiba-farmstay-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), MAKIBA_FARMSTAY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'makiba_farmstay_enqueue' );

/**
 * Pattern category.
 */
function makiba_farmstay_pattern_categories() {
	register_block_pattern_category(
		'makiba-farmstay',
		array(
			'label'       => __( 'Makiba Farmstay', 'makiba-farmstay' ),
			'description' => __( 'Sections for a working farm stay: the dawn photo hero over a fixed hill-ridge day line, a horizontal row of farm-day cards, the leaf canopy statement, rooms with ruled rates, a parallax pasture band, the chores list and the single way to book.', 'makiba-farmstay' ),
		)
	);
}
add_action( 'init', 'makiba_farmstay_pattern_categories' );
