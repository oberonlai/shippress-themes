<?php
/**
 * Seisui Environmental: functions and definitions.
 *
 * @package seisui-environmental
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'SEISUI_ENVIRONMENTAL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared; without the plugin it does nothing.
 */
function seisui_environmental_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'seisui_environmental_setup' );

/**
 * Front-end styles and the small scroll-effects script (loaded in the head so the hidden states exist before first paint).
 */
function seisui_environmental_enqueue() {
	wp_enqueue_style( 'seisui-environmental-style', get_stylesheet_uri(), array(), SEISUI_ENVIRONMENTAL_VERSION );
	wp_enqueue_style( 'seisui-environmental-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), SEISUI_ENVIRONMENTAL_VERSION );
	wp_enqueue_script( 'seisui-environmental-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SEISUI_ENVIRONMENTAL_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'seisui_environmental_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function seisui_environmental_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'text-link', 'label' => __( 'Text link with an arrow', 'seisui-environmental' ) ) );
}
add_action( 'init', 'seisui_environmental_block_styles' );

/**
 * Pattern category.
 */
function seisui_environmental_pattern_categories() {
	register_block_pattern_category(
		'seisui-environmental',
		array(
			'label'       => __( 'Seisui Environmental', 'seisui-environmental' ),
			'description' => __( 'Sections for an environmental consultancy: a photograph cropped by the right edge, ghost-word headings, a parallax photo band behind white cards, a monitoring ledger, a pinned process photograph and a ruled price list.', 'seisui-environmental' ),
		)
	);
}
add_action( 'init', 'seisui_environmental_pattern_categories' );
