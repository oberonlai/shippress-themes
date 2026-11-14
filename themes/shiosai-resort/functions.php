<?php
/**
 * Shiosai Resort: functions and definitions.
 *
 * @package shiosai-resort
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'SHIOSAI_RESORT_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function shiosai_resort_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'shiosai_resort_setup' );

/**
 * Front-end styles and the small scroll script (head, not deferred, so the hidden states exist before first paint).
 */
function shiosai_resort_enqueue() {
	wp_enqueue_style( 'shiosai-resort-style', get_stylesheet_uri(), array(), SHIOSAI_RESORT_VERSION );
	wp_enqueue_style( 'shiosai-resort-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'shiosai-resort-style' ), SHIOSAI_RESORT_VERSION );
	wp_enqueue_script( 'shiosai-resort-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SHIOSAI_RESORT_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'shiosai_resort_enqueue' );

/**
 * Pattern category.
 */
function shiosai_resort_pattern_categories() {
	register_block_pattern_category(
		'shiosai-resort',
		array(
			'label'       => __( 'Shiosai Resort', 'shiosai-resort' ),
			'description' => __( 'Sections for a family seaside resort: the tide-line hero with the beach-flag bar, centred chapter heads, the sticky room list, the roman-numeral week, wide parallax bands, the price table and the check-dates band.', 'shiosai-resort' ),
		)
	);
}
add_action( 'init', 'shiosai_resort_pattern_categories' );
