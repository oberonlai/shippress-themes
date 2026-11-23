<?php
/**
 * Michikusa Lodge: functions and definitions.
 *
 * @package michikusa-lodge
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'MICHIKUSA_LODGE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function michikusa_lodge_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'michikusa_lodge_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function michikusa_lodge_enqueue() {
	wp_enqueue_style( 'michikusa-lodge-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), MICHIKUSA_LODGE_VERSION );
	wp_enqueue_style( 'michikusa-lodge-style', get_stylesheet_uri(), array( 'michikusa-lodge-sp-scroll' ), MICHIKUSA_LODGE_VERSION );
	wp_enqueue_script( 'michikusa-lodge-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), MICHIKUSA_LODGE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'michikusa_lodge_enqueue' );

/**
 * Pattern category.
 */
function michikusa_lodge_pattern_categories() {
	register_block_pattern_category(
		'michikusa-lodge',
		array(
			'label'       => __( 'Michikusa Lodge', 'michikusa-lodge' ),
			'description' => __( 'Sections for a trunk-road motor lodge: an inset double-exposure window with a docked booking bar, double-hairline section bands, a photo with stacked arrival lines, a circle photo and an amber line drawing, room ledgers, a price table and a dawn breakfast band.', 'michikusa-lodge' ),
		)
	);
}
add_action( 'init', 'michikusa_lodge_pattern_categories' );
