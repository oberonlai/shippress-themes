<?php
/**
 * Hisagi Neurology — functions and definitions.
 *
 * @package hisagi-neurology
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'HISAGI_NEUROLOGY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hisagi_neurology_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hisagi_neurology_setup' );

/**
 * Front-end assets: theme stylesheet, then scroll effects (CSS and JS in the head, JS not deferred).
 */
function hisagi_neurology_enqueue() {
	wp_enqueue_style( 'hisagi-neurology-style', get_stylesheet_uri(), array(), HISAGI_NEUROLOGY_VERSION );
	wp_enqueue_style( 'hisagi-neurology-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'hisagi-neurology-style' ), HISAGI_NEUROLOGY_VERSION );
	wp_enqueue_script( 'hisagi-neurology-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HISAGI_NEUROLOGY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'hisagi_neurology_enqueue' );

/**
 * Pattern category.
 */
function hisagi_neurology_pattern_categories() {
	register_block_pattern_category(
		'hisagi-neurology',
		array(
			'label'       => __( 'Hisagi Neurology', 'hisagi-neurology' ),
			'description' => __( 'Sections for a neurology clinic: the stadium window with its capsule row, the pinned symptom disc, the principle cards, the before and after discs and the fees.', 'hisagi-neurology' ),
		)
	);
}
add_action( 'init', 'hisagi_neurology_pattern_categories' );

/**
 * Label the mobile menu button with a real (translatable) word instead of CSS-generated text.
 *
 * @param string $html Rendered navigation block.
 * @return string
 */
function hisagi_neurology_menu_button_label( $html ) {
	return preg_replace(
		'/(<button[^>]*wp-block-navigation__responsive-container-open[^>]*>)(.*?)(<\/button>)/s',
		'$1$2<span class="hn-menu-label">' . esc_html__( 'Menu', 'hisagi-neurology' ) . '</span>$3',
		$html
	);
}
add_filter( 'render_block_core/navigation', 'hisagi_neurology_menu_button_label' );

/**
 * Body class with the page slug, so a template rule can hide the booking card on the Book page.
 *
 * @param string[] $classes Body classes.
 * @return string[]
 */
function hisagi_neurology_body_class( $classes ) {
	if ( is_page() ) {
		$classes[] = 'hn-page-' . sanitize_html_class( get_post_field( 'post_name', get_queried_object_id() ) );
	}
	return $classes;
}
add_filter( 'body_class', 'hisagi_neurology_body_class' );
