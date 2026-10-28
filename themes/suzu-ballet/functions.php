<?php
/**
 * Suzu Ballet — functions and definitions.
 *
 * @package suzu-ballet
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/blocks.php';

define( 'SUZU_BALLET_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function suzu_ballet_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'suzu_ballet_setup' );

/**
 * Front-end styles and the scroll-effects script. The script is loaded in the head, not deferred, so the html.sp-js
 * class is set before the first paint (it only hides what it is about to reveal).
 */
function suzu_ballet_enqueue() {
	wp_enqueue_style( 'suzu-ballet-style', get_stylesheet_uri(), array(), SUZU_BALLET_VERSION );
	wp_enqueue_style( 'suzu-ballet-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'suzu-ballet-style' ), SUZU_BALLET_VERSION );
	wp_enqueue_script( 'suzu-ballet-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SUZU_BALLET_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'suzu_ballet_enqueue' );

/**
 * Pattern category.
 */
function suzu_ballet_pattern_categories() {
	register_block_pattern_category(
		'suzu-ballet',
		array(
			'label'       => __( 'Suzu Ballet', 'suzu-ballet' ),
			'description' => __( 'Sections for a ballet school: the arch-window hero with a thin caps headline across it, the Wednesday time-card strip, the mauve lattice split with an inset portrait, the sticky day schedule, the greige parallax band and the trial close.', 'suzu-ballet' ),
		)
	);
}
add_action( 'init', 'suzu_ballet_pattern_categories' );
