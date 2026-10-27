<?php
/**
 * Shizuku Filter — functions and definitions.
 *
 * @package shizuku-filter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'SHIZUKU_FILTER_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (the style sheet and the scroll-effect CSS, so the editor shows the final state).
 */
function shizuku_filter_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'shizuku_filter_setup' );

/**
 * Front-end styles and the scroll-effect script (in the head, not deferred, so the hidden state never flashes).
 */
function shizuku_filter_enqueue() {
	wp_enqueue_style( 'shizuku-filter-style', get_stylesheet_uri(), array(), SHIZUKU_FILTER_VERSION );
	wp_enqueue_style( 'shizuku-filter-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'shizuku-filter-style' ), SHIZUKU_FILTER_VERSION );
	wp_enqueue_script( 'shizuku-filter-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SHIZUKU_FILTER_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'shizuku_filter_enqueue' );

/**
 * Pattern category.
 */
function shizuku_filter_pattern_category() {
	register_block_pattern_category( 'shizuku-filter', array( 'label' => __( 'Shizuku Filter', 'shizuku-filter' ) ) );
}
add_action( 'init', 'shizuku_filter_pattern_category' );
