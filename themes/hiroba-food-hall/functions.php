<?php
/**
 * Hiroba Food Hall — functions and definitions.
 *
 * @package hiroba-food-hall
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'HIROBA_FOOD_HALL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hiroba_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hiroba_setup' );

/**
 * Front-end styles and the small scroll-effects script (head, not deferred, so the hidden state never flashes).
 */
function hiroba_enqueue() {
	wp_enqueue_style( 'hiroba-food-hall-style', get_stylesheet_uri(), array(), HIROBA_FOOD_HALL_VERSION );
	wp_enqueue_style( 'hiroba-food-hall-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'hiroba-food-hall-style' ), HIROBA_FOOD_HALL_VERSION );
	wp_enqueue_script( 'hiroba-food-hall-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HIROBA_FOOD_HALL_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'hiroba_enqueue' );

/**
 * Pattern category.
 */
function hiroba_pattern_categories() {
	register_block_pattern_category(
		'hiroba-food-hall',
		array(
			'label'       => __( 'Hiroba Food Hall', 'hiroba-food-hall' ),
			'description' => __( 'Sections for a city food hall: the framed window with a photo strip, today’s hours with an arc edge, kitchen cards with medallions, the lunch-hour ruler, the parallax band, held tables, guest notes and the visit band.', 'hiroba-food-hall' ),
		)
	);
}
add_action( 'init', 'hiroba_pattern_categories' );
