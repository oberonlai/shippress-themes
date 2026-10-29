<?php
/**
 * Awa Taproom — functions and definitions.
 *
 * @package awa-taproom
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'AWA_TAPROOM_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function awa_taproom_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'awa_taproom_setup' );

/**
 * Front-end styles and the small scroll-effects script (loaded in the head, not deferred, so the hidden states are
 * set before the first paint and nothing flashes).
 */
function awa_taproom_enqueue() {
	wp_enqueue_style( 'awa-taproom-style', get_stylesheet_uri(), array(), AWA_TAPROOM_VERSION );
	wp_enqueue_style( 'awa-taproom-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'awa-taproom-style' ), AWA_TAPROOM_VERSION );
	wp_enqueue_script( 'awa-taproom-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), AWA_TAPROOM_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'awa_taproom_enqueue' );

/**
 * Pattern category.
 */
function awa_taproom_pattern_categories() {
	register_block_pattern_category(
		'awa-taproom',
		array(
			'label'       => __( 'Awa Taproom', 'awa-taproom' ),
			'description' => __( 'Sections for a small brewery taproom: the framed-window hero, the room, the made-here strip, the rule-topped tap cards, the price list, the held-seat cards, the horizontal tanks strip and the visit close.', 'awa-taproom' ),
		)
	);
}
add_action( 'init', 'awa_taproom_pattern_categories' );
