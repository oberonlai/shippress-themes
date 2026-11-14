<?php
/**
 * Utsushi Films: functions and definitions.
 *
 * @package utsushi-films
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'UTSUSHI_FILMS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function utsushi_films_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'utsushi_films_setup' );

/**
 * Front-end styles and the small scroll script (head, not deferred, so the hidden states exist before first paint).
 */
function utsushi_films_enqueue() {
	wp_enqueue_style( 'utsushi-films-style', get_stylesheet_uri(), array(), UTSUSHI_FILMS_VERSION );
	wp_enqueue_style( 'utsushi-films-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'utsushi-films-style' ), UTSUSHI_FILMS_VERSION );
	wp_enqueue_script( 'utsushi-films-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), UTSUSHI_FILMS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'utsushi_films_enqueue' );

/**
 * Pattern category.
 */
function utsushi_films_pattern_categories() {
	register_block_pattern_category(
		'utsushi-films',
		array(
			'label'       => __( 'Utsushi Films', 'utsushi-films' ),
			'description' => __( 'Sections for a documentary director: the film index crossing a framed window, the masonry case wall, the text panel over a photograph and the commission rate rows.', 'utsushi-films' ),
		)
	);
}
add_action( 'init', 'utsushi_films_pattern_categories' );
