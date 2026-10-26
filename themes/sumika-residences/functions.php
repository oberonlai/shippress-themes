<?php
/**
 * Sumika Residences — functions and definitions.
 *
 * @package sumika-residences
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'SUMIKA_RESIDENCES_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (the style sheet and the scroll-effect CSS, so the editor shows the final state).
 */
function sumika_residences_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'sumika_residences_setup' );

/**
 * Front-end styles and the scroll-effect script (in the head, not deferred, so the hidden state never flashes).
 */
function sumika_residences_enqueue() {
	wp_enqueue_style( 'sumika-residences-style', get_stylesheet_uri(), array(), SUMIKA_RESIDENCES_VERSION );
	wp_enqueue_style( 'sumika-residences-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'sumika-residences-style' ), SUMIKA_RESIDENCES_VERSION );
	wp_enqueue_script( 'sumika-residences-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SUMIKA_RESIDENCES_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'sumika_residences_enqueue' );

/**
 * Pattern category.
 */
function sumika_residences_pattern_category() {
	register_block_pattern_category( 'sumika-residences', array( 'label' => __( 'Sumika Residences', 'sumika-residences' ) ) );
}
add_action( 'init', 'sumika_residences_pattern_category' );
