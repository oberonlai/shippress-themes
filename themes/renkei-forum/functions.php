<?php
/**
 * Renkei Forum: functions and definitions.
 *
 * @package renkei-forum
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'RENKEI_FORUM_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (the scroll-effect CSS is final-state inside the editor).
 */
function renkei_forum_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( array( 'style.css', 'assets/sp-scroll.css' ) );
}
add_action( 'after_setup_theme', 'renkei_forum_setup' );

/**
 * Front-end styles and the small scroll-effect script. The script loads in the head, not deferred, so the hidden
 * start states of the reveal effects only exist when it ran.
 */
function renkei_forum_enqueue() {
	wp_enqueue_style( 'renkei-forum-style', get_stylesheet_uri(), array(), RENKEI_FORUM_VERSION );
	wp_enqueue_style( 'renkei-forum-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'renkei-forum-style' ), RENKEI_FORUM_VERSION );
	wp_add_inline_style( 'renkei-forum-style', ':root{--rf-menu-label:' . wp_json_encode( rf_t( 'Menu' ) ) . ';}' );
	wp_enqueue_script( 'renkei-forum-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), RENKEI_FORUM_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'renkei_forum_enqueue' );

/**
 * Pattern category.
 */
function renkei_forum_pattern_categories() {
	register_block_pattern_category(
		'renkei-forum',
		array(
			'label'       => __( 'Renkei Forum', 'renkei-forum' ),
			'description' => __( 'Sections for a one-page conference site: the title-band hero, facts strip, highlight-bar brief, steps, speakers under an ellipse, the dome programme, venue, stories, tickets and FAQ.', 'renkei-forum' ),
		)
	);
}
add_action( 'init', 'renkei_forum_pattern_categories' );
