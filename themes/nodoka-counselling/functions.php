<?php
/**
 * Nodoka Counselling — functions and definitions.
 *
 * @package nodoka-counselling
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'NODOKA_COUNSELLING_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (the scroll effects show their final state in the editor).
 */
function nodoka_counselling_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'nodoka_counselling_setup' );

/**
 * Front-end styles and the scroll-effects script (in <head>, not deferred, so the hidden states exist before first paint).
 */
function nodoka_counselling_enqueue() {
	wp_enqueue_style( 'nodoka-counselling-style', get_stylesheet_uri(), array(), NODOKA_COUNSELLING_VERSION );
	wp_enqueue_style( 'nodoka-counselling-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'nodoka-counselling-style' ), NODOKA_COUNSELLING_VERSION );
	wp_enqueue_script( 'nodoka-counselling-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), NODOKA_COUNSELLING_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'nodoka_counselling_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function nodoka_counselling_block_styles() {
	register_block_style(
		'core/button',
		array(
			'name'  => 'text-link',
			'label' => __( 'Text link with an arrow', 'nodoka-counselling' ),
		)
	);
}
add_action( 'init', 'nodoka_counselling_block_styles' );

/**
 * Pattern category.
 */
function nodoka_counselling_pattern_categories() {
	register_block_pattern_category(
		'nodoka-counselling',
		array(
			'label'       => __( 'Nodoka Counselling', 'nodoka-counselling' ),
			'description' => __( 'Sections for a psychotherapy practice: a split first screen with vertical tabs, poem-line intro, ruled openers, an index of difficulties, three hairline columns, a parallax pause, a rounded photo pair, stories, fees and a quiet close.', 'nodoka-counselling' ),
		)
	);
}
add_action( 'init', 'nodoka_counselling_pattern_categories' );
