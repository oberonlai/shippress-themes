<?php
/**
 * Taruki Distillery: functions and definitions.
 *
 * @package taruki-distillery
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'TARUKI_DISTILLERY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function taruki_distillery_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'taruki_distillery_setup' );

/**
 * Front-end styles and the scroll script (head, not deferred, so the hidden states exist before first paint).
 */
function taruki_distillery_enqueue() {
	wp_enqueue_style( 'taruki-distillery-style', get_stylesheet_uri(), array(), TARUKI_DISTILLERY_VERSION );
	wp_enqueue_style( 'taruki-distillery-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'taruki-distillery-style' ), TARUKI_DISTILLERY_VERSION );
	wp_enqueue_script( 'taruki-distillery-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), TARUKI_DISTILLERY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'taruki_distillery_enqueue' );

/**
 * Pattern category.
 */
function taruki_distillery_pattern_categories() {
	register_block_pattern_category(
		'taruki-distillery',
		array(
			'label'       => __( 'Taruki Distillery', 'taruki-distillery' ),
			'description' => __( 'Sections for a craft distillery: stacked strips, a split hero with a batch timeline, a sticky process, an inset still-room photograph, a frosted bottle block, a price ledger and a booking band.', 'taruki-distillery' ),
		)
	);
}
add_action( 'init', 'taruki_distillery_pattern_categories' );
