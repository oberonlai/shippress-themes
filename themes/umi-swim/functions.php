<?php
/**
 * Umi Swim School — functions and definitions.
 *
 * @package umi-swim
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'UMI_SWIM_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function umi_swim_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'umi_swim_setup' );

/**
 * Front-end styles and scripts. sp-scroll.js loads in the head (not deferred) so the no-JS and reduced-motion
 * states are set before the first paint; tabs.js only drives the pill tabs and the schedule strip buttons.
 */
function umi_swim_enqueue() {
	wp_enqueue_style( 'umi-swim-style', get_stylesheet_uri(), array(), UMI_SWIM_VERSION );
	wp_enqueue_style( 'umi-swim-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'umi-swim-style' ), UMI_SWIM_VERSION );
	wp_enqueue_script( 'umi-swim-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), UMI_SWIM_VERSION, false );
	wp_enqueue_script( 'umi-swim-tabs', get_theme_file_uri( 'assets/tabs.js' ), array(), UMI_SWIM_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
}
add_action( 'wp_enqueue_scripts', 'umi_swim_enqueue' );

/**
 * Pattern category.
 */
function umi_swim_pattern_categories() {
	register_block_pattern_category(
		'umi-swim',
		array(
			'label'       => __( 'Umi Swim School', 'umi-swim' ),
			'description' => __( 'Sections for a swimming school: the blob-masked pool photograph with a water blob, the day-schedule strip, pill-tabbed programmes, coaches, stories, fees and access.', 'umi-swim' ),
		)
	);
}
add_action( 'init', 'umi_swim_pattern_categories' );
