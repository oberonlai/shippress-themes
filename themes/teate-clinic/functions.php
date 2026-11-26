<?php
/**
 * Teate Clinic: functions and definitions.
 *
 * @package teate-clinic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'TEATE_CLINIC_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function teate_clinic_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'teate_clinic_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function teate_clinic_enqueue() {
	wp_enqueue_style( 'teate-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), TEATE_CLINIC_VERSION );
	wp_enqueue_style( 'teate-clinic-style', get_stylesheet_uri(), array( 'teate-clinic-sp-scroll' ), TEATE_CLINIC_VERSION );
	wp_enqueue_script( 'teate-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), TEATE_CLINIC_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'teate_clinic_enqueue' );

/**
 * Pattern category.
 */
function teate_clinic_pattern_categories() {
	register_block_pattern_category(
		'teate-clinic',
		array(
			'label'       => __( 'Teate Clinic', 'teate-clinic' ),
			'description' => __( 'Sections for a two-clinician osteopathy clinic: the split hero with an info card and two entry boxes, the five-cell sheet, notices beside the hours ledger, the three complaints, the minutes ledger of the first hour, the room band, two clinicians, story rows, prices and the tile grid.', 'teate-clinic' ),
		)
	);
}
add_action( 'init', 'teate_clinic_pattern_categories' );
