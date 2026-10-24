<?php
/**
 * Akari Hotel — functions and definitions.
 *
 * @package akari-hotel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'AKARI_HOTEL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (the scroll effects show their final state in the editor).
 */
function akari_hotel_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'akari_hotel_setup' );

/**
 * Front-end styles and the scroll-effects script (in <head>, not deferred, so the hidden states exist before first paint).
 */
function akari_hotel_enqueue() {
	wp_enqueue_style( 'akari-hotel-style', get_stylesheet_uri(), array(), AKARI_HOTEL_VERSION );
	wp_enqueue_style( 'akari-hotel-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'akari-hotel-style' ), AKARI_HOTEL_VERSION );
	wp_enqueue_script( 'akari-hotel-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), AKARI_HOTEL_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'akari_hotel_enqueue' );

/**
 * Pattern category.
 */
function akari_hotel_pattern_categories() {
	register_block_pattern_category(
		'akari-hotel',
		array(
			'label'       => __( 'Akari Hotel', 'akari-hotel' ),
			'description' => __( 'Sections for a boutique city hotel: the ink wordmark screen, the dusk room, the day chapters with giant words over photographs, the sticky room stack, rates, guest notes and the enquiry card.', 'akari-hotel' ),
		)
	);
}
add_action( 'init', 'akari_hotel_pattern_categories' );
