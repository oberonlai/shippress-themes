<?php
/**
 * Asayake Lodge: functions and definitions.
 *
 * @package asayake-lodge
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'ASAYAKE_LODGE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function asayake_lodge_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'asayake_lodge_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function asayake_lodge_enqueue() {
	wp_enqueue_style( 'asayake-lodge-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), ASAYAKE_LODGE_VERSION );
	wp_enqueue_style( 'asayake-lodge-style', get_stylesheet_uri(), array( 'asayake-lodge-sp-scroll' ), ASAYAKE_LODGE_VERSION );
	wp_enqueue_script( 'asayake-lodge-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), ASAYAKE_LODGE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'asayake_lodge_enqueue' );

/**
 * Pattern category.
 */
function asayake_lodge_pattern_categories() {
	register_block_pattern_category(
		'asayake-lodge',
		array(
			'label'       => __( 'Asayake Lodge', 'asayake-lodge' ),
			'description' => __( 'Sections for a hospital guest house: a framed photo window on a dusk-rose field with a docked bar and a light shaft, a day-line with hanging cards, notes, a sticky day schedule, rooms, rates and a key-card band.', 'asayake-lodge' ),
		)
	);
}
add_action( 'init', 'asayake_lodge_pattern_categories' );
