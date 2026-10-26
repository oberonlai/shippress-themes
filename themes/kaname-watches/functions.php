<?php
/**
 * Kaname Watches — functions and definitions.
 *
 * @package kaname-watches
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'KANAME_WATCHES_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kaname_watches_setup() {
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
add_action( 'after_setup_theme', 'kaname_watches_setup' );

/**
 * Front-end styles and the scroll-effects script. sp-scroll.js loads in the head, not deferred, so the hidden state
 * is only ever applied once the script has marked <html> (no-JS visitors see everything).
 */
function kaname_watches_enqueue() {
	wp_enqueue_style( 'kaname-watches-style', get_stylesheet_uri(), array(), KANAME_WATCHES_VERSION );
	wp_enqueue_style( 'kaname-watches-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kaname-watches-style' ), KANAME_WATCHES_VERSION );
	wp_enqueue_script( 'kaname-watches-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KANAME_WATCHES_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kaname_watches_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kaname_watches_block_styles() {
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'lead',
			'label' => __( 'Lead paragraph', 'kaname-watches' ),
		)
	);
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'text-link',
			'label' => __( 'Text link with a circle arrow', 'kaname-watches' ),
		)
	);
}
add_action( 'init', 'kaname_watches_block_styles' );

/**
 * Pattern category.
 */
function kaname_watches_pattern_categories() {
	register_block_pattern_category(
		'kaname-watches',
		array(
			'label'       => __( 'Kaname Watches', 'kaname-watches' ),
			'description' => __( 'Sections for a small mechanical-watch shop: the two-pane crossfading window with its taupe caption bar, four square tiles, the parallax counter band, the product strip, long-form chapters, the bench price list and the visit split.', 'kaname-watches' ),
		)
	);
}
add_action( 'init', 'kaname_watches_pattern_categories' );

/**
 * URL of a theme photo (assets/images/<file>).
 *
 * @param string $file File name.
 * @return string
 */
function kaname_watches_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}
