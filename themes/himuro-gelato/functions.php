<?php
/**
 * Himuro Gelato: functions and definitions.
 *
 * @package himuro-gelato
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'HIMURO_GELATO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function himuro_gelato_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'himuro_gelato_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before
 * the first paint; without it every sp-* element stays visible.
 */
function himuro_gelato_enqueue() {
	wp_enqueue_style( 'himuro-gelato-style', get_stylesheet_uri(), array(), HIMURO_GELATO_VERSION );
	wp_enqueue_style( 'himuro-gelato-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), HIMURO_GELATO_VERSION );
	wp_enqueue_script( 'himuro-gelato-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HIMURO_GELATO_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'himuro_gelato_enqueue' );

/**
 * Pattern category.
 */
function himuro_gelato_pattern_categories() {
	register_block_pattern_category(
		'himuro-gelato',
		array(
			'label'       => __( 'Himuro Gelato', 'himuro-gelato' ),
			'description' => __( 'Sections for a small-batch gelato cafe: the photo that melts into paper, the pinned flavour viewer, the dark lit-row band, ruled people rows and the grain footer.', 'himuro-gelato' ),
		)
	);
}
add_action( 'init', 'himuro_gelato_pattern_categories' );
