<?php
/**
 * Koe Interpreters — functions and definitions.
 *
 * @package koe-interpreters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'KOE_INTERPRETERS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function koe_interpreters_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'koe_interpreters_setup' );

/**
 * Front-end styles and scripts. sp-scroll loads in the head, not deferred, so the hidden states are set before the first paint.
 */
function koe_interpreters_enqueue() {
	wp_enqueue_style( 'koe-interpreters-style', get_stylesheet_uri(), array(), KOE_INTERPRETERS_VERSION );
	wp_enqueue_style( 'koe-interpreters-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KOE_INTERPRETERS_VERSION );
	wp_enqueue_script( 'koe-interpreters-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KOE_INTERPRETERS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'koe_interpreters_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function koe_interpreters_block_styles() {
	register_block_style( 'core/paragraph', array( 'name' => 'lead', 'label' => __( 'Lead paragraph', 'koe-interpreters' ) ) );
	register_block_style( 'core/button', array( 'name' => 'outline-white', 'label' => __( 'Outline on dark', 'koe-interpreters' ) ) );
}
add_action( 'init', 'koe_interpreters_block_styles' );

/**
 * Pattern category.
 */
function koe_interpreters_pattern_categories() {
	register_block_pattern_category(
		'koe-interpreters',
		array(
			'label'       => __( 'Koe Interpreters', 'koe-interpreters' ),
			'description' => __( 'Sections for a conference interpreting agency: the photo hero with slanted photo columns and a phrase marquee, the sheet statement, tilted pair cards, the booth band, the meeting-day hour ruler, the rates table, three steps, notes and the request close.', 'koe-interpreters' ),
		)
	);
}
add_action( 'init', 'koe_interpreters_pattern_categories' );

/**
 * URL of one theme image (assets/images/<file>), escaped for use in a pattern.
 *
 * @param string $file File name below assets/images/.
 * @return string
 */
function koe_interpreters_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}
