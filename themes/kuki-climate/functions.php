<?php
/**
 * Kuki Climate — functions and definitions.
 *
 * @package kuki-climate
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'KUKI_CLIMATE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared for compatibility; without the plugin it does nothing.
 */
function kuki_climate_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kuki_climate_setup' );

/**
 * Front-end styles and the small scroll-effects script (sp-scroll). The script runs in the head and is not deferred, so
 * the hidden states exist before the first paint and nothing flashes; without it every element is simply visible.
 */
function kuki_climate_enqueue() {
	wp_enqueue_style( 'kuki-climate-style', get_stylesheet_uri(), array(), KUKI_CLIMATE_VERSION );
	wp_enqueue_style( 'kuki-climate-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kuki-climate-style' ), KUKI_CLIMATE_VERSION );
	wp_enqueue_script( 'kuki-climate-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KUKI_CLIMATE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kuki_climate_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kuki_climate_block_styles() {
	register_block_style(
		'core/button',
		array(
			'name'  => 'text-link',
			'label' => __( 'Text link with an arrow', 'kuki-climate' ),
		)
	);
}
add_action( 'init', 'kuki_climate_block_styles' );

/**
 * Pattern category.
 */
function kuki_climate_pattern_categories() {
	register_block_pattern_category(
		'kuki-climate',
		array(
			'label'       => __( 'Kuki Climate', 'kuki-climate' ),
			'description' => __( 'Sections for a commercial HVAC maintenance contractor: the framed window with a year line, the ride-over card, ledger rows with flat panels, the quarterly and monthly pill toggle, the timed survey list, the log strip, the price table, questions and the request band.', 'kuki-climate' ),
		)
	);
}
add_action( 'init', 'kuki_climate_pattern_categories' );
