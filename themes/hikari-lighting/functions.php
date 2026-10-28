<?php
/**
 * Hikari Lighting — functions and definitions.
 *
 * @package hikari-lighting
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'HIKARI_LIGHTING_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hikari_lighting_setup() {
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
add_action( 'after_setup_theme', 'hikari_lighting_setup' );

/**
 * Front-end styles and the scroll-effects script (sp-scroll: reveal, parallax, marquee; loaded in <head>, not deferred).
 */
function hikari_lighting_enqueue() {
	wp_enqueue_style( 'hikari-lighting-style', get_stylesheet_uri(), array(), HIKARI_LIGHTING_VERSION );
	wp_enqueue_style( 'hikari-lighting-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'hikari-lighting-style' ), HIKARI_LIGHTING_VERSION );
	wp_enqueue_script( 'hikari-lighting-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HIKARI_LIGHTING_VERSION, false );
	if ( class_exists( 'WooCommerce' ) && file_exists( get_theme_file_path( 'assets/css/woocommerce.css' ) ) ) {
		wp_enqueue_style( 'hikari-lighting-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'hikari-lighting-style' ), HIKARI_LIGHTING_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'hikari_lighting_enqueue' );

/**
 * Pattern category.
 */
function hikari_lighting_pattern_categories() {
	register_block_pattern_category(
		'hikari-lighting',
		array(
			'label'       => __( 'Hikari Lighting', 'hikari-lighting' ),
			'description' => __( 'Sections for a lighting showroom: the lights-on cover, the thin-caps marquee, the dark room box with one lit window, product rows and project rows.', 'hikari-lighting' ),
		)
	);
}
add_action( 'init', 'hikari_lighting_pattern_categories' );

/**
 * Stencil wordmark (HIKARI) as inline SVG, drawn from straight bars and strokes with 8px stencil gaps.
 *
 * @param string $class Extra class.
 * @return string
 */
function hikari_lighting_wordmark( $class = '' ) {
	return '<svg class="hl-wordmark ' . esc_attr( $class ) . '" viewBox="0 0 1000 165" role="img" aria-label="Hikari Lighting" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor" stroke="none">'
		. '<rect x="0" y="0" width="38" height="165"/><rect x="132" y="0" width="38" height="165"/><rect x="46" y="64" width="78" height="38"/>'
		. '<rect x="212" y="0" width="44" height="78"/><rect x="212" y="86" width="44" height="79"/>'
		. '<rect x="298" y="0" width="38" height="165"/>'
		. '<polygon points="344,100 344,62 414,0 468,0 468,8 392,100"/><polygon points="392,118 468,165 414,165 344,126"/>'
		. '<polygon points="510,165 554,165 596,56 604,0 586,0 556,0"/><polygon points="700,165 656,165 614,56 606,0 624,0 654,0"/><rect x="568" y="108" width="64" height="28"/>'
		. '<rect x="742" y="0" width="38" height="165"/><path d="M788 0 H852 A40 40 0 0 1 852 104 H788 V66 H850 A2 2 0 0 0 850 38 H788 Z"/><polygon points="840,112 884,112 912,165 868,165"/>'
		. '<rect x="954" y="0" width="44" height="78"/><rect x="954" y="86" width="44" height="79"/>'
		. '</g></svg>';
}
