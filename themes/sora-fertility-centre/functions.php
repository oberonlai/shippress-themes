<?php
/**
 * Sora Fertility Centre — functions and definitions.
 *
 * @package sora-fertility-centre
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'SORA_FERTILITY_CENTRE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared; without the plugin it does nothing.
 */
function sora_fertility_centre_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'sora_fertility_centre_setup' );

/**
 * Front-end styles and the small scroll script (in the head, not deferred, so html.sp-js is set before first paint).
 */
function sora_fertility_centre_enqueue() {
	wp_enqueue_style( 'sora-fertility-centre-style', get_stylesheet_uri(), array(), SORA_FERTILITY_CENTRE_VERSION );
	wp_enqueue_style( 'sora-fertility-centre-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'sora-fertility-centre-style' ), SORA_FERTILITY_CENTRE_VERSION );
	wp_enqueue_script( 'sora-fertility-centre-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SORA_FERTILITY_CENTRE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'sora_fertility_centre_enqueue' );

/**
 * Pattern category.
 */
function sora_fertility_centre_pattern_categories() {
	register_block_pattern_category(
		'sora-fertility-centre',
		array(
			'label'       => __( 'Sora Fertility Centre', 'sora-fertility-centre' ),
			'description' => __( 'Sections for a fertility clinic: the full-bleed cover, the FAQ on an arch field, the director letter on a tilted sheet, offset portrait bands, fees and the care team.', 'sora-fertility-centre' ),
		)
	);
}
add_action( 'init', 'sora_fertility_centre_pattern_categories' );
