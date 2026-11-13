<?php
/**
 * Kaze Clinic: functions and definitions.
 *
 * @package kaze-clinic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'KAZE_CLINIC_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kaze_clinic_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kaze_clinic_setup' );

/**
 * Front-end styles and scripts. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before the first
 * paint; without it every sp-* element stays visible.
 */
function kaze_clinic_enqueue() {
	wp_enqueue_style( 'kaze-clinic-style', get_stylesheet_uri(), array(), KAZE_CLINIC_VERSION );
	wp_enqueue_style( 'kaze-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KAZE_CLINIC_VERSION );
	wp_enqueue_script( 'kaze-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KAZE_CLINIC_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kaze_clinic_enqueue' );

/**
 * The home page photographs sit under the fold and in cross-fading slides: load them all up front so none stays blank.
 *
 * @param bool $default Whether lazy loading is on.
 * @return bool
 */
function kaze_clinic_lazy_loading( $default ) {
	return ( is_front_page() || is_page() ) ? false : $default;
}
add_filter( 'wp_lazy_loading_enabled', 'kaze_clinic_lazy_loading' );

/**
 * Pattern category.
 */
function kaze_clinic_pattern_categories() {
	register_block_pattern_category(
		'kaze-clinic',
		array(
			'label'       => __( 'Kaze Clinic', 'kaze-clinic' ),
			'description' => __( 'Sections for a respiratory medicine clinic: a washed full-bleed hero that insets on scroll, a colour-flip lead statement, plain-language titles with clinical subtitles, method rows, a proof card, fees, hours, journal and a newsletter slot.', 'kaze-clinic' ),
		)
	);
}
add_action( 'init', 'kaze_clinic_pattern_categories' );
