<?php
/**
 * Tabidachi Study Tours: functions and definitions.
 *
 * @package tabidachi-tours
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'TABIDACHI_TOURS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function tabidachi_tours_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'tabidachi_tours_setup' );

/**
 * Front-end styles and the small scroll script (head, not deferred, so the hidden states exist before first paint).
 */
function tabidachi_tours_enqueue() {
	wp_enqueue_style( 'tabidachi-tours-style', get_stylesheet_uri(), array(), TABIDACHI_TOURS_VERSION );
	wp_enqueue_style( 'tabidachi-tours-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'tabidachi-tours-style' ), TABIDACHI_TOURS_VERSION );
	wp_enqueue_script( 'tabidachi-tours-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), TABIDACHI_TOURS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'tabidachi_tours_enqueue' );

/**
 * Pattern category.
 */
function tabidachi_tours_pattern_categories() {
	register_block_pattern_category(
		'tabidachi-tours',
		array(
			'label'       => __( 'Tabidachi Study Tours', 'tabidachi-tours' ),
			'description' => __( 'Sections for a school trip organiser: the editorial lead photo with a timed rail, audience gateway cards, a term-by-term line and trip cards.', 'tabidachi-tours' ),
		)
	);
}
add_action( 'init', 'tabidachi_tours_pattern_categories' );
