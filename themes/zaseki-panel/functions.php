<?php
/**
 * Zaseki Panel: functions and definitions.
 *
 * @package zaseki-panel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'ZASEKI_PANEL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function zaseki_panel_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'zaseki_panel_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function zaseki_panel_enqueue() {
	wp_enqueue_style( 'zaseki-panel-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), ZASEKI_PANEL_VERSION );
	wp_enqueue_style( 'zaseki-panel-style', get_stylesheet_uri(), array( 'zaseki-panel-sp-scroll' ), ZASEKI_PANEL_VERSION );
	wp_enqueue_script( 'zaseki-panel-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), ZASEKI_PANEL_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'zaseki_panel_enqueue' );

/**
 * Pattern category.
 */
function zaseki_panel_pattern_categories() {
	register_block_pattern_category(
		'zaseki-panel',
		array(
			'label'       => __( 'Zaseki Panel', 'zaseki-panel' ),
			'description' => __( 'Sections for a one-product hardware landing page: the three-column photo and solid panel hero with a tilted desk grid, the floor story, three numbered rows, the parallax band, the coloured tile directory, the install table, the price table, the dated lists and the stripe closing band.', 'zaseki-panel' ),
		)
	);
}
add_action( 'init', 'zaseki_panel_pattern_categories' );
