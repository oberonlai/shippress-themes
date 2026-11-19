<?php
/**
 * Yuzuriha Retreat: functions and definitions.
 *
 * @package yuzuriha-retreat
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'YUZURIHA_RETREAT_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function yuzuriha_retreat_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'yuzuriha_retreat_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function yuzuriha_retreat_enqueue() {
	wp_enqueue_style( 'yuzuriha-retreat-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), YUZURIHA_RETREAT_VERSION );
	wp_enqueue_style( 'yuzuriha-retreat-style', get_stylesheet_uri(), array( 'yuzuriha-retreat-sp-scroll' ), YUZURIHA_RETREAT_VERSION );
	wp_enqueue_script( 'yuzuriha-retreat-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), YUZURIHA_RETREAT_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'yuzuriha_retreat_enqueue' );

/**
 * Pattern category.
 */
function yuzuriha_retreat_pattern_categories() {
	register_block_pattern_category(
		'yuzuriha-retreat',
		array(
			'label'       => __( 'Yuzuriha Retreat', 'yuzuriha-retreat' ),
			'description' => __( 'Sections for a retreat lodge: the full-bleed first-light hero with its day-line, the retreat portrait, square calendar cards, the hairline retreat day, the offset lodge photographs, the price table, the people rows, the one way to reserve and the ridge-cut closing band.', 'yuzuriha-retreat' ),
		)
	);
}
add_action( 'init', 'yuzuriha_retreat_pattern_categories' );
