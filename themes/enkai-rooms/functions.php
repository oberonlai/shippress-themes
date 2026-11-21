<?php
/**
 * Enkai Rooms: functions and definitions.
 *
 * @package enkai-rooms
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'ENKAI_ROOMS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function enkai_rooms_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'enkai_rooms_setup' );

/**
 * Front-end styles and the small scroll script (head, not deferred, so the hidden states exist before first paint).
 */
function enkai_rooms_enqueue() {
	wp_enqueue_style( 'enkai-rooms-style', get_stylesheet_uri(), array(), ENKAI_ROOMS_VERSION );
	wp_enqueue_style( 'enkai-rooms-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'enkai-rooms-style' ), ENKAI_ROOMS_VERSION );
	wp_enqueue_script( 'enkai-rooms-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), ENKAI_ROOMS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'enkai_rooms_enqueue' );

/**
 * Pattern category.
 */
function enkai_rooms_pattern_categories() {
	register_block_pattern_category(
		'enkai-rooms',
		array(
			'label'       => __( 'Enkai Rooms', 'enkai-rooms' ),
			'description' => __( 'Sections for a restaurant with private rooms: the diagonal two-photo hero, the title band and wide room photograph, abutting photo tiles, the dark room ledgers, per-head price rows, a parallax band and the dates list.', 'enkai-rooms' ),
		)
	);
}
add_action( 'init', 'enkai_rooms_pattern_categories' );
