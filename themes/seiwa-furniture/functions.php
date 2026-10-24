<?php
/**
 * Seiwa Furniture — functions and definitions.
 *
 * @package seiwa-furniture
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/blocks.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'SEIWA_FURNITURE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function seiwa_furniture_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'seiwa_furniture_setup' );

/**
 * Front-end styles and the scroll-effects script. sp-scroll.js loads in the head, not deferred, so the hidden state
 * is set before the first paint.
 */
function seiwa_furniture_enqueue() {
	wp_enqueue_style( 'seiwa-furniture-style', get_stylesheet_uri(), array(), SEIWA_FURNITURE_VERSION );
	wp_enqueue_style( 'seiwa-furniture-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'seiwa-furniture-style' ), SEIWA_FURNITURE_VERSION );
	wp_enqueue_script( 'seiwa-furniture-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SEIWA_FURNITURE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'seiwa_furniture_enqueue' );

/**
 * Pattern category.
 */
function seiwa_furniture_pattern_categories() {
	register_block_pattern_category(
		'seiwa-furniture',
		array(
			'label'       => __( 'Seiwa Furniture', 'seiwa-furniture' ),
			'description' => __( 'Sections for an office furniture manufacturer: a white first screen with a staggered photo pair over flat panels, scattered masked photographs round a centred text block, outlined cards that run off the right edge, a delivery ledger beside a sticky photograph, and a price list.', 'seiwa-furniture' ),
		)
	);
}
add_action( 'init', 'seiwa_furniture_pattern_categories' );
