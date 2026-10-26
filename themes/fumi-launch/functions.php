<?php
/**
 * Fumi Press Launch: functions and definitions.
 *
 * @package fumi-launch
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'FUMI_LAUNCH_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (the scroll-effects CSS too, so the editor shows the final state).
 */
function fumi_launch_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'fumi_launch_setup' );

/**
 * Front-end styles and the small scroll-effects script (in the head, not deferred, so no content flashes).
 */
function fumi_launch_enqueue() {
	wp_enqueue_style( 'fumi-launch-style', get_stylesheet_uri(), array(), FUMI_LAUNCH_VERSION );
	wp_enqueue_style( 'fumi-launch-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'fumi-launch-style' ), FUMI_LAUNCH_VERSION );
	wp_enqueue_script( 'fumi-launch-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), FUMI_LAUNCH_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'fumi_launch_enqueue' );

/**
 * Pattern category.
 */
function fumi_launch_pattern_categories() {
	register_block_pattern_category(
		'fumi-launch',
		array(
			'label'       => __( 'Fumi Press Launch', 'fumi-launch' ),
			'description' => __( 'Sections for a single-book launch page: the framed-window hero with the giant title, dated readings, excerpt, author note, stage band, editions table and FAQ.', 'fumi-launch' ),
		)
	);
}
add_action( 'init', 'fumi_launch_pattern_categories' );
