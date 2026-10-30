<?php
/**
 * Kensa Laboratory — functions and definitions.
 *
 * @package kensa-laboratory
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/blocks.php';

define( 'KENSA_LABORATORY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; nothing in the theme needs it.
 */
function kensa_laboratory_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kensa_laboratory_setup' );

/**
 * Front-end styles and the scroll-effects script (head, not deferred, so html.sp-js is set before the first paint).
 */
function kensa_laboratory_enqueue() {
	wp_enqueue_style( 'kensa-laboratory-style', get_stylesheet_uri(), array(), KENSA_LABORATORY_VERSION );
	wp_enqueue_style( 'kensa-laboratory-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kensa-laboratory-style' ), KENSA_LABORATORY_VERSION );
	wp_enqueue_script( 'kensa-laboratory-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KENSA_LABORATORY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kensa_laboratory_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kensa_laboratory_block_styles() {
	register_block_style( 'core/paragraph', array( 'name' => 'lead', 'label' => __( 'Lead paragraph', 'kensa-laboratory' ) ) );
}
add_action( 'init', 'kensa_laboratory_block_styles' );

/**
 * Pattern category.
 */
function kensa_laboratory_pattern_categories() {
	register_block_pattern_category(
		'kensa-laboratory',
		array(
			'label'       => __( 'Kensa Laboratory', 'kensa-laboratory' ),
			'description' => __( 'Sections for a materials testing laboratory: the peeking-neighbour photo strip, the four by two test tiles, ruled test rows, the parallax receiving bay, numbered prose steps, the dated sample log on a steel band, the fee table, case rows, FAQ and the booking band.', 'kensa-laboratory' ),
		)
	);
}
add_action( 'init', 'kensa_laboratory_pattern_categories' );
