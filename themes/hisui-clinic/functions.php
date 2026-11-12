<?php
/**
 * Hisui Clinic: functions and definitions.
 *
 * @package hisui-clinic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'HISUI_CLINIC_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hisui_clinic_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hisui_clinic_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before
 * the first paint; without it every sp-* element stays visible.
 */
function hisui_clinic_enqueue() {
	wp_enqueue_style( 'hisui-clinic-style', get_stylesheet_uri(), array(), HISUI_CLINIC_VERSION );
	wp_enqueue_style( 'hisui-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), HISUI_CLINIC_VERSION );
	wp_enqueue_script( 'hisui-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HISUI_CLINIC_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'hisui_clinic_enqueue' );

/**
 * Pattern category.
 */
function hisui_clinic_pattern_categories() {
	register_block_pattern_category(
		'hisui-clinic',
		array(
			'label'       => __( 'Hisui Clinic', 'hisui-clinic' ),
			'description' => __( 'Sections for an endocrinology and diabetes clinic: the rule-split photo window with its three-row index, the flat department band with ruled tabs, the tinted plan ledger and the audience-tagged news rows.', 'hisui-clinic' ),
		)
	);
}
add_action( 'init', 'hisui_clinic_pattern_categories' );
