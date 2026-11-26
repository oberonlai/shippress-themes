<?php
/**
 * Kaoru Cocoa — functions and definitions.
 *
 * @package kaoru-cocoa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'KAORU_COCOA_VERSION', wp_get_theme()->get( 'Version' ) );

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kaoru_cocoa_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kaoru_cocoa_setup' );

/**
 * Front-end styles and scripts. The scroll-effects script loads in the head, not deferred: it adds html.sp-js before the
 * first paint, so the hidden "before" state of a reveal never flashes.
 */
function kaoru_cocoa_enqueue() {
	wp_enqueue_style( 'kaoru-cocoa-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KAORU_COCOA_VERSION );
	wp_enqueue_style( 'kaoru-cocoa-style', get_stylesheet_uri(), array( 'kaoru-cocoa-sp-scroll' ), KAORU_COCOA_VERSION );
	wp_enqueue_script( 'kaoru-cocoa-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KAORU_COCOA_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kaoru_cocoa_enqueue' );

/**
 * Pattern category.
 */
function kaoru_cocoa_pattern_categories() {
	register_block_pattern_category(
		'kaoru-cocoa',
		array(
			'label'       => __( 'Kaoru Cocoa', 'kaoru-cocoa' ),
			'description' => __( 'Sections for a chocolatier and cocoa cafe: the framed window hero, the hour-keyed photo plate, the making-days panel, the outline card wall, the slab band, the cake order accordion, stories, visit and the monthly letter.', 'kaoru-cocoa' ),
		)
	);
}
add_action( 'init', 'kaoru_cocoa_pattern_categories' );

/**
 * Block style for the price table (full-width, nowrap prices; stacks below 782px).
 */
function kaoru_cocoa_block_styles() {
	register_block_style(
		'core/table',
		array(
			'name'  => 'kc-prices',
			'label' => __( 'Prices', 'kaoru-cocoa' ),
		)
	);
}
add_action( 'init', 'kaoru_cocoa_block_styles' );
