<?php
/**
 * Hako Capsule: functions and definitions.
 *
 * @package hako-capsule
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'HAKO_CAPSULE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hako_capsule_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hako_capsule_setup' );

/**
 * Front-end styles and scripts. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before the first
 * paint; without it every sp-* element stays visible.
 */
function hako_capsule_enqueue() {
	wp_enqueue_style( 'hako-capsule-style', get_stylesheet_uri(), array(), HAKO_CAPSULE_VERSION );
	wp_enqueue_style( 'hako-capsule-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), HAKO_CAPSULE_VERSION );
	wp_enqueue_script( 'hako-capsule-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HAKO_CAPSULE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'hako_capsule_enqueue' );

/**
 * The photographs on the front page and pages load up front so none stays blank in the first screens.
 *
 * @param bool $default Whether lazy loading is on.
 * @return bool
 */
function hako_capsule_lazy_loading( $default ) {
	return ( is_front_page() || is_page() ) ? false : $default;
}
add_filter( 'wp_lazy_loading_enabled', 'hako_capsule_lazy_loading' );

/**
 * Pattern category.
 */
function hako_capsule_pattern_categories() {
	register_block_pattern_category(
		'hako-capsule',
		array(
			'label'       => __( 'Hako Capsule', 'hako-capsule' ),
			'description' => __( 'Sections for a station-front capsule hotel: a framed header with a hanging booking slab, a full-bleed stage photograph with a Tonight card, a five-cell pod wall, a comparison table, notched numeral cards and ruled house rules.', 'hako-capsule' ),
		)
	);
}
add_action( 'init', 'hako_capsule_pattern_categories' );
