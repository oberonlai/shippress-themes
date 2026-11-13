<?php
/**
 * Katachi Ergonomics: functions and definitions.
 *
 * @package katachi-ergonomics
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'KATACHI_ERGONOMICS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function katachi_ergonomics_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'katachi_ergonomics_setup' );

/**
 * Front-end styles and scripts. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before the first
 * paint; without it every sp-* element stays visible.
 */
function katachi_ergonomics_enqueue() {
	wp_enqueue_style( 'katachi-ergonomics-style', get_stylesheet_uri(), array(), KATACHI_ERGONOMICS_VERSION );
	wp_enqueue_style( 'katachi-ergonomics-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KATACHI_ERGONOMICS_VERSION );
	wp_enqueue_script( 'katachi-ergonomics-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KATACHI_ERGONOMICS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'katachi_ergonomics_enqueue' );

/**
 * The photographs of the front page and of the inner pages load up front so none stays blank under the fold.
 *
 * @param bool $default Whether lazy loading is on.
 * @return bool
 */
function katachi_ergonomics_lazy_loading( $default ) {
	return ( is_front_page() || is_page() ) ? false : $default;
}
add_filter( 'wp_lazy_loading_enabled', 'katachi_ergonomics_lazy_loading' );

/**
 * Pattern category.
 */
function katachi_ergonomics_pattern_categories() {
	register_block_pattern_category(
		'katachi-ergonomics',
		array(
			'label'       => __( 'Katachi Ergonomics', 'katachi-ergonomics' ),
			'description' => __( 'Sections for a workplace ergonomics consultancy: a full-bleed photograph with a docked white card, three abutting columns with arrow tiles, offset photograph rows with an overlapping card or a notch, a parallax band, a fee table and field notes.', 'katachi-ergonomics' ),
		)
	);
}
add_action( 'init', 'katachi_ergonomics_pattern_categories' );
