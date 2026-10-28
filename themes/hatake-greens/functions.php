<?php
/**
 * Hatake Greens — functions and definitions.
 *
 * @package hatake-greens
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/blocks.php';

define( 'HATAKE_GREENS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hatake_greens_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hatake_greens_setup' );

/**
 * Front-end styles and the scroll-effects script. The script is loaded in the head, not deferred, so the html.sp-js
 * class is set before the first paint (it only hides what it is about to reveal).
 */
function hatake_greens_enqueue() {
	wp_enqueue_style( 'hatake-greens-style', get_stylesheet_uri(), array(), HATAKE_GREENS_VERSION );
	wp_enqueue_style( 'hatake-greens-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'hatake-greens-style' ), HATAKE_GREENS_VERSION );
	wp_enqueue_script( 'hatake-greens-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HATAKE_GREENS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'hatake_greens_enqueue' );

/**
 * Pattern category.
 */
function hatake_greens_pattern_categories() {
	register_block_pattern_category(
		'hatake-greens',
		array(
			'label'       => __( 'Hatake Greens', 'hatake-greens' ),
			'description' => __( 'Sections for a vegetable-box membership: the full-bleed photo hero with a wide-tracked headline, the sage triangle label with tagged photo cards, the packing morning, the single plan with its price table and the repeated join band.', 'hatake-greens' ),
		)
	);
}
add_action( 'init', 'hatake_greens_pattern_categories' );
