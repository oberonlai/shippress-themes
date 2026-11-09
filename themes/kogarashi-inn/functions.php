<?php
/**
 * Kogarashi Inn — functions and definitions.
 *
 * @package kogarashi-inn
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KOGARASHI_INN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (the scroll effects and the theme CSS, so the editor shows the final state).
 */
function kogarashi_inn_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( array( 'style.css', 'assets/sp-scroll.css' ) );
}
add_action( 'after_setup_theme', 'kogarashi_inn_setup' );

/**
 * Front end: scroll effects CSS and JS (the script goes in the head, not deferred, so the hidden state is set before
 * the first paint), the theme CSS and the house clock.
 */
function kogarashi_inn_enqueue() {
	wp_enqueue_style( 'kogarashi-inn-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KOGARASHI_INN_VERSION );
	wp_enqueue_style( 'kogarashi-inn-style', get_stylesheet_uri(), array( 'kogarashi-inn-sp-scroll' ), KOGARASHI_INN_VERSION );
	wp_enqueue_script( 'kogarashi-inn-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KOGARASHI_INN_VERSION, false );
	wp_enqueue_script( 'kogarashi-inn-house-clock', get_theme_file_uri( 'assets/house-clock.js' ), array( 'kogarashi-inn-sp-scroll' ), KOGARASHI_INN_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'kogarashi_inn_enqueue' );

/**
 * Pattern category.
 */
function kogarashi_inn_pattern_categories() {
	register_block_pattern_category(
		'kogarashi-inn',
		array(
			'label'       => __( 'Kogarashi Inn', 'kogarashi-inn' ),
			'description' => __( 'Sections for a country inn: the two-half cover with the house clock, the dark parallax intro, notes, the stamped day, rooms, the table, the bath-house band, people, and rates with booking.', 'kogarashi-inn' ),
		)
	);
}
add_action( 'init', 'kogarashi_inn_pattern_categories' );
