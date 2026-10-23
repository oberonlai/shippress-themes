<?php
/**
 * Aoba Veterinary — functions and definitions.
 *
 * @package aoba-veterinary
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'AOBA_VETERINARY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared; the site works the same without the plugin.
 */
function aoba_veterinary_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'aoba_veterinary_setup' );

/**
 * Front-end styles and the scroll-effects script. The script goes in the head, not deferred, so the hidden start
 * states of the reveal effects exist before the first paint.
 */
function aoba_veterinary_enqueue() {
	wp_enqueue_style( 'aoba-veterinary-style', get_stylesheet_uri(), array(), AOBA_VETERINARY_VERSION );
	wp_enqueue_style( 'aoba-veterinary-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), AOBA_VETERINARY_VERSION );
	wp_enqueue_script( 'aoba-veterinary-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), AOBA_VETERINARY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'aoba_veterinary_enqueue' );

/**
 * Pattern category.
 */
function aoba_veterinary_pattern_categories() {
	register_block_pattern_category(
		'aoba-veterinary',
		array(
			'label'       => __( 'Aoba Veterinary', 'aoba-veterinary' ),
			'description' => __( 'Sections for a dogs-and-cats clinic: a photograph with a framed statement box, numbered panels on photo cards, ruled method rows, one recovery story, a price list and a solid timetable block.', 'aoba-veterinary' ),
		)
	);
}
add_action( 'init', 'aoba_veterinary_pattern_categories' );
