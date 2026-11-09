<?php
/**
 * Okami College: functions and definitions.
 *
 * @package okami-college
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'OKAMI_COLLEGE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared but not required.
 */
function okami_college_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'okami_college_setup' );

/**
 * Front-end styles and the small scroll script (head, not deferred, so the hidden state never flashes).
 */
function okami_college_enqueue() {
	wp_enqueue_style( 'okami-college-style', get_stylesheet_uri(), array(), OKAMI_COLLEGE_VERSION );
	wp_enqueue_style( 'okami-college-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'okami-college-style' ), OKAMI_COLLEGE_VERSION );
	wp_enqueue_script( 'okami-college-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), OKAMI_COLLEGE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'okami_college_enqueue' );

/**
 * Pattern category.
 */
function okami_college_pattern_categories() {
	register_block_pattern_category(
		'okami-college',
		array(
			'label'       => __( 'Okami College', 'okami-college' ),
			'description' => __( 'Sections for a hotel management college: the inset hero window with a tagline box and caption strip, pick-up tiles, results and a graduate case wall, ruled term rows, tracked-title cards, the teaching-hotel band, the partial-width panels, the price table and the offer band.', 'okami-college' ),
		)
	);
}
add_action( 'init', 'okami_college_pattern_categories' );
