<?php
/**
 * Homura Safety: functions and definitions.
 *
 * @package homura-safety
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'HOMURA_SAFETY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function homura_safety_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'homura_safety_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before
 * the first paint; without it every sp-* element stays visible.
 */
function homura_safety_enqueue() {
	wp_enqueue_style( 'homura-safety-style', get_stylesheet_uri(), array(), HOMURA_SAFETY_VERSION );
	wp_enqueue_style( 'homura-safety-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), HOMURA_SAFETY_VERSION );
	wp_enqueue_script( 'homura-safety-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HOMURA_SAFETY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'homura_safety_enqueue' );

/**
 * Pattern category.
 */
function homura_safety_pattern_categories() {
	register_block_pattern_category(
		'homura-safety',
		array(
			'label'       => __( 'Homura Safety', 'homura-safety' ),
			'description' => __( 'Sections for a fire-safety consultancy: the slanted bar word over a low-key photo, the docked link strip, notch pairs, scrim tiles, a findings excerpt, the fee table and the booking band.', 'homura-safety' ),
		)
	);
}
add_action( 'init', 'homura_safety_pattern_categories' );
