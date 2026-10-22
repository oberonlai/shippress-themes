<?php
/**
 * Kanade International School — functions and definitions.
 *
 * @package kanade-international-school
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'KANADE_INTERNATIONAL_SCHOOL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared; without the plugin it does nothing.
 */
function kanade_international_school_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kanade_international_school_setup' );

/**
 * Front-end styles and the small scroll script (in the head, not deferred, so html.sp-js is set before first paint).
 */
function kanade_international_school_enqueue() {
	wp_enqueue_style( 'kanade-international-school-style', get_stylesheet_uri(), array(), KANADE_INTERNATIONAL_SCHOOL_VERSION );
	wp_enqueue_style( 'kanade-international-school-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kanade-international-school-style' ), KANADE_INTERNATIONAL_SCHOOL_VERSION );
	wp_enqueue_script( 'kanade-international-school-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KANADE_INTERNATIONAL_SCHOOL_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kanade_international_school_enqueue' );

/**
 * Block style variation for buttons: a plain text link with an arrow.
 */
function kanade_international_school_block_styles() {
	register_block_style(
		'core/button',
		array(
			'name'  => 'text-link',
			'label' => __( 'Text link', 'kanade-international-school' ),
		)
	);
}
add_action( 'init', 'kanade_international_school_block_styles' );

/**
 * Pattern category.
 */
function kanade_international_school_pattern_categories() {
	register_block_pattern_category(
		'kanade-international-school',
		array(
			'label'       => __( 'Kanade International School', 'kanade-international-school' ),
			'description' => __( 'Sections for an international school: the hero photograph with a curved bite and three gateways, the programme mosaic, calendar cards with a date badge, the day strip, fees, people, stories and the visit block.', 'kanade-international-school' ),
		)
	);
}
add_action( 'init', 'kanade_international_school_pattern_categories' );
