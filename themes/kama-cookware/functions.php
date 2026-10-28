<?php
/**
 * Kama Cookware — functions and definitions.
 *
 * @package kama-cookware
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KAMA_COOKWARE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (the scroll effects stay in their final state inside the editor).
 * WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kama_cookware_setup() {
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
add_action( 'after_setup_theme', 'kama_cookware_setup' );

/**
 * Front end: styles, and the scroll-effects script in the head (not deferred, so html.sp-js is set before first paint).
 */
function kama_cookware_enqueue() {
	wp_enqueue_style( 'kama-cookware-style', get_stylesheet_uri(), array(), KAMA_COOKWARE_VERSION );
	wp_enqueue_style( 'kama-cookware-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KAMA_COOKWARE_VERSION );
	wp_enqueue_script( 'kama-cookware-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KAMA_COOKWARE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kama_cookware_enqueue' );

/**
 * Pattern category.
 */
function kama_cookware_pattern_categories() {
	register_block_pattern_category(
		'kama-cookware',
		array(
			'label'       => __( 'Kama Cookware', 'kama-cookware' ),
			'description' => __( 'Sections for a cookware shop with a repair workshop: the staircase hero, the question statement, the sticky which-pan scenes, offset product cards, the dark service band, price table, parallax band, people rows and the visit block.', 'kama-cookware' ),
		)
	);
}
add_action( 'init', 'kama_cookware_pattern_categories' );

/**
 * Product gallery: show the photo without the link to the bare image file (no lightbox, so no dead-end image "page").
 *
 * @param string $html Gallery image markup.
 * @return string
 */
function kama_cookware_gallery_no_link( $html ) {
	return preg_replace( '#<a\s[^>]*>(.*?)</a>#s', '$1', $html );
}
add_filter( 'woocommerce_single_product_image_thumbnail_html', 'kama_cookware_gallery_no_link' );
