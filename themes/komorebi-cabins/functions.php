<?php
/**
 * Komorebi Cabins: functions and definitions.
 *
 * @package komorebi-cabins
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'KOMOREBI_CABINS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function komorebi_cabins_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'komorebi_cabins_setup' );

/**
 * Front-end styles and the small scroll script (head, not deferred, so the hidden states exist before first paint).
 */
function komorebi_cabins_enqueue() {
	wp_enqueue_style( 'komorebi-cabins-style', get_stylesheet_uri(), array(), KOMOREBI_CABINS_VERSION );
	wp_enqueue_style( 'komorebi-cabins-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'komorebi-cabins-style' ), KOMOREBI_CABINS_VERSION );
	wp_enqueue_script( 'komorebi-cabins-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KOMOREBI_CABINS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'komorebi_cabins_enqueue' );

/**
 * Pattern category.
 */
function komorebi_cabins_pattern_categories() {
	register_block_pattern_category(
		'komorebi-cabins',
		array(
			'label'       => __( 'Komorebi Cabins', 'komorebi-cabins' ),
			'description' => __( 'Sections for a forest cabin village: the gutter hero, the mosaic over a blurred canopy, the cabin comparison, the Inside row and the Woodshed Letter.', 'komorebi-cabins' ),
		)
	);
}
add_action( 'init', 'komorebi_cabins_pattern_categories' );
