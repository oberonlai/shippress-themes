<?php
/**
 * Hozue Food Festival: functions and definitions.
 *
 * @package hozue-foodfest
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'HOZUE_FOODFEST_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hozue_foodfest_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hozue_foodfest_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function hozue_foodfest_enqueue() {
	wp_enqueue_style( 'hozue-foodfest-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), HOZUE_FOODFEST_VERSION );
	wp_enqueue_style( 'hozue-foodfest-style', get_stylesheet_uri(), array( 'hozue-foodfest-sp-scroll' ), HOZUE_FOODFEST_VERSION );
	wp_enqueue_script( 'hozue-foodfest-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HOZUE_FOODFEST_VERSION, false );
	wp_enqueue_script( 'hozue-foodfest-header', get_theme_file_uri( 'assets/hf-header.js' ), array(), HOZUE_FOODFEST_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'hozue_foodfest_enqueue' );

/**
 * Pattern category.
 */
function hozue_foodfest_pattern_categories() {
	register_block_pattern_category(
		'hozue-foodfest',
		array(
			'label'       => __( 'Hozue Food Festival', 'hozue-foodfest' ),
			'description' => __( 'Sections for a regional food and wine festival: a framed photo window with a cross-fading slideshow, a floating card-row of quick links, a rounded panel feed of programme cells, a ticket price table, a parallax riverbank band and one early-bird call.', 'hozue-foodfest' ),
		)
	);
}
add_action( 'init', 'hozue_foodfest_pattern_categories' );
