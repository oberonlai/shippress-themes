<?php
/**
 * Noka Cheese — functions and definitions.
 *
 * @package noka-cheese
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'NOKA_CHEESE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function noka_cheese_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'noka_cheese_setup' );

/**
 * Front-end assets: theme stylesheet, scroll effects (CSS + JS in the head, not deferred).
 */
function noka_cheese_enqueue() {
	wp_enqueue_style( 'noka-cheese-style', get_stylesheet_uri(), array(), NOKA_CHEESE_VERSION );
	wp_enqueue_style( 'noka-cheese-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'noka-cheese-style' ), NOKA_CHEESE_VERSION );
	wp_enqueue_script( 'noka-cheese-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), NOKA_CHEESE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'noka_cheese_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function noka_cheese_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'text-link', 'label' => __( 'Text link', 'noka-cheese' ) ) );
}
add_action( 'init', 'noka_cheese_block_styles' );

/**
 * Pattern category.
 */
function noka_cheese_pattern_categories() {
	register_block_pattern_category(
		'noka-cheese',
		array(
			'label'       => __( 'Noka Cheese', 'noka-cheese' ),
			'description' => __( 'Sections for an independent cheese counter: the blur-to-focus hero with a double-rim pebble photograph, the sticky-pebble statement, the style catalogue, the counter band, how a wedge is chosen, the price list, the counter letter and the arch closing band.', 'noka-cheese' ),
		)
	);
}
add_action( 'init', 'noka_cheese_pattern_categories' );
