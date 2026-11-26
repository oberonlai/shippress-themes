<?php
/**
 * Fuchi Glazing: functions and definitions.
 *
 * @package fuchi-glazing
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'FUCHI_GLAZING_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function fuchi_glazing_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'fuchi_glazing_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function fuchi_glazing_enqueue() {
	wp_enqueue_style( 'fuchi-glazing-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), FUCHI_GLAZING_VERSION );
	wp_enqueue_style( 'fuchi-glazing-style', get_stylesheet_uri(), array( 'fuchi-glazing-sp-scroll' ), FUCHI_GLAZING_VERSION );
	wp_enqueue_script( 'fuchi-glazing-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), FUCHI_GLAZING_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'fuchi_glazing_enqueue' );

/**
 * Pattern category.
 */
function fuchi_glazing_pattern_categories() {
	register_block_pattern_category(
		'fuchi-glazing',
		array(
			'label'       => __( 'Fuchi Glazing', 'fuchi-glazing' ),
			'description' => __( 'Sections for a commercial glazing contractor: the diagonal-split hero with an info-bar, the survey plate, a ruled ledger of the job in order, a square catalogue, a parallax strip, asymmetric project masonry, a price table and one way to ask for a quote.', 'fuchi-glazing' ),
		)
	);
}
add_action( 'init', 'fuchi_glazing_pattern_categories' );
