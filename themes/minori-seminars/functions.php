<?php
/**
 * Minori Seminars: functions and definitions.
 *
 * @package minori-seminars
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/blocks.php';

define( 'MINORI_SEMINARS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; nothing in the theme needs it.
 */
function minori_seminars_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'minori_seminars_setup' );

/**
 * Front-end styles, the scroll-effects script (head, not deferred, so html.sp-js is set before the first paint)
 * and the small click handler for the date strips.
 */
function minori_seminars_enqueue() {
	wp_enqueue_style( 'minori-seminars-style', get_stylesheet_uri(), array(), MINORI_SEMINARS_VERSION );
	wp_enqueue_style( 'minori-seminars-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'minori-seminars-style' ), MINORI_SEMINARS_VERSION );
	wp_enqueue_script( 'minori-seminars-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), MINORI_SEMINARS_VERSION, false );
	wp_enqueue_script( 'minori-seminars-strip', get_theme_file_uri( 'assets/minori-strip.js' ), array(), MINORI_SEMINARS_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
}
add_action( 'wp_enqueue_scripts', 'minori_seminars_enqueue' );

/**
 * Pattern category.
 */
function minori_seminars_pattern_category() {
	register_block_pattern_category( 'minori-seminars', array( 'label' => __( 'Minori Seminars', 'minori-seminars' ) ) );
}
add_action( 'init', 'minori_seminars_pattern_category' );
