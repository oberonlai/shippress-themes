<?php
/**
 * Kataribe Partners — functions and definitions.
 *
 * @package kataribe-partners
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KATARIBE_PARTNERS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kataribe_partners_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kataribe_partners_setup' );

/**
 * Front-end styles and the scroll-effects script (head, not deferred, so html.sp-js is set before first paint).
 */
function kataribe_partners_enqueue() {
	wp_enqueue_style( 'kataribe-partners-style', get_stylesheet_uri(), array(), KATARIBE_PARTNERS_VERSION );
	wp_enqueue_style( 'kataribe-partners-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kataribe-partners-style' ), KATARIBE_PARTNERS_VERSION );
	wp_enqueue_script( 'kataribe-partners-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KATARIBE_PARTNERS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kataribe_partners_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kataribe_partners_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'outline-pill', 'label' => __( 'Outline pill with a long arrow', 'kataribe-partners' ) ) );
	register_block_style( 'core/paragraph', array( 'name' => 'lead', 'label' => __( 'Lead paragraph', 'kataribe-partners' ) ) );
}
add_action( 'init', 'kataribe_partners_block_styles' );

/**
 * Pattern category.
 */
function kataribe_partners_pattern_categories() {
	register_block_pattern_category(
		'kataribe-partners',
		array(
			'label'       => __( 'Kataribe Partners', 'kataribe-partners' ),
			'description' => __( 'Sections for a public-relations agency: the full-bleed cover with a docked card, the intro with media, the tick-cell brief grid, the five-day coverage strip, the figures band, stories, retainers, people and the request band.', 'kataribe-partners' ),
		)
	);
}
add_action( 'init', 'kataribe_partners_pattern_categories' );
