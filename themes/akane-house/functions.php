<?php
/**
 * Akane House: functions and definitions.
 *
 * @package akane-house
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'AKANE_HOUSE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function akane_house_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'akane_house_setup' );

/**
 * Front-end styles and the small scroll script (head, not deferred, so the hidden states exist before first paint).
 */
function akane_house_enqueue() {
	wp_enqueue_style( 'akane-house-style', get_stylesheet_uri(), array(), AKANE_HOUSE_VERSION );
	wp_enqueue_style( 'akane-house-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'akane-house-style' ), AKANE_HOUSE_VERSION );
	wp_enqueue_script( 'akane-house-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), AKANE_HOUSE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'akane_house_enqueue' );

/**
 * Pattern category.
 */
function akane_house_pattern_categories() {
	register_block_pattern_category(
		'akane-house',
		array(
			'label'       => __( 'Akane House', 'akane-house' ),
			'description' => __( 'Sections for a neighbourhood pub: the dark hero with the day in four sittings, slash-numbered chapters, ragged photo tiles, the letterbox band, the price table and the reservation band.', 'akane-house' ),
		)
	);
}
add_action( 'init', 'akane_house_pattern_categories' );
