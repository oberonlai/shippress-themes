<?php
/**
 * Kouhi Service — functions and definitions.
 *
 * @package kouhi-service
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/blocks.php';

define( 'KOUHI_SERVICE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; nothing in the theme needs it.
 */
function kouhi_service_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kouhi_service_setup' );

/**
 * Front-end styles and the scroll-effects script (head, not deferred, so html.sp-js is set before the first paint).
 */
function kouhi_service_enqueue() {
	wp_enqueue_style( 'kouhi-service-style', get_stylesheet_uri(), array(), KOUHI_SERVICE_VERSION );
	wp_enqueue_style( 'kouhi-service-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kouhi-service-style' ), KOUHI_SERVICE_VERSION );
	wp_enqueue_script( 'kouhi-service-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KOUHI_SERVICE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kouhi_service_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kouhi_service_block_styles() {
	register_block_style( 'core/paragraph', array( 'name' => 'lead', 'label' => __( 'Lead paragraph', 'kouhi-service' ) ) );
	register_block_style( 'core/button', array( 'name' => 'filled', 'label' => __( 'Filled', 'kouhi-service' ) ) );
}
add_action( 'init', 'kouhi_service_block_styles' );

/**
 * Pattern category.
 */
function kouhi_service_pattern_categories() {
	register_block_pattern_category(
		'kouhi-service',
		array(
			'label'       => __( 'Kouhi Service', 'kouhi-service' ),
			'description' => __( 'Sections for an office coffee service: the rounded photo banner with dash bars, way-finding tiles, the lifted centre card on a curved band, the sticky-photo service list, the stories band, the dated tasting calendar under pill tabs, the price table, FAQ and the booking panel.', 'kouhi-service' ),
		)
	);
}
add_action( 'init', 'kouhi_service_pattern_categories' );
