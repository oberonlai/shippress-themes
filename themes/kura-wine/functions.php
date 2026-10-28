<?php
/**
 * Kura Wine — functions and definitions.
 *
 * @package kura-wine
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/woo-import.php';
require_once get_template_directory() . '/inc/inner.php';

define( 'KURA_WINE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kura_wine_setup() {
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
add_action( 'after_setup_theme', 'kura_wine_setup' );

/**
 * Front-end styles and the scroll script (in the head, not deferred, so the hidden states exist before first paint).
 * The shop styles load only while WooCommerce is active.
 */
function kura_wine_enqueue() {
	wp_enqueue_style( 'kura-wine-style', get_stylesheet_uri(), array(), KURA_WINE_VERSION );
	wp_enqueue_style( 'kura-wine-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KURA_WINE_VERSION );
	wp_enqueue_script( 'kura-wine-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KURA_WINE_VERSION, false );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'kura-wine-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'kura-wine-style' ), KURA_WINE_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'kura_wine_enqueue' );

/**
 * The shop styles in the Site Editor too.
 */
function kura_wine_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'kura_wine_editor_shop_styles' );

/**
 * Pattern category.
 */
function kura_wine_pattern_categories() {
	register_block_pattern_category(
		'kura-wine',
		array(
			'label'       => __( 'Kura Wine', 'kura-wine' ),
			'description' => __( 'Sections for an independent wine merchant: the full-bleed film cover, the scattered About, shipments with vertical region titles, bottles, the half-bleed case split, the Friday table and the umber visit band.', 'kura-wine' ),
		)
	);
}
add_action( 'init', 'kura_wine_pattern_categories' );

/**
 * Block style variation: a quiet text link with an arrow.
 */
function kura_wine_block_styles() {
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'kw-more',
			'label' => __( 'Text link with an arrow', 'kura-wine' ),
		)
	);
}
add_action( 'init', 'kura_wine_block_styles' );

/**
 * URL of one of the theme's photographs (assets/images/<id>.webp).
 *
 * @param string $id Photo id, e.g. K1 or P3.
 * @return string
 */
function kura_wine_img( $id ) {
	return get_theme_file_uri( 'assets/images/' . strtolower( $id ) . '.webp' );
}

/**
 * An image block for one photograph, with its alt text from the theme strings.
 *
 * @param string $id    Photo id.
 * @param string $class Extra class names (also written to the block attributes).
 * @param string $img   Extra attributes for the img tag (e.g. fetchpriority).
 * @return string Block markup.
 */
function kura_wine_image( $id, $class = '', $img = '' ) {
	$class = trim( 'kw-ph kw-ph--' . strtolower( $id ) . ' ' . $class );
	return '<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"' . esc_attr( $class ) . '"} -->' . "\n"
		. '<figure class="wp-block-image size-full ' . esc_attr( $class ) . '"><img src="' . esc_url( kura_wine_img( $id ) ) . '" alt="' . esc_attr( kura_wine_t( 'alt_' . $id ) ) . '"' . ( $img ? ' ' . $img : '' ) . '/></figure>' . "\n"
		. '<!-- /wp:image -->';
}

/**
 * A text link paragraph: label plus an arrow drawn by CSS.
 *
 * @param string $key  String key of the label.
 * @param string $href Site-relative link.
 * @param string $more Extra class names.
 * @return string Block markup.
 */
function kura_wine_more( $key, $href, $more = '' ) {
	$class = trim( 'kw-more ' . $more );
	return '<!-- wp:paragraph {"className":"' . esc_attr( $class ) . '"} -->' . "\n"
		. '<p class="' . esc_attr( $class ) . '"><a href="' . esc_url( home_url( $href ) ) . '">' . esc_html( kura_wine_t( $key ) ) . '</a></p>' . "\n"
		. '<!-- /wp:paragraph -->';
}
