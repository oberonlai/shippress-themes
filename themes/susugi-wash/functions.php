<?php
/**
 * Susugi Wash — functions and definitions.
 *
 * @package susugi-wash
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'SUSUGI_WASH_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function susugi_wash_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'susugi_wash_setup' );

/**
 * Front-end styles and the scroll-effects script (in the head, not deferred, so the reveal states are set before first paint).
 */
function susugi_wash_enqueue() {
	wp_enqueue_style( 'susugi-wash-style', get_stylesheet_uri(), array(), SUSUGI_WASH_VERSION );
	wp_enqueue_style( 'susugi-wash-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'susugi-wash-style' ), SUSUGI_WASH_VERSION );
	wp_enqueue_script( 'susugi-wash-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SUSUGI_WASH_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'susugi_wash_enqueue' );

/**
 * Pattern category.
 */
function susugi_wash_pattern_categories() {
	register_block_pattern_category(
		'susugi-wash',
		array(
			'label'       => __( 'Susugi Wash', 'susugi-wash' ),
			'description' => __( 'Sections for a one-product preorder page: the 50/50 split hero, corner-bracket calls to action, the parallax photograph, closing-rush rows, the staggered photo row, spec tables and the FAQ.', 'susugi-wash' ),
		)
	);
}
add_action( 'init', 'susugi_wash_pattern_categories' );
