<?php
/**
 * Azukari Stays: functions and definitions.
 *
 * @package azukari-stays
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'AZUKARI_STAYS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (the scroll styles show their final state inside the editor).
 */
function azukari_stays_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'assets/sp-scroll.css' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'azukari_stays_setup' );

/**
 * Front-end styles and the scroll script (in the head, not deferred, so the reveal states are set before first paint).
 */
function azukari_stays_enqueue() {
	wp_enqueue_style( 'azukari-stays-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), AZUKARI_STAYS_VERSION );
	wp_enqueue_style( 'azukari-stays-style', get_stylesheet_uri(), array( 'azukari-stays-scroll' ), AZUKARI_STAYS_VERSION );
	wp_enqueue_script( 'azukari-stays-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), AZUKARI_STAYS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'azukari_stays_enqueue' );

/**
 * Pattern category.
 */
function azukari_stays_pattern_categories() {
	register_block_pattern_category(
		'azukari-stays',
		array(
			'label'       => __( 'Azukari Stays', 'azukari-stays' ),
			'description' => __( 'Sections for a holiday-let manager: the diagonal first screen, loose photo field, five stage chapters, line floor plan with room tabs, home photo strip, fee sheet, owner cards and a consultation band.', 'azukari-stays' ),
		)
	);
}
add_action( 'init', 'azukari_stays_pattern_categories' );
