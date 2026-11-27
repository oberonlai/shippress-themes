<?php
/**
 * Makido Shutters: functions and definitions.
 *
 * @package makido-shutters
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'MAKIDO_SHUTTERS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function makido_shutters_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'makido_shutters_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function makido_shutters_enqueue() {
	wp_enqueue_style( 'makido-shutters-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), MAKIDO_SHUTTERS_VERSION );
	wp_enqueue_style( 'makido-shutters-style', get_stylesheet_uri(), array( 'makido-shutters-sp-scroll' ), MAKIDO_SHUTTERS_VERSION );
	wp_enqueue_script( 'makido-shutters-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), MAKIDO_SHUTTERS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'makido_shutters_enqueue' );

/**
 * Pattern category.
 */
function makido_shutters_pattern_categories() {
	register_block_pattern_category(
		'makido-shutters',
		array(
			'label'       => __( 'Makido Shutters', 'makido-shutters' ),
			'description' => __( 'Sections for an industrial door and shutter contractor: a diagonal-split hero with a booking bar, a lens band that slides over the pinned hero, hairline notice boxes, a peeking door row, a full-bleed parallax crew photograph, a price table and one way to ask for a quote.', 'makido-shutters' ),
		)
	);
}
add_action( 'init', 'makido_shutters_pattern_categories' );
