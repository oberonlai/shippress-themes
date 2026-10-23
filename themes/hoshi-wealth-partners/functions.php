<?php
/**
 * Hoshi Wealth Partners — functions and definitions.
 *
 * @package hoshi-wealth-partners
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'HOSHI_WEALTH_PARTNERS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared; without the plugin it does nothing.
 */
function hoshi_wealth_partners_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hoshi_wealth_partners_setup' );

/**
 * Front-end styles and the small scroll script (in the head, not deferred, so html.sp-js is set before first paint).
 */
function hoshi_wealth_partners_enqueue() {
	wp_enqueue_style( 'hoshi-wealth-partners-style', get_stylesheet_uri(), array(), HOSHI_WEALTH_PARTNERS_VERSION );
	wp_enqueue_style( 'hoshi-wealth-partners-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'hoshi-wealth-partners-style' ), HOSHI_WEALTH_PARTNERS_VERSION );
	wp_enqueue_script( 'hoshi-wealth-partners-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HOSHI_WEALTH_PARTNERS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'hoshi_wealth_partners_enqueue' );

/**
 * Pattern category.
 */
function hoshi_wealth_partners_pattern_categories() {
	register_block_pattern_category(
		'hoshi-wealth-partners',
		array(
			'label'       => __( 'Hoshi Wealth Partners', 'hoshi-wealth-partners' ),
			'description' => __( 'Sections for a fee-only wealth-management firm: the mixed-type headline over two framed photographs, the letters list, ruled partner rows on a dark band with a sticky chapter card, a parallax strip, the framed family story and the introductory meeting panel.', 'hoshi-wealth-partners' ),
		)
	);
}
add_action( 'init', 'hoshi_wealth_partners_pattern_categories' );
