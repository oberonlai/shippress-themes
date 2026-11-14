<?php
/**
 * Koori Cold Stores: functions and definitions.
 *
 * @package koori-coldstore
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'KOORI_COLDSTORE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function koori_coldstore_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'koori_coldstore_setup' );

/**
 * Front-end styles and scripts. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before the first
 * paint; without it every sp-* element stays visible. kc-pager.js only toggles the slideshow pause button.
 */
function koori_coldstore_enqueue() {
	wp_enqueue_style( 'koori-coldstore-style', get_stylesheet_uri(), array(), KOORI_COLDSTORE_VERSION );
	wp_enqueue_style( 'koori-coldstore-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KOORI_COLDSTORE_VERSION );
	wp_enqueue_script( 'koori-coldstore-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KOORI_COLDSTORE_VERSION, false );
	wp_enqueue_script( 'koori-coldstore-pager', get_theme_file_uri( 'assets/kc-pager.js' ), array(), KOORI_COLDSTORE_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'koori_coldstore_enqueue' );

/**
 * Hero slides and the photographs on the front page and pages load up front so none stays blank.
 *
 * @param bool $default Whether lazy loading is on.
 * @return bool
 */
function koori_coldstore_lazy_loading( $default ) {
	return ( is_front_page() || is_page() ) ? false : $default;
}
add_filter( 'wp_lazy_loading_enabled', 'koori_coldstore_lazy_loading' );

/**
 * Pattern category.
 */
function koori_coldstore_pattern_categories() {
	register_block_pattern_category(
		'koori-coldstore',
		array(
			'label'       => __( 'Koori Cold Stores', 'koori-coldstore' ),
			'description' => __( 'Sections for a regional cold store: a cross-fading dock hero with a ring pager and a tilted line, a room-log strip, a fading patina band with giant lowercase words and fused text-and-photo cards, a parallax dock band, a booking list, a sideways day strip, a rate table and a capacity enquiry block.', 'koori-coldstore' ),
		)
	);
}
add_action( 'init', 'koori_coldstore_pattern_categories' );
