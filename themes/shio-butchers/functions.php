<?php
/**
 * Shio Butchers — functions and definitions.
 *
 * @package shio-butchers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'SHIO_BUTCHERS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function shio_butchers_setup() {
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
add_action( 'after_setup_theme', 'shio_butchers_setup' );

/**
 * Front-end assets: theme stylesheet, scroll effects (CSS + JS in the head, not deferred) and the small strip script.
 */
function shio_butchers_enqueue() {
	wp_enqueue_style( 'shio-butchers-style', get_stylesheet_uri(), array(), SHIO_BUTCHERS_VERSION );
	wp_enqueue_style( 'shio-butchers-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'shio-butchers-style' ), SHIO_BUTCHERS_VERSION );
	wp_enqueue_script( 'shio-butchers-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SHIO_BUTCHERS_VERSION, false );
	wp_enqueue_script( 'shio-butchers-strip', get_theme_file_uri( 'assets/strip.js' ), array(), SHIO_BUTCHERS_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'shio_butchers_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function shio_butchers_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'double', 'label' => __( 'Double line', 'shio-butchers' ) ) );
	register_block_style( 'core/button', array( 'name' => 'text-link', 'label' => __( 'Text link with an arrow', 'shio-butchers' ) ) );
}
add_action( 'init', 'shio_butchers_block_styles' );

/**
 * Pattern category.
 */
function shio_butchers_pattern_categories() {
	register_block_pattern_category(
		'shio-butchers',
		array(
			'label'       => __( 'Shio Butchers', 'shio-butchers' ),
			'description' => __( 'Sections for an independent butcher shop: the ruled cuts rail beside a scrolling photo strip, brass-tab cards, the day schedule, the wrapping steps and the farms.', 'shio-butchers' ),
		)
	);
}
add_action( 'init', 'shio_butchers_pattern_categories' );
