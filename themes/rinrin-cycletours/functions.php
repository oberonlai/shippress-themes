<?php
/**
 * Rinrin Cycle Tours: functions and definitions.
 *
 * @package rinrin-cycletours
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'RINRIN_CYCLETOURS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function rinrin_cycletours_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'rinrin_cycletours_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function rinrin_cycletours_enqueue() {
	wp_enqueue_style( 'rinrin-cycletours-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), RINRIN_CYCLETOURS_VERSION );
	wp_enqueue_style( 'rinrin-cycletours-style', get_stylesheet_uri(), array( 'rinrin-cycletours-sp-scroll' ), RINRIN_CYCLETOURS_VERSION );
	wp_enqueue_script( 'rinrin-cycletours-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), RINRIN_CYCLETOURS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'rinrin_cycletours_enqueue' );

/**
 * Pattern category.
 */
function rinrin_cycletours_pattern_categories() {
	register_block_pattern_category(
		'rinrin-cycletours',
		array(
			'label'       => __( 'Rinrin Cycle Tours', 'rinrin-cycletours' ),
			'description' => __( 'Sections for a guided cycling tour operator: the quay hero, the departures strip, a riding day, bike hire and luggage strips, the grade ledger and the one way to book.', 'rinrin-cycletours' ),
		)
	);
}
add_action( 'init', 'rinrin_cycletours_pattern_categories' );
