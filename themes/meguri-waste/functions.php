<?php
/**
 * Meguri Waste: functions and definitions.
 *
 * @package meguri-waste
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'MEGURI_WASTE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function meguri_waste_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'meguri_waste_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before
 * the first paint; without it every sp-* element stays visible.
 */
function meguri_waste_enqueue() {
	wp_enqueue_style( 'meguri-waste-style', get_stylesheet_uri(), array(), MEGURI_WASTE_VERSION );
	wp_enqueue_style( 'meguri-waste-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), MEGURI_WASTE_VERSION );
	wp_enqueue_script( 'meguri-waste-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), MEGURI_WASTE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'meguri_waste_enqueue' );

/**
 * Pattern category.
 */
function meguri_waste_pattern_categories() {
	register_block_pattern_category(
		'meguri-waste',
		array(
			'label'       => __( 'Meguri Waste', 'meguri-waste' ),
			'description' => __( 'Sections for a scheduled commercial waste collection service: the pannable dock panorama with day tags, ruled stream rows, the flat pictogram line of a collection day, wash bands that dissolve into white and weekly cover price rows.', 'meguri-waste' ),
		)
	);
}
add_action( 'init', 'meguri_waste_pattern_categories' );
