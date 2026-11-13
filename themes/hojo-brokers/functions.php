<?php
/**
 * Hojo Brokers — functions and definitions.
 *
 * @package hojo-brokers
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'HOJO_BROKERS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hojo_brokers_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hojo_brokers_setup' );

/**
 * Front-end assets: theme stylesheet, then scroll effects (CSS and JS in the head, JS not deferred).
 */
function hojo_brokers_enqueue() {
	wp_enqueue_style( 'hojo-brokers-style', get_stylesheet_uri(), array(), HOJO_BROKERS_VERSION );
	wp_enqueue_style( 'hojo-brokers-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'hojo-brokers-style' ), HOJO_BROKERS_VERSION );
	wp_enqueue_script( 'hojo-brokers-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HOJO_BROKERS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'hojo_brokers_enqueue' );

/**
 * Pattern category.
 */
function hojo_brokers_pattern_categories() {
	register_block_pattern_category(
		'hojo-brokers',
		array(
			'label'       => __( 'Hojo Brokers', 'hojo-brokers' ),
			'description' => __( 'Sections for an independent insurance broker: the wedge head and photo hero, the two-tab cover index, the three flush review steps and the yard strip.', 'hojo-brokers' ),
		)
	);
}
add_action( 'init', 'hojo_brokers_pattern_categories' );

/**
 * Label the mobile menu button with a real (translatable) word instead of CSS-generated text.
 */
function hojo_brokers_menu_button_label( $html ) {
	return preg_replace(
		'/(<button[^>]*wp-block-navigation__responsive-container-open[^>]*>)(.*?)(<\/button>)/s',
		'$1$2<span class="hb-menu-label">' . esc_html__( 'Menu', 'hojo-brokers' ) . '</span>$3',
		$html
	);
}
add_filter( 'render_block_core/navigation', 'hojo_brokers_menu_button_label' );
