<?php
/**
 * Hatoba College: functions and definitions.
 *
 * @package hatoba-college
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'HATOBA_COLLEGE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hatoba_college_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hatoba_college_setup' );

/**
 * Front-end styles and scripts. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before the first
 * paint; without it every sp-* element stays visible. hero.js only drives the hero slideshow controls.
 */
function hatoba_college_enqueue() {
	wp_enqueue_style( 'hatoba-college-style', get_stylesheet_uri(), array(), HATOBA_COLLEGE_VERSION );
	wp_enqueue_style( 'hatoba-college-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), HATOBA_COLLEGE_VERSION );
	wp_enqueue_script( 'hatoba-college-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HATOBA_COLLEGE_VERSION, false );
	wp_enqueue_script( 'hatoba-college-hero', get_theme_file_uri( 'assets/hero.js' ), array(), HATOBA_COLLEGE_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'hatoba_college_enqueue' );

/**
 * The hero slides and the photographs under the fold load up front so none stays blank.
 *
 * @param bool $default Whether lazy loading is on.
 * @return bool
 */
function hatoba_college_lazy_loading( $default ) {
	return ( is_front_page() || is_page() ) ? false : $default;
}
add_filter( 'wp_lazy_loading_enabled', 'hatoba_college_lazy_loading' );

/**
 * Pattern category.
 */
function hatoba_college_pattern_categories() {
	register_block_pattern_category(
		'hatoba-college',
		array(
			'label'       => __( 'Hatoba College', 'hatoba-college' ),
			'description' => __( 'Sections for a maritime training college: a framed photograph window with a docked caption bar and week-tick line, enlarged-initial section words, stacked stage bars, a brass berth-confirmed pill, a parallax quay band, a photo trio, a fee ledger and a journal.', 'hatoba-college' ),
		)
	);
}
add_action( 'init', 'hatoba_college_pattern_categories' );
