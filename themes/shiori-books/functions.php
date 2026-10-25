<?php
/**
 * Shiori Books — functions and definitions.
 *
 * @package shiori-books
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'SHIORI_BOOKS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function shiori_books_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'shiori_books_setup' );

/**
 * Front-end styles and the scroll-effect script. sp-scroll.js loads in the head and not deferred, so the reveal states
 * exist before the first paint.
 */
function shiori_books_enqueue() {
	wp_enqueue_style( 'shiori-books-style', get_stylesheet_uri(), array(), SHIORI_BOOKS_VERSION );
	wp_enqueue_style( 'shiori-books-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'shiori-books-style' ), SHIORI_BOOKS_VERSION );
	wp_add_inline_style( 'shiori-books-style', ':root{--sb-menu:"' . esc_attr( str_replace( '"', '', shiori_books_t( 'menu' ) ) ) . '";}' );
	wp_enqueue_script( 'shiori-books-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SHIORI_BOOKS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'shiori_books_enqueue' );

/**
 * Pattern category.
 */
function shiori_books_pattern_categories() {
	register_block_pattern_category(
		'shiori-books',
		array(
			'label'       => __( 'Shiori Books', 'shiori-books' ),
			'description' => __( 'Sections for an independent bookshop: the day and evening entrance, the shop in one look, the new shelves, the Saturday reading index, the people on a dark field, the price list, the journal and the visit panel.', 'shiori-books' ),
		)
	);
}
add_action( 'init', 'shiori_books_pattern_categories' );
