<?php
/**
 * Hada Dermatology — functions and definitions.
 *
 * @package hada-dermatology
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';

define( 'HADA_DERMATOLOGY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function hada_dermatology_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'hada_dermatology_setup' );

/**
 * Front-end styles.
 */
function hada_dermatology_enqueue() {
	wp_enqueue_style( 'hada-dermatology-style', get_stylesheet_uri(), array(), HADA_DERMATOLOGY_VERSION );
}
add_action( 'wp_enqueue_scripts', 'hada_dermatology_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hada_dermatology_block_styles() {
	$styles = array(
		'core/button' => array(
			'pill'      => __( 'Ink pill', 'hada-dermatology' ),
			'round'     => __( 'Round list button', 'hada-dermatology' ),
			'text-link' => __( 'Text link with an arrow', 'hada-dermatology' ),
		),
	);
	foreach ( $styles as $block => $variations ) {
		foreach ( $variations as $name => $label ) {
			register_block_style( $block, array( 'name' => $name, 'label' => $label ) );
		}
	}
}
add_action( 'init', 'hada_dermatology_block_styles' );

/**
 * Pattern category.
 */
function hada_dermatology_pattern_categories() {
	register_block_pattern_category(
		'hada-dermatology',
		array(
			'label'       => __( 'Hada Dermatology', 'hada-dermatology' ),
			'description' => __( 'Calm sections for a community dermatology clinic: an inset hero print, a signed letter, a numbered conditions index, chapter bands, doctors as rows, fees and booking.', 'hada-dermatology' ),
		)
	);
}
add_action( 'init', 'hada_dermatology_pattern_categories' );
