<?php
/**
 * Shoko Archives: functions and definitions.
 *
 * @package shoko-archives
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'SHOKO_ARCHIVES_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function shoko_archives_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'shoko_archives_setup' );

/**
 * Front-end styles and scripts. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before the first
 * paint; without it every sp-* element stays visible. hero.js only toggles the hero slideshow pause button.
 */
function shoko_archives_enqueue() {
	wp_enqueue_style( 'shoko-archives-style', get_stylesheet_uri(), array(), SHOKO_ARCHIVES_VERSION );
	wp_enqueue_style( 'shoko-archives-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), SHOKO_ARCHIVES_VERSION );
	wp_enqueue_script( 'shoko-archives-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SHOKO_ARCHIVES_VERSION, false );
	wp_enqueue_script( 'shoko-archives-hero', get_theme_file_uri( 'assets/hero.js' ), array(), SHOKO_ARCHIVES_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'shoko_archives_enqueue' );

/**
 * The hero slides and the photographs under the fold load up front so none stays blank.
 *
 * @param bool $default Whether lazy loading is on.
 * @return bool
 */
function shoko_archives_lazy_loading( $default ) {
	return ( is_front_page() || is_page() ) ? false : $default;
}
add_filter( 'wp_lazy_loading_enabled', 'shoko_archives_lazy_loading' );

/**
 * Pattern category.
 */
function shoko_archives_pattern_categories() {
	register_block_pattern_category(
		'shoko-archives',
		array(
			'label'       => __( 'Shoko Archives', 'shoko-archives' ),
			'description' => __( 'Sections for a records-management landing page: an outline-boxed headline over a cross-fading photo window, ruled headings with striped lists, tabbed photo cards, a parallax aisle band with a docked panel, icon rows, a price table, people, cases and a booking band.', 'shoko-archives' ),
		)
	);
}
add_action( 'init', 'shoko_archives_pattern_categories' );
