<?php
/**
 * Ueki Gardens — functions and definitions.
 *
 * @package ueki-gardens
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'UEKI_GARDENS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function ueki_gardens_setup() {
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
add_action( 'after_setup_theme', 'ueki_gardens_setup' );

/**
 * Front-end styles and the scroll-effects script (head, not deferred, so the hidden states exist before first paint).
 */
function ueki_gardens_enqueue() {
	wp_enqueue_style( 'ueki-gardens-style', get_stylesheet_uri(), array(), UEKI_GARDENS_VERSION );
	wp_enqueue_style( 'ueki-gardens-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), UEKI_GARDENS_VERSION );
	wp_enqueue_script( 'ueki-gardens-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), UEKI_GARDENS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'ueki_gardens_enqueue' );

/**
 * URL of a theme photo (assets/images/<name>.webp).
 *
 * @param string $name File name without extension.
 * @return string
 */
function ueki_gardens_img( $name ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $name . '.webp' ) );
}

/**
 * Pattern category.
 */
function ueki_gardens_pattern_categories() {
	register_block_pattern_category(
		'ueki-gardens',
		array(
			'label'       => __( 'Ueki Gardens', 'ueki-gardens' ),
			'description' => __( 'Sections for a garden centre: the ragged-top photo row, index rows, the spec mosaic, the parallax yard band and the services ledger.', 'ueki-gardens' ),
		)
	);
}
add_action( 'init', 'ueki_gardens_pattern_categories' );
