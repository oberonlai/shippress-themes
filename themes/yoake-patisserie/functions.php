<?php
/**
 * Yoake Patisserie: functions and definitions.
 *
 * @package yoake-patisserie
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'YOAKE_PATISSERIE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function yoake_patisserie_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'yoake_patisserie_setup' );

/**
 * Front-end styles and the small scroll script (head, not deferred, so the hidden states exist before first paint).
 */
function yoake_patisserie_enqueue() {
	wp_enqueue_style( 'yoake-patisserie-style', get_stylesheet_uri(), array(), YOAKE_PATISSERIE_VERSION );
	wp_enqueue_style( 'yoake-patisserie-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'yoake-patisserie-style' ), YOAKE_PATISSERIE_VERSION );
	wp_enqueue_script( 'yoake-patisserie-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), YOAKE_PATISSERIE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'yoake_patisserie_enqueue' );

/**
 * Pattern category.
 */
function yoake_patisserie_pattern_categories() {
	register_block_pattern_category(
		'yoake-patisserie',
		array(
			'label'       => __( 'Yoake Patisserie', 'yoake-patisserie' ),
			'description' => __( 'Sections for a patisserie and tea salon: the split dawn hero, wash bands with edge-flush photographs, the hour ledger, the film still, the price table and the Morning Sheet.', 'yoake-patisserie' ),
		)
	);
}
add_action( 'init', 'yoake_patisserie_pattern_categories' );
