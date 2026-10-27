<?php
/**
 * Nemuri Clinic — functions and definitions.
 *
 * @package nemuri-clinic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'NEMURI_CLINIC_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function nemuri_clinic_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'nemuri_clinic_setup' );

/**
 * Front-end styles and the scroll-effects script (in the head, not deferred, so the reveal states are set before first paint).
 */
function nemuri_clinic_enqueue() {
	wp_enqueue_style( 'nemuri-clinic-style', get_stylesheet_uri(), array(), NEMURI_CLINIC_VERSION );
	wp_enqueue_style( 'nemuri-clinic-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'nemuri-clinic-style' ), NEMURI_CLINIC_VERSION );
	wp_enqueue_script( 'nemuri-clinic-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), NEMURI_CLINIC_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'nemuri_clinic_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function nemuri_clinic_block_styles() {
	register_block_style( 'core/paragraph', array( 'name' => 'more', 'label' => __( 'Underlined arrow link', 'nemuri-clinic' ) ) );
	register_block_style( 'core/paragraph', array( 'name' => 'label', 'label' => __( 'Tracked label', 'nemuri-clinic' ) ) );
}
add_action( 'init', 'nemuri_clinic_block_styles' );

/**
 * Pattern category.
 */
function nemuri_clinic_pattern_categories() {
	register_block_pattern_category(
		'nemuri-clinic',
		array(
			'label'       => __( 'Nemuri Clinic', 'nemuri-clinic' ),
			'description' => __( 'Sections for an evening sleep clinic: the offset rounded photo with a fused info bar, photo rows with underlined arrow buttons, half-disc headings, a sticky photo beside stage panels, a parallax room band, the people pair, the story row, the fee list and the visit block.', 'nemuri-clinic' ),
		)
	);
}
add_action( 'init', 'nemuri_clinic_pattern_categories' );
