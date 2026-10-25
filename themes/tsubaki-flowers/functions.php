<?php
/**
 * Tsubaki Flowers — functions and definitions.
 *
 * @package tsubaki-flowers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'TSUBAKI_FLOWERS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function tsubaki_flowers_setup() {
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
add_action( 'after_setup_theme', 'tsubaki_flowers_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head, not deferred, so the hidden states are set
 * before the first paint (without it every block stays visible).
 */
function tsubaki_flowers_enqueue() {
	wp_enqueue_style( 'tsubaki-flowers-style', get_stylesheet_uri(), array(), TSUBAKI_FLOWERS_VERSION );
	wp_enqueue_style( 'tsubaki-flowers-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), TSUBAKI_FLOWERS_VERSION );
	wp_enqueue_script( 'tsubaki-flowers-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), TSUBAKI_FLOWERS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'tsubaki_flowers_enqueue' );

/**
 * Pattern category.
 */
function tsubaki_flowers_pattern_categories() {
	register_block_pattern_category(
		'tsubaki-flowers',
		array(
			'label'       => __( 'Tsubaki Flowers', 'tsubaki-flowers' ),
			'description' => __( 'Sections for a florist shop: the full-bleed photograph with an intro screen, the asymmetric about block, the hairline three-column grid, the market band, the week in the shop, the people and the price list.', 'tsubaki-flowers' ),
		)
	);
}
add_action( 'init', 'tsubaki_flowers_pattern_categories' );
