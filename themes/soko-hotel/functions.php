<?php
/**
 * Soko Hotel: functions and definitions.
 *
 * @package soko-hotel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'SOKO_HOTEL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function soko_hotel_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'soko_hotel_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function soko_hotel_enqueue() {
	wp_enqueue_style( 'soko-hotel-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), SOKO_HOTEL_VERSION );
	wp_enqueue_style( 'soko-hotel-style', get_stylesheet_uri(), array( 'soko-hotel-sp-scroll' ), SOKO_HOTEL_VERSION );
	wp_enqueue_script( 'soko-hotel-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SOKO_HOTEL_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'soko_hotel_enqueue' );

/**
 * Pattern category.
 */
function soko_hotel_pattern_categories() {
	register_block_pattern_category(
		'soko-hotel',
		array(
			'label'       => __( 'Soko Hotel', 'soko-hotel' ),
			'description' => __( 'Sections for a harbour warehouse hotel: the letterbox stage, the inset still, the essay columns, room stills, the night band, the credit roll and the one way to reserve.', 'soko-hotel' ),
		)
	);
}
add_action( 'init', 'soko_hotel_pattern_categories' );

/**
 * Group style used by journal posts: the first three paragraphs set as three equal columns from 1100px.
 */
function soko_hotel_block_styles() {
	register_block_style(
		'core/group',
		array(
			'name'  => 'essay-3col',
			'label' => __( 'Essay, three columns', 'soko-hotel' ),
		)
	);
}
add_action( 'init', 'soko_hotel_block_styles' );
