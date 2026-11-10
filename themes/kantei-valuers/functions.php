<?php
/**
 * Kantei Valuers — functions and definitions.
 *
 * @package kantei-valuers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KANTEI_VALUERS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kantei_valuers_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kantei_valuers_setup' );

/**
 * Front-end styles and the scroll-effects script (head, not deferred, so html.sp-js is set before first paint).
 */
function kantei_valuers_enqueue() {
	wp_enqueue_style( 'kantei-valuers-style', get_stylesheet_uri(), array(), KANTEI_VALUERS_VERSION );
	wp_enqueue_style( 'kantei-valuers-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kantei-valuers-style' ), KANTEI_VALUERS_VERSION );
	wp_enqueue_script( 'kantei-valuers-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KANTEI_VALUERS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kantei_valuers_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kantei_valuers_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'outline-pill', 'label' => __( 'Outline pill with a long arrow', 'kantei-valuers' ) ) );
	
}
add_action( 'init', 'kantei_valuers_block_styles' );

/**
 * Pattern category.
 */
function kantei_valuers_pattern_categories() {
	register_block_pattern_category(
		'kantei-valuers',
		array(
			'label'       => __( 'Kantei Valuers', 'kantei-valuers' ),
			'description' => __( 'Sections for a commercial property valuer: the full-bleed photograph with a white logo tile, floating nav slab and ring badge, the statement, the people band, two touching instruction panels, recent instructions, the stacking site-hour cards, report rows, the fee table and the photo-strip request band.', 'kantei-valuers' ),
		)
	);
}
add_action( 'init', 'kantei_valuers_pattern_categories' );
