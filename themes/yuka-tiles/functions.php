<?php
/**
 * Yuka Tiles: functions and definitions.
 *
 * @package yuka-tiles
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'YUKA_TILES_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function yuka_tiles_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'yuka_tiles_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function yuka_tiles_enqueue() {
	wp_enqueue_style( 'yuka-tiles-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), YUKA_TILES_VERSION );
	wp_enqueue_style( 'yuka-tiles-style', get_stylesheet_uri(), array( 'yuka-tiles-sp-scroll' ), YUKA_TILES_VERSION );
	wp_enqueue_script( 'yuka-tiles-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), YUKA_TILES_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'yuka_tiles_enqueue' );

/**
 * Pattern category.
 */
function yuka_tiles_pattern_categories() {
	register_block_pattern_category(
		'yuka-tiles',
		array(
			'label'       => __( 'Yuka Tiles', 'yuka-tiles' ),
			'description' => __( 'Sections for a tile and stone showroom: the sun-edge photo triptych with stats row, the flush range ledger, the daylight story, the loan card, the parallax showroom band, the spec-sheet table, the price table, project cards, visit hours and the new-arrivals letter.', 'yuka-tiles' ),
		)
	);
}
add_action( 'init', 'yuka_tiles_pattern_categories' );
