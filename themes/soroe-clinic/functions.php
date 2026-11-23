<?php
/**
 * Soroe Clinic: functions and definitions.
 *
 * @package soroe-clinic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'SOROE_CLINIC_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function soroe_clinic_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'soroe_clinic_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function soroe_clinic_enqueue() {
	wp_enqueue_style( 'soroe-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), SOROE_CLINIC_VERSION );
	wp_enqueue_style( 'soroe-clinic-style', get_stylesheet_uri(), array( 'soroe-clinic-sp-scroll' ), SOROE_CLINIC_VERSION );
	wp_enqueue_script( 'soroe-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SOROE_CLINIC_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'soroe_clinic_enqueue' );

/**
 * Pattern category.
 */
function soroe_clinic_pattern_categories() {
	register_block_pattern_category(
		'soroe-clinic',
		array(
			'label'       => __( 'Soroe Clinic', 'soroe-clinic' ),
			'description' => __( 'Sections for an orthodontic practice: a split photo-left hero with one thread line, a slate staircase band with corner-hung numerals, framed cells on a pale gutter, notice rows, fees and first-visit steps.', 'soroe-clinic' ),
		)
	);
}
add_action( 'init', 'soroe_clinic_pattern_categories' );
