<?php
/**
 * Shikii Mats: functions and definitions.
 *
 * @package shikii-mats
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'SHIKII_MATS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function shikii_mats_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'shikii_mats_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function shikii_mats_enqueue() {
	wp_enqueue_style( 'shikii-mats-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), SHIKII_MATS_VERSION );
	wp_enqueue_style( 'shikii-mats-style', get_stylesheet_uri(), array( 'shikii-mats-sp-scroll' ), SHIKII_MATS_VERSION );
	wp_enqueue_script( 'shikii-mats-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SHIKII_MATS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'shikii_mats_enqueue' );

/**
 * Pattern category.
 */
function shikii_mats_pattern_categories() {
	register_block_pattern_category(
		'shikii-mats',
		array(
			'label'       => __( 'Shikii Mats', 'shikii-mats' ),
			'description' => __( 'Sections for an entrance-mat hire landing page: the threshold split photo collage with a booking bar, site cards with a four-week track, the round, a parallax doorway band, dashed trial rows, the price table, notes and questions.', 'shikii-mats' ),
		)
	);
}
add_action( 'init', 'shikii_mats_pattern_categories' );
