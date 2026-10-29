<?php
/**
 * Shisei Clinic: functions and definitions.
 *
 * @package shisei-clinic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'SHISEI_CLINIC_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function shisei_clinic_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'shisei_clinic_setup' );

/**
 * Front-end styles, and the scroll-effect script in the head (not deferred, so html.sp-js is set before the first paint).
 */
function shisei_clinic_enqueue() {
	wp_enqueue_style( 'shisei-clinic-style', get_stylesheet_uri(), array(), SHISEI_CLINIC_VERSION );
	wp_enqueue_style( 'shisei-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'shisei-clinic-style' ), SHISEI_CLINIC_VERSION );
	wp_enqueue_script( 'shisei-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SHISEI_CLINIC_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'shisei_clinic_enqueue' );

/**
 * Block style variations for the pill buttons. All CSS lives in style.css.
 */
function shisei_clinic_block_styles() {
	$styles = array(
		'ss-pill-fill'    => __( 'Filled pill', 'shisei-clinic' ),
		'ss-pill-outline' => __( 'Outline pill (on photos)', 'shisei-clinic' ),
	);
	foreach ( $styles as $name => $label ) {
		register_block_style(
			'core/button',
			array(
				'name'  => $name,
				'label' => $label,
			)
		);
	}
}
add_action( 'init', 'shisei_clinic_block_styles' );

/**
 * Pattern category.
 */
function shisei_clinic_pattern_categories() {
	register_block_pattern_category(
		'shisei-clinic',
		array(
			'label'       => __( 'Shisei Clinic', 'shisei-clinic' ),
			'description' => __( 'Sections for a chiropractic clinic: the arch key visual, the concept, concerns, care panels, first visit, stories, clinicians, fees and the hours card.', 'shisei-clinic' ),
		)
	);
}
add_action( 'init', 'shisei_clinic_pattern_categories' );
