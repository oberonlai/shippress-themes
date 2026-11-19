<?php
/**
 * Tsukuri Design Office: functions and definitions.
 *
 * @package tsukuri-design
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'TSUKURI_DESIGN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function tsukuri_design_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'tsukuri_design_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function tsukuri_design_enqueue() {
	wp_enqueue_style( 'tsukuri-design-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), TSUKURI_DESIGN_VERSION );
	wp_enqueue_style( 'tsukuri-design-style', get_stylesheet_uri(), array( 'tsukuri-design-sp-scroll' ), TSUKURI_DESIGN_VERSION );
	wp_enqueue_script( 'tsukuri-design-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), TSUKURI_DESIGN_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'tsukuri_design_enqueue' );

/**
 * Pattern category.
 */
function tsukuri_design_pattern_categories() {
	register_block_pattern_category(
		'tsukuri-design',
		array(
			'label'       => __( 'Tsukuri Design Office', 'tsukuri-design' ),
			'description' => __( 'Sections for an industrial design studio: the tonal title strip with a straddling photograph, problem and method caption rows, twin proof photographs, product rows, a dark statement band and the one way to start a project.', 'tsukuri-design' ),
		)
	);
}
add_action( 'init', 'tsukuri_design_pattern_categories' );
