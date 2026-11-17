<?php
/**
 * Kosame Hot Pot: functions and definitions.
 *
 * @package kosame-hotpot
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'KOSAME_HOTPOT_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kosame_hotpot_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kosame_hotpot_setup' );

/**
 * Front-end styles and scripts. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before the first
 * paint; without it every sp-* element stays visible.
 */
function kosame_hotpot_enqueue() {
	wp_enqueue_style( 'kosame-hotpot-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KOSAME_HOTPOT_VERSION );
	wp_enqueue_style( 'kosame-hotpot-style', get_stylesheet_uri(), array( 'kosame-hotpot-sp-scroll' ), KOSAME_HOTPOT_VERSION );
	wp_enqueue_script( 'kosame-hotpot-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KOSAME_HOTPOT_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kosame_hotpot_enqueue' );

/**
 * The photographs on the front page and pages load up front so none stays blank in the first screens.
 *
 * @param bool $default Whether lazy loading is on.
 * @return bool
 */
function kosame_hotpot_lazy_loading( $default ) {
	return ( is_front_page() || is_page() ) ? false : $default;
}
add_filter( 'wp_lazy_loading_enabled', 'kosame_hotpot_lazy_loading' );

/**
 * Pattern category.
 */
function kosame_hotpot_pattern_categories() {
	register_block_pattern_category(
		'kosame-hotpot',
		array(
			'label'       => __( 'Kosame Hot Pot', 'kosame-hotpot' ),
			'description' => __( 'Sections for a hot pot restaurant: a sticky half-screen photo stage, a paper column with vertical section headers, a four-line booking frame, link boxes, price and info tables, a parallax photograph band and a newsletter.', 'kosame-hotpot' ),
		)
	);
}
add_action( 'init', 'kosame_hotpot_pattern_categories' );
