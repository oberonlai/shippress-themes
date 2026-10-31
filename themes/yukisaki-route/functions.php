<?php
/**
 * Yukisaki Route: functions and definitions.
 *
 * @package yukisaki-route
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/blocks.php';

define( 'YUKISAKI_ROUTE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; nothing in the theme needs it.
 */
function yukisaki_route_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'yukisaki_route_setup' );

/**
 * Front-end styles, the scroll-effects script (head, not deferred, so html.sp-js is set before the first paint) and the
 * header script (footer; it only turns the transparent header into a floating card).
 */
function yukisaki_route_enqueue() {
	wp_enqueue_style( 'yukisaki-route-style', get_stylesheet_uri(), array(), YUKISAKI_ROUTE_VERSION );
	wp_enqueue_style( 'yukisaki-route-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'yukisaki-route-style' ), YUKISAKI_ROUTE_VERSION );
	wp_enqueue_script( 'yukisaki-route-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), YUKISAKI_ROUTE_VERSION, false );
	wp_enqueue_script( 'yukisaki-route-header', get_theme_file_uri( 'assets/header.js' ), array(), YUKISAKI_ROUTE_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
}
add_action( 'wp_enqueue_scripts', 'yukisaki_route_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function yukisaki_route_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'yr-tail', 'label' => __( 'Chevron tail', 'yukisaki-route' ) ) );
	register_block_style( 'core/paragraph', array( 'name' => 'yr-eyebrow', 'label' => __( 'Eyebrow', 'yukisaki-route' ) ) );
}
add_action( 'init', 'yukisaki_route_block_styles' );

/**
 * Pattern category.
 */
function yukisaki_route_pattern_categories() {
	register_block_pattern_category(
		'yukisaki-route',
		array(
			'label'       => __( 'Yukisaki Route', 'yukisaki-route' ),
			'description' => __( 'Sections for a delivery-route software landing page: a dimmed yard photograph with a drawn route line, white dossier cards, a frosted statement panel, ruled week rows, a parallax round-sheet band, a price table and one red chevron-tail call to action.', 'yukisaki-route' ),
		)
	);
}
add_action( 'init', 'yukisaki_route_pattern_categories' );
