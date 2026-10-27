<?php
/**
 * Satei Adjusters — functions and definitions.
 *
 * @package satei-adjusters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'SATEI_ADJUSTERS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function satei_adjusters_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'satei_adjusters_setup' );

/**
 * Front-end styles and the scroll-effects script (in the head, not deferred, so the reveal states are set before first paint).
 */
function satei_adjusters_enqueue() {
	wp_enqueue_style( 'satei-adjusters-style', get_stylesheet_uri(), array(), SATEI_ADJUSTERS_VERSION );
	wp_enqueue_style( 'satei-adjusters-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'satei-adjusters-style' ), SATEI_ADJUSTERS_VERSION );
	wp_enqueue_script( 'satei-adjusters-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SATEI_ADJUSTERS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'satei_adjusters_enqueue' );

/**
 * Pattern category.
 */
function satei_adjusters_pattern_categories() {
	register_block_pattern_category(
		'satei-adjusters',
		array(
			'label'       => __( 'Satei Adjusters', 'satei-adjusters' ),
			'description' => __( 'Sections for a loss-adjusting waitlist page: the wordmark hero over a photograph, hairline section openers, the colour-flooded sticky split, the photo strip, the ruled fee table and the mauve FAQ band.', 'satei-adjusters' ),
		)
	);
}
add_action( 'init', 'satei_adjusters_pattern_categories' );
