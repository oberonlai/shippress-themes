<?php
/**
 * Suji Clinic — functions and definitions.
 *
 * @package suji-clinic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'SUJI_CLINIC_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function suji_clinic_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'suji_clinic_setup' );

/**
 * Front-end styles and the small scroll-effects script (in <head>, not deferred, so the hidden state is set before first paint).
 */
function suji_clinic_enqueue() {
	wp_enqueue_style( 'suji-clinic-style', get_stylesheet_uri(), array(), SUJI_CLINIC_VERSION );
	wp_enqueue_style( 'suji-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'suji-clinic-style' ), SUJI_CLINIC_VERSION );
	wp_enqueue_script( 'suji-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SUJI_CLINIC_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'suji_clinic_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function suji_clinic_block_styles() {
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'lead',
			'label' => __( 'Lead paragraph', 'suji-clinic' ),
		)
	);
}
add_action( 'init', 'suji_clinic_block_styles' );

/**
 * Pattern category.
 */
function suji_clinic_pattern_categories() {
	register_block_pattern_category(
		'suji-clinic',
		array(
			'label'       => __( 'Suji Clinic', 'suji-clinic' ),
			'description' => __( 'Sections for a sports medicine clinic: the twin photo hero with a notice card, the problem statement, the injury grid with offset lines, the three diagonal method bands, the parallax proof panel, the room, fees and hours.', 'suji-clinic' ),
		)
	);
}
add_action( 'init', 'suji_clinic_pattern_categories' );
