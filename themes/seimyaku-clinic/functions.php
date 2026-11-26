<?php
/**
 * Seimyaku Clinic — functions and definitions.
 *
 * @package seimyaku-clinic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SEIMYAKU_CLINIC_VERSION', wp_get_theme()->get( 'Version' ) );

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

/**
 * Theme supports + editor styles (the scroll effects too, so the editor shows the final state).
 */
function seimyaku_clinic_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'seimyaku_clinic_setup' );

/**
 * Front-end styles and scripts. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before first paint.
 */
function seimyaku_clinic_enqueue() {
	wp_enqueue_style( 'seimyaku-clinic-style', get_stylesheet_uri(), array(), SEIMYAKU_CLINIC_VERSION );
	wp_enqueue_style( 'seimyaku-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'seimyaku-clinic-style' ), SEIMYAKU_CLINIC_VERSION );
	wp_enqueue_script( 'seimyaku-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SEIMYAKU_CLINIC_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'seimyaku_clinic_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function seimyaku_clinic_block_styles() {
	register_block_style( 'core/paragraph', array( 'name' => 'sz-chip', 'label' => __( 'Chip with a dot', 'seimyaku-clinic' ) ) );
	register_block_style( 'core/paragraph', array( 'name' => 'sz-meta', 'label' => __( 'Slashed meta line', 'seimyaku-clinic' ) ) );
}
add_action( 'init', 'seimyaku_clinic_block_styles' );

/**
 * Pattern category.
 */
function seimyaku_clinic_pattern_categories() {
	register_block_pattern_category(
		'seimyaku-clinic',
		array(
			'label'       => __( 'Seimyaku Clinic', 'seimyaku-clinic' ),
			'description' => __( 'Sections for a nephrology clinic: the full-bleed photograph with the headline below and a card row, the veil message cover, the sticky stack of chapter sheets, the ruled follow-up rows, the stories, the fee table and the letter.', 'seimyaku-clinic' ),
		)
	);
}
add_action( 'init', 'seimyaku_clinic_pattern_categories' );
