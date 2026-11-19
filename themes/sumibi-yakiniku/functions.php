<?php
/**
 * Sumibi Yakiniku: functions and definitions.
 *
 * @package sumibi-yakiniku
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'SUMIBI_YAKINIKU_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function sumibi_yakiniku_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'sumibi_yakiniku_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function sumibi_yakiniku_enqueue() {
	wp_enqueue_style( 'sumibi-yakiniku-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), SUMIBI_YAKINIKU_VERSION );
	wp_enqueue_style( 'sumibi-yakiniku-style', get_stylesheet_uri(), array( 'sumibi-yakiniku-sp-scroll' ), SUMIBI_YAKINIKU_VERSION );
	wp_enqueue_script( 'sumibi-yakiniku-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SUMIBI_YAKINIKU_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'sumibi_yakiniku_enqueue' );

/**
 * Pattern category.
 */
function sumibi_yakiniku_pattern_categories() {
	register_block_pattern_category(
		'sumibi-yakiniku',
		array(
			'label'       => __( 'Sumibi Yakiniku', 'sumibi-yakiniku' ),
			'description' => __( 'Sections for a charcoal yakiniku grill: the window with its docked plate, the dark five o\'clock band, course tabs and cards, the price table, group rooms and the one way to reserve.', 'sumibi-yakiniku' ),
		)
	);
}
add_action( 'init', 'sumibi_yakiniku_pattern_categories' );
