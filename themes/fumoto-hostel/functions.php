<?php
/**
 * Fumoto Hostel — functions and definitions.
 *
 * @package fumoto-hostel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'FUMOTO_HOSTEL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function fumoto_hostel_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'fumoto_hostel_setup' );

/**
 * Front-end styles and the scroll-effects script (head, not deferred, so the hidden state exists before first paint).
 */
function fumoto_hostel_enqueue() {
	wp_enqueue_style( 'fumoto-hostel-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), FUMOTO_HOSTEL_VERSION );
	wp_enqueue_style( 'fumoto-hostel-style', get_stylesheet_uri(), array( 'fumoto-hostel-sp-scroll' ), FUMOTO_HOSTEL_VERSION );
	wp_enqueue_script( 'fumoto-hostel-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), FUMOTO_HOSTEL_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'fumoto_hostel_enqueue' );

/**
 * Pattern category.
 */
function fumoto_hostel_register() {
	register_block_pattern_category(
		'fumoto-hostel',
		array(
			'label'       => __( 'Fumoto Hostel', 'fumoto-hostel' ),
			'description' => __( 'Sections for an urban hostel: the pebble-window hero, willow and white sections with a pebble photograph, the night routine, the people who keep the house and the rates.', 'fumoto-hostel' ),
		)
	);
}
add_action( 'init', 'fumoto_hostel_register' );
