<?php
/**
 * Tsuya Jewellers — functions and definitions.
 *
 * @package tsuya-jewellers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'TSUYA_JEWELLERS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function tsuya_jewellers_setup() {
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
add_action( 'after_setup_theme', 'tsuya_jewellers_setup' );

/**
 * Front-end styles and the small scroll script. sp-scroll.js loads in the head (not deferred) so the hidden state
 * is set before the first paint; without JavaScript every block stays visible.
 */
function tsuya_jewellers_enqueue() {
	wp_enqueue_style( 'tsuya-jewellers-style', get_stylesheet_uri(), array(), TSUYA_JEWELLERS_VERSION );
	wp_enqueue_style( 'tsuya-jewellers-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'tsuya-jewellers-style' ), TSUYA_JEWELLERS_VERSION );
	wp_enqueue_script( 'tsuya-jewellers-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), TSUYA_JEWELLERS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'tsuya_jewellers_enqueue' );

/**
 * Mini cart count for the header: "Cart (N)" (0 without WooCommerce).
 *
 * @return int
 */
function tsuya_jewellers_cart_count() {
	if ( function_exists( 'WC' ) && WC()->cart ) {
		return (int) WC()->cart->get_cart_contents_count();
	}
	return 0;
}

/**
 * Shop-area URL: the WooCommerce path when active, otherwise a page that exists.
 *
 * @param string $path     WooCommerce path, e.g. '/cart/'.
 * @param string $fallback Fallback path without WooCommerce.
 * @return string
 */
function tsuya_jewellers_shop_url( $path, $fallback = '/shop/' ) {
	return home_url( class_exists( 'WooCommerce' ) ? $path : $fallback );
}

/**
 * Pattern category.
 */
function tsuya_jewellers_pattern_categories() {
	register_block_pattern_category(
		'tsuya-jewellers',
		array(
			'label'       => __( 'Tsuya Jewellers', 'tsuya-jewellers' ),
			'description' => __( 'Sections for an independent jeweller: the framed photograph with a caption strip, the offset photo pair, flat product tiles, the offset commission strip, run-in process paragraphs and the prices band.', 'tsuya-jewellers' ),
		)
	);
}
add_action( 'init', 'tsuya_jewellers_pattern_categories' );
