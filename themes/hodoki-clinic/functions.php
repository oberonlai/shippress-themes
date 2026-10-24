<?php
/**
 * Hodoki Clinic — functions and definitions.
 *
 * @package hodoki-clinic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'HODOKI_CLINIC_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hodoki_clinic_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hodoki_clinic_setup' );

/**
 * Front-end styles and the scroll-effects script. sp-scroll.js loads in the head, not deferred, so the hidden state
 * is set before the first paint.
 */
function hodoki_clinic_enqueue() {
	wp_enqueue_style( 'hodoki-clinic-style', get_stylesheet_uri(), array(), HODOKI_CLINIC_VERSION );
	wp_enqueue_style( 'hodoki-clinic-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'hodoki-clinic-style' ), HODOKI_CLINIC_VERSION );
	wp_enqueue_script( 'hodoki-clinic-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HODOKI_CLINIC_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'hodoki_clinic_enqueue' );

/**
 * Pattern category.
 */
function hodoki_clinic_pattern_categories() {
	register_block_pattern_category(
		'hodoki-clinic',
		array(
			'label'       => __( 'Hodoki Clinic', 'hodoki-clinic' ),
			'description' => __( 'Sections for a physiotherapy clinic: a full-bleed photograph opening with an info bar, an arch-topped photograph beside a gradient label, a giant light-serif phrase with two bleeding photographs, tall photograph cards, a rounded parallax case band and a price list.', 'hodoki-clinic' ),
		)
	);
}
add_action( 'init', 'hodoki_clinic_pattern_categories' );
