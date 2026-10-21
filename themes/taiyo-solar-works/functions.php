<?php
/**
 * Taiyo Solar Works: functions and definitions.
 *
 * @package taiyo-solar-works
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'TAIYO_SOLAR_WORKS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles.
 */
function taiyo_solar_works_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'taiyo_solar_works_setup' );

/**
 * Front-end styles.
 */
function taiyo_solar_works_enqueue() {
	wp_enqueue_style( 'taiyo-solar-works-style', get_stylesheet_uri(), array(), TAIYO_SOLAR_WORKS_VERSION );
}
add_action( 'wp_enqueue_scripts', 'taiyo_solar_works_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function taiyo_solar_works_block_styles() {
	$styles = array(
		'core/button' => array(
			'ground'    => __( 'Ground fill', 'taiyo-solar-works' ),
			'text-link' => __( 'Text link with an arrow', 'taiyo-solar-works' ),
		),
	);
	foreach ( $styles as $block => $variations ) {
		foreach ( $variations as $name => $label ) {
			register_block_style( $block, array( 'name' => $name, 'label' => $label ) );
		}
	}
}
add_action( 'init', 'taiyo_solar_works_block_styles' );

/**
 * Pattern category.
 */
function taiyo_solar_works_pattern_categories() {
	register_block_pattern_category(
		'taiyo-solar-works',
		array(
			'label'       => __( 'Taiyo Solar Works', 'taiyo-solar-works' ),
			'description' => __( 'Sections for a regional solar installation company: a split first screen, overlapping case circles, numeral case cards, a ruled price list and a roof assessment band.', 'taiyo-solar-works' ),
		)
	);
}
add_action( 'init', 'taiyo_solar_works_pattern_categories' );
