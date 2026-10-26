<?php
/**
 * Nuno Workwear — functions and definitions.
 *
 * @package nuno-workwear
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'NUNO_WORKWEAR_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function nuno_workwear_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( array( 'style.css', 'assets/sp-scroll.css' ) );
}
add_action( 'after_setup_theme', 'nuno_workwear_setup' );

/**
 * Front-end styles and the scroll-effects script (in the head, not deferred, so the hidden states are set before the
 * first paint).
 */
function nuno_workwear_enqueue() {
	wp_enqueue_style( 'nuno-workwear-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), NUNO_WORKWEAR_VERSION );
	wp_enqueue_style( 'nuno-workwear-style', get_stylesheet_uri(), array( 'nuno-workwear-sp-scroll' ), NUNO_WORKWEAR_VERSION );
	wp_enqueue_script( 'nuno-workwear-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), NUNO_WORKWEAR_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'nuno_workwear_enqueue' );

/**
 * Pattern category.
 */
function nuno_workwear_pattern_categories() {
	register_block_pattern_category(
		'nuno-workwear',
		array(
			'label'       => __( 'Nuno Workwear', 'nuno-workwear' ),
			'description' => __( 'Sections for a workwear shop: the giant two-line hero over a half-height photograph, the trade card mosaic on dashed guides, ink bands, fit rows, the workshop price list, crew stories and the order steps.', 'nuno-workwear' ),
		)
	);
}
add_action( 'init', 'nuno_workwear_pattern_categories' );
