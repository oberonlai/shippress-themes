<?php
/**
 * Nohara Holiday Park: functions and definitions.
 *
 * @package nohara-park
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'NOHARA_PARK_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function nohara_park_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'nohara_park_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before
 * the first paint; without it every sp-* element stays visible.
 */
function nohara_park_enqueue() {
	wp_enqueue_style( 'nohara-park-style', get_stylesheet_uri(), array(), NOHARA_PARK_VERSION );
	wp_enqueue_style( 'nohara-park-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), NOHARA_PARK_VERSION );
	wp_enqueue_script( 'nohara-park-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), NOHARA_PARK_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'nohara_park_enqueue' );

/**
 * Pattern category.
 */
function nohara_park_pattern_categories() {
	register_block_pattern_category(
		'nohara-park',
		array(
			'label'       => __( 'Nohara Holiday Park', 'nohara-park' ),
			'description' => __( 'Sections for a holiday park: the split hero with a drifting photograph, the three-column stay ledger, the sticky narrative, caption-panel cards, ruled booking rows and the parallax grounds band.', 'nohara-park' ),
		)
	);
}
add_action( 'init', 'nohara_park_pattern_categories' );
