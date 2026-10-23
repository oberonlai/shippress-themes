<?php
/**
 * Kazu Data Course — functions and definitions.
 *
 * @package kazu-data-course
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/blocks.php';

define( 'KAZU_DATA_COURSE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kazu_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kazu_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head, not deferred, so html.sp-js is set before
 * the first paint (no flash of visible content that then hides).
 */
function kazu_enqueue() {
	wp_enqueue_style( 'kazu-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KAZU_DATA_COURSE_VERSION );
	wp_enqueue_style( 'kazu-data-course-style', get_stylesheet_uri(), array( 'kazu-sp-scroll' ), KAZU_DATA_COURSE_VERSION );
	wp_enqueue_script( 'kazu-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KAZU_DATA_COURSE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kazu_enqueue' );

/**
 * Pattern category.
 */
function kazu_pattern_categories() {
	register_block_pattern_category(
		'kazu-data-course',
		array(
			'label'       => __( 'Kazu Data Course', 'kazu-data-course' ),
			'description' => __( 'Sections for a solo-instructor online course: the flush-left display headline, the framed portrait with a vertical name, offset cards with pill labels, alternating chapters, student work over a pale watermark ring and one clear price.', 'kazu-data-course' ),
		)
	);
}
add_action( 'init', 'kazu_pattern_categories' );
