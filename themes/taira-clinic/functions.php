<?php
/**
 * Taira Clinic: functions and definitions.
 *
 * @package taira-clinic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'TAIRA_CLINIC_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function taira_clinic_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'taira_clinic_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function taira_clinic_enqueue() {
	wp_enqueue_style( 'taira-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), TAIRA_CLINIC_VERSION );
	wp_enqueue_style( 'taira-clinic-style', get_stylesheet_uri(), array( 'taira-clinic-sp-scroll' ), TAIRA_CLINIC_VERSION );
	wp_enqueue_script( 'taira-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), TAIRA_CLINIC_VERSION, false );
	wp_enqueue_script( 'taira-clinic-peek', get_theme_file_uri( 'assets/peek.js' ), array(), TAIRA_CLINIC_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'taira_clinic_enqueue' );

/**
 * Pattern category.
 */
function taira_clinic_pattern_categories() {
	register_block_pattern_category(
		'taira-clinic',
		array(
			'label'       => __( 'Taira Clinic', 'taira-clinic' ),
			'description' => __( 'Sections for a vestibular and balance clinic: a split hero with a docked finder box, a peeking plate-card symptom row, a narrative with a drifting photograph, a three-row method, one case and two flat booking blocks.', 'taira-clinic' ),
		)
	);
}
add_action( 'init', 'taira_clinic_pattern_categories' );
