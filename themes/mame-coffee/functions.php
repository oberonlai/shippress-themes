<?php
/**
 * Mame Coffee — functions and definitions.
 *
 * @package mame-coffee
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/blocks.php';

define( 'MAME_COFFEE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function mame_coffee_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'mame_coffee_setup' );

/**
 * Front-end styles and the scroll-effects script. The script is loaded in the head, not deferred, so the html.sp-js
 * class is set before the first paint (it only hides what it is about to reveal).
 */
function mame_coffee_enqueue() {
	wp_enqueue_style( 'mame-coffee-style', get_stylesheet_uri(), array(), MAME_COFFEE_VERSION );
	wp_enqueue_style( 'mame-coffee-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'mame-coffee-style' ), MAME_COFFEE_VERSION );
	wp_enqueue_script( 'mame-coffee-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), MAME_COFFEE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'mame_coffee_enqueue' );

/**
 * Pattern category.
 */
function mame_coffee_pattern_categories() {
	register_block_pattern_category(
		'mame-coffee',
		array(
			'label'       => __( 'Mame Coffee', 'mame-coffee' ),
			'description' => __( 'Sections for a small coffee roastery and bar: the framed-window hero, the origin statement, rule-topped lot columns, the pour recipe, who roasts, the bar price list, journal columns and the visit block.', 'mame-coffee' ),
		)
	);
}
add_action( 'init', 'mame_coffee_pattern_categories' );
