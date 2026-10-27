<?php
/**
 * Komugi School — functions and definitions.
 *
 * @package komugi-school
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KOMUGI_SCHOOL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function komugi_school_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'komugi_school_setup' );

/**
 * Front-end styles and the scroll-effects script (in the head, not deferred, so the reveal states are set before first paint).
 */
function komugi_school_enqueue() {
	wp_enqueue_style( 'komugi-school-style', get_stylesheet_uri(), array(), KOMUGI_SCHOOL_VERSION );
	wp_enqueue_style( 'komugi-school-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'komugi-school-style' ), KOMUGI_SCHOOL_VERSION );
	wp_enqueue_script( 'komugi-school-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KOMUGI_SCHOOL_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'komugi_school_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function komugi_school_block_styles() {
	$styles = array(
		'core/button'    => array(
			'pill' => __( 'Outline pill', 'komugi-school' ),
		),
		'core/paragraph' => array(
			'chip'      => __( 'Outline chip', 'komugi-school' ),
			'chip-fill' => __( 'Filled chip', 'komugi-school' ),
			'lead'      => __( 'Lead paragraph', 'komugi-school' ),
		),
	);
	foreach ( $styles as $block => $variations ) {
		foreach ( $variations as $name => $label ) {
			register_block_style( $block, array( 'name' => $name, 'label' => $label ) );
		}
	}
}
add_action( 'init', 'komugi_school_block_styles' );

/**
 * Pattern category.
 */
function komugi_school_pattern_categories() {
	register_block_pattern_category(
		'komugi-school',
		array(
			'label'       => __( 'Komugi School', 'komugi-school' ),
			'description' => __( 'Sections for a professional bakery school: the chip bar over a bleeding bench photograph, hairline day rows with 4:3 thumbnails, two opposite-direction name tickers and a fee list.', 'komugi-school' ),
		)
	);
}
add_action( 'init', 'komugi_school_pattern_categories' );
