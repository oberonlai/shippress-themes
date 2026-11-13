<?php
/**
 * Kaimon Fishmongers — functions and definitions.
 *
 * @package kaimon-fishmongers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'KAIMON_FISHMONGERS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kaimon_fishmongers_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kaimon_fishmongers_setup' );

/**
 * Front-end assets: theme stylesheet, then scroll effects (CSS and JS in the head, JS not deferred).
 */
function kaimon_fishmongers_enqueue() {
	wp_enqueue_style( 'kaimon-fishmongers-style', get_stylesheet_uri(), array(), KAIMON_FISHMONGERS_VERSION );
	wp_enqueue_style( 'kaimon-fishmongers-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kaimon-fishmongers-style' ), KAIMON_FISHMONGERS_VERSION );
	wp_enqueue_script( 'kaimon-fishmongers-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KAIMON_FISHMONGERS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kaimon_fishmongers_enqueue' );

/**
 * Pattern category.
 */
function kaimon_fishmongers_pattern_categories() {
	register_block_pattern_category(
		'kaimon-fishmongers',
		array(
			'label'       => __( 'Kaimon Fishmongers', 'kaimon-fishmongers' ),
			'description' => __( 'Sections for an independent fishmonger: the hanging catch, the landing index, the cut-to-order steps, the day strip and the kitchens.', 'kaimon-fishmongers' ),
		)
	);
}
add_action( 'init', 'kaimon_fishmongers_pattern_categories' );

/**
 * "Basket (n)" in the footer corner stack, only when WooCommerce is active.
 *
 * @return string
 */
function kaimon_fishmongers_basket_link() {
	if ( ! function_exists( 'WC' ) || ! WC()->cart ) {
		return '';
	}
	return '<a href="' . esc_url( wc_get_cart_url() ) . '">' . esc_html__( 'Basket', 'kaimon-fishmongers' ) . ' (' . (int) WC()->cart->get_cart_contents_count() . ')</a>';
}
