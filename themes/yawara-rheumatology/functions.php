<?php
/**
 * Yawara Rheumatology — functions and definitions.
 *
 * @package yawara-rheumatology
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'YAWARA_RHEUMATOLOGY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function yawara_rheumatology_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'yawara_rheumatology_setup' );

/**
 * Front-end styles and the small scroll-effects script (loaded in the head, not deferred, so the hidden states
 * are set before the first paint).
 */
function yawara_rheumatology_enqueue() {
	wp_enqueue_style( 'yawara-rheumatology-style', get_stylesheet_uri(), array(), YAWARA_RHEUMATOLOGY_VERSION );
	wp_enqueue_style( 'yawara-rheumatology-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), YAWARA_RHEUMATOLOGY_VERSION );
	wp_enqueue_script( 'yawara-rheumatology-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), YAWARA_RHEUMATOLOGY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'yawara_rheumatology_enqueue' );

/**
 * Pattern category.
 */
function yawara_rheumatology_pattern_categories() {
	register_block_pattern_category(
		'yawara-rheumatology',
		array(
			'label'       => __( 'Yawara Rheumatology', 'yawara-rheumatology' ),
			'description' => __( 'Sections for a rheumatology clinic: the half-and-half first screen with a drifting photo strip, seam tab cards, the notice line, the method band, the team strip, the first-year figures and the day at the clinic.', 'yawara-rheumatology' ),
		)
	);
}
add_action( 'init', 'yawara_rheumatology_pattern_categories' );
