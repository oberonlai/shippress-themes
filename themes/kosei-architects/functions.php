<?php
/**
 * Kosei Architects — functions and definitions.
 *
 * @package kosei-architects
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KOSEI_ARCHITECTS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared; without the plugin it does nothing.
 */
function kosei_architects_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kosei_architects_setup' );

/**
 * Front-end styles and the small scroll script (in the head, not deferred, so html.sp-js is set before first paint).
 */
function kosei_architects_enqueue() {
	wp_enqueue_style( 'kosei-architects-style', get_stylesheet_uri(), array(), KOSEI_ARCHITECTS_VERSION );
	wp_enqueue_style( 'kosei-architects-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kosei-architects-style' ), KOSEI_ARCHITECTS_VERSION );
	wp_enqueue_script( 'kosei-architects-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KOSEI_ARCHITECTS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kosei_architects_enqueue' );

/**
 * Pattern category.
 */
function kosei_architects_pattern_categories() {
	register_block_pattern_category(
		'kosei-architects',
		array(
			'label'       => __( 'Kosei Architects', 'kosei-architects' ),
			'description' => __( 'Sections for an architecture studio: the framed panel grid with a numbered index list, the case wall read as question, work and result, the ruled services table, a darkened parallax interlude, the process as an index list, notch and arch photographs, the fee list and the journal.', 'kosei-architects' ),
		)
	);
}
add_action( 'init', 'kosei_architects_pattern_categories' );
