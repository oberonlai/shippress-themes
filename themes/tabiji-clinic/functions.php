<?php
/**
 * Tabiji Clinic: functions and definitions.
 *
 * @package tabiji-clinic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'TABIJI_CLINIC_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared but not required.
 */
function tabiji_clinic_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'tabiji_clinic_setup' );

/**
 * Front-end styles and the small scroll script (head, not deferred, so the hidden state never flashes).
 */
function tabiji_clinic_enqueue() {
	wp_enqueue_style( 'tabiji-clinic-style', get_stylesheet_uri(), array(), TABIJI_CLINIC_VERSION );
	wp_enqueue_style( 'tabiji-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'tabiji-clinic-style' ), TABIJI_CLINIC_VERSION );
	wp_enqueue_script( 'tabiji-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), TABIJI_CLINIC_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'tabiji_clinic_enqueue' );

/**
 * Pattern category.
 */
function tabiji_clinic_pattern_categories() {
	register_block_pattern_category(
		'tabiji-clinic',
		array(
			'label'       => __( 'Tabiji Clinic', 'tabiji-clinic' ),
			'description' => __( 'Sections for a travel vaccination clinic: the inset photo frame with a notch card, the statement flanked by stepped photo pairs, white journey cards on a pale band, feathered photo rows, the record band, the group band, fees and notes.', 'tabiji-clinic' ),
		)
	);
}
add_action( 'init', 'tabiji_clinic_pattern_categories' );
