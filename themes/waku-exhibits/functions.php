<?php
/**
 * Waku Exhibits — functions and definitions.
 *
 * @package waku-exhibits
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'WAKU_EXHIBITS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function waku_exhibits_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'waku_exhibits_setup' );

/**
 * Front-end styles and the small scroll-effect script. The script loads in the head (not deferred) so the
 * hidden start state of the reveals is set before the first paint; without it everything stays visible.
 */
function waku_exhibits_enqueue() {
	wp_enqueue_style( 'waku-exhibits-style', get_stylesheet_uri(), array(), WAKU_EXHIBITS_VERSION );
	wp_enqueue_style( 'waku-exhibits-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), WAKU_EXHIBITS_VERSION );
	wp_enqueue_script( 'waku-exhibits-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), WAKU_EXHIBITS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'waku_exhibits_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function waku_exhibits_block_styles() {
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'lead',
			'label' => __( 'Lead paragraph', 'waku-exhibits' ),
		)
	);
}
add_action( 'init', 'waku_exhibits_block_styles' );

/**
 * Pattern category.
 */
function waku_exhibits_pattern_categories() {
	register_block_pattern_category(
		'waku-exhibits',
		array(
			'label'       => __( 'Waku Exhibits', 'waku-exhibits' ),
			'description' => __( 'Sections for an exhibition stand builder: the full-bleed hall hero, the photo-filled statement, the edge-flush hall rows, the planning hour, the price table, the stories and the two-card quote band.', 'waku-exhibits' ),
		)
	);
}
add_action( 'init', 'waku_exhibits_pattern_categories' );
