<?php
/**
 * Yoru Bar — functions and definitions.
 *
 * @package yoru-bar
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/inner.php';

define( 'YORU_BAR_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; the theme works without the plugin.
 */
function yoru_bar_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'yoru_bar_setup' );

/**
 * Front-end styles and the scroll script (in the head, not deferred, so the hidden states exist before first paint).
 */
function yoru_bar_enqueue() {
	wp_enqueue_style( 'yoru-bar-style', get_stylesheet_uri(), array(), YORU_BAR_VERSION );
	wp_enqueue_style( 'yoru-bar-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), YORU_BAR_VERSION );
	wp_enqueue_script( 'yoru-bar-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), YORU_BAR_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'yoru_bar_enqueue' );

/**
 * Pattern category.
 */
function yoru_bar_pattern_categories() {
	register_block_pattern_category(
		'yoru-bar',
		array(
			'label'       => __( 'Yoru Bar', 'yoru-bar' ),
			'description' => __( 'Sections for a reservation-only cocktail bar: the framed full-bleed cover with a centred moon ring, full-height split panels with a struck display word, the circle photo with an offset tan disc, the white wash with a bleeding tile strip, the seat arc and the notes rows.', 'yoru-bar' ),
		)
	);
}
add_action( 'init', 'yoru_bar_pattern_categories' );

/**
 * URL of one of the theme's photographs (assets/images/<id>.webp).
 *
 * @param string $id Photo id, e.g. Y1.
 * @return string
 */
function yoru_bar_img( $id ) {
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
function yoru_bar_image( $id, $class = '', $img = '' ) {
	$class = trim( 'yb-ph yb-ph--' . strtolower( $id ) . ' ' . $class );
	return '<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"' . esc_attr( $class ) . '"} -->' . "\n"
		. '<figure class="wp-block-image size-full ' . esc_attr( $class ) . '"><img src="' . esc_url( yoru_bar_img( $id ) ) . '" alt="' . esc_attr( yoru_bar_t( 'alt_' . $id ) ) . '"' . ( $img ? ' ' . $img : '' ) . '/></figure>' . "\n"
		. '<!-- /wp:image -->';
}

/**
 * The ghost-disc link: a label with a tan disc under its first letters and a long thin arrow, all drawn by CSS.
 *
 * @param string $key   String key of the label.
 * @param string $href  Site-relative link.
 * @param string $class Extra class names (yb-more--ink on white, yb-more--sm in the info bar).
 * @return string Block markup.
 */
function yoru_bar_more( $key, $href, $class = '' ) {
	$class = trim( 'yb-more ' . $class );
	return '<!-- wp:paragraph {"className":"' . esc_attr( $class ) . '"} -->' . "\n"
		. '<p class="' . esc_attr( $class ) . '"><a href="' . esc_url( home_url( $href ) ) . '">' . esc_html( yoru_bar_t( $key ) ) . '</a></p>' . "\n"
		. '<!-- /wp:paragraph -->';
}

/**
 * The moon-ring mark: a double ring around a crescent, drawn as inline SVG (our own mark).
 *
 * @param int    $size  Pixel size.
 * @param string $id    Unique suffix for the mask id.
 * @param string $class Class on the svg.
 * @return string SVG markup.
 */
function yoru_bar_moon( $size, $id, $class = 'yb-moon' ) {
	$m = 'yb-moon-' . $id;
	return '<svg class="' . esc_attr( $class ) . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="' . (int) $size . '" height="' . (int) $size . '" aria-hidden="true" focusable="false">'
		. '<defs><mask id="' . esc_attr( $m ) . '"><rect width="100" height="100" fill="#fff"/><circle cx="60" cy="42" r="21" fill="#000"/></mask></defs>'
		. '<circle cx="50" cy="50" r="48.5" fill="none" stroke="currentColor" stroke-width="2"/>'
		. '<circle cx="50" cy="50" r="40" fill="none" stroke="currentColor" stroke-width="1"/>'
		. '<circle cx="50" cy="50" r="28" fill="currentColor" mask="url(#' . esc_attr( $m ) . ')"/></svg>';
}
