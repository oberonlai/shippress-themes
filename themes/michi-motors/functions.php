<?php
/**
 * Michi Motors: functions and definitions.
 *
 * @package michi-motors
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';

define( 'MICHI_MOTORS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function michi_motors_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'michi_motors_setup' );

/**
 * Front-end styles, and one tiny script that turns the transparent header solid after the first scroll.
 */
function michi_motors_enqueue() {
	wp_enqueue_style( 'michi-motors-style', get_stylesheet_uri(), array(), MICHI_MOTORS_VERSION );
	wp_enqueue_script( 'michi-motors-header', get_theme_file_uri( 'assets/js/header.js' ), array(), MICHI_MOTORS_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
}
add_action( 'wp_enqueue_scripts', 'michi_motors_enqueue' );

/**
 * Pattern category.
 */
function michi_motors_pattern_categories() {
	register_block_pattern_category(
		'michi-motors',
		array(
			'label'       => __( 'Michi Motors', 'michi-motors' ),
			'description' => __( 'Sections for a family car dealership: the dimmed front-on cover with a staggered light headline, the family story, the forecourt ledger, approved-used statements, the service band, location rows, the steel floor band, the journal and the test-drive close.', 'michi-motors' ),
		)
	);
}
add_action( 'init', 'michi_motors_pattern_categories' );
