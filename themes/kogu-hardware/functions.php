<?php
/**
 * Kogu Hardware — functions and definitions.
 *
 * @package kogu-hardware
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KOGU_HARDWARE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kogu_hardware_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kogu_hardware_setup' );

/**
 * Front-end styles and the scroll-effects script (in the head, not deferred, so the reveal states are set before first paint).
 */
function kogu_hardware_enqueue() {
	wp_enqueue_style( 'kogu-hardware-style', get_stylesheet_uri(), array(), KOGU_HARDWARE_VERSION );
	wp_enqueue_style( 'kogu-hardware-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kogu-hardware-style' ), KOGU_HARDWARE_VERSION );
	wp_enqueue_script( 'kogu-hardware-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KOGU_HARDWARE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kogu_hardware_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kogu_hardware_block_styles() {
	register_block_style( 'core/paragraph', array( 'name' => 'label', 'label' => __( 'Underlined label', 'kogu-hardware' ) ) );
	register_block_style( 'core/paragraph', array( 'name' => 'more', 'label' => __( 'Underlined arrow link', 'kogu-hardware' ) ) );
}
add_action( 'init', 'kogu_hardware_block_styles' );

/**
 * Pattern category.
 */
function kogu_hardware_pattern_categories() {
	register_block_pattern_category(
		'kogu-hardware',
		array(
			'label'       => __( 'Kogu Hardware', 'kogu-hardware' ),
			'description' => __( 'Sections for a neighbourhood hardware store: the full-height photo with an info bar, the hairline ruled three-column gateway, the asymmetric portrait story, the split dark and photo service panels, the ruled price list and the ruled story rows.', 'kogu-hardware' ),
		)
	);
}
add_action( 'init', 'kogu_hardware_pattern_categories' );
