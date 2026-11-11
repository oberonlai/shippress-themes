<?php
/**
 * Tana Furniture — functions and definitions.
 *
 * @package tana-furniture
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'TANA_FURNITURE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function tana_furniture_setup() {
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
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'after_setup_theme', 'tana_furniture_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before
 * the first paint; without it every sp-* element stays visible.
 */
function tana_furniture_enqueue() {
	wp_enqueue_style( 'tana-furniture-style', get_stylesheet_uri(), array(), TANA_FURNITURE_VERSION );
	wp_enqueue_style( 'tana-furniture-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), TANA_FURNITURE_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'tana-furniture-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'tana-furniture-style' ), TANA_FURNITURE_VERSION );
	}
	wp_enqueue_script( 'tana-furniture-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), TANA_FURNITURE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'tana_furniture_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function tana_furniture_block_styles() {
	register_block_style(
		'core/group',
		array(
			'name'  => 'white-card',
			'label' => __( 'White card', 'tana-furniture' ),
		)
	);
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'bracket-label',
			'label' => __( 'Bracket label', 'tana-furniture' ),
		)
	);
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'stamp',
			'label' => __( 'Pentagon stamp', 'tana-furniture' ),
		)
	);
}
add_action( 'init', 'tana_furniture_block_styles' );

/**
 * Pattern category.
 */
function tana_furniture_pattern_categories() {
	register_block_pattern_category(
		'tana-furniture',
		array(
			'label'       => __( 'Tana Furniture', 'tana-furniture' ),
			'description' => __( 'Sections for an independent furniture shop: the three-pane photo stage, the grey card band with the icon tile index, the parallax showroom, offset story rows and ruled room cells.', 'tana-furniture' ),
		)
	);
}
add_action( 'init', 'tana_furniture_pattern_categories' );
