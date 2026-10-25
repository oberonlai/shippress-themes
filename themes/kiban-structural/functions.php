<?php
/**
 * Kiban Structural — functions and definitions.
 *
 * @package kiban-structural
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KIBAN_STRUCTURAL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared; without the plugin it does nothing.
 */
function kiban_structural_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kiban_structural_setup' );

/**
 * Front-end styles and the small scroll script (in the head, not deferred, so html.sp-js is set before first paint).
 */
function kiban_structural_enqueue() {
	wp_enqueue_style( 'kiban-structural-style', get_stylesheet_uri(), array(), KIBAN_STRUCTURAL_VERSION );
	wp_enqueue_style( 'kiban-structural-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kiban-structural-style' ), KIBAN_STRUCTURAL_VERSION );
	wp_enqueue_script( 'kiban-structural-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KIBAN_STRUCTURAL_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kiban_structural_enqueue' );

/**
 * Pattern category.
 */
function kiban_structural_pattern_categories() {
	register_block_pattern_category(
		'kiban-structural',
		array(
			'label'       => __( 'Kiban Structural', 'kiban-structural' ),
			'description' => __( 'Sections for a structural engineering practice: the stadium window over a giant cropped wordmark, the dark rounded parallax band, the process beside sticky media, tilted line-diagram cards, projects, fee table, team and codes strip.', 'kiban-structural' ),
		)
	);
}
add_action( 'init', 'kiban_structural_pattern_categories' );
