<?php
/**
 * Hone Orthopedics — functions and definitions.
 *
 * @package hone-orthopedics
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'HONE_ORTHOPEDICS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles.
 */
function hone_orthopedics_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'hone_orthopedics_setup' );

/**
 * Front-end styles. No script is needed.
 */
function hone_orthopedics_enqueue() {
	wp_enqueue_style( 'hone-orthopedics-style', get_stylesheet_uri(), array(), HONE_ORTHOPEDICS_VERSION );
}
add_action( 'wp_enqueue_scripts', 'hone_orthopedics_enqueue' );

/**
 * Pattern category.
 */
function hone_orthopedics_pattern_categories() {
	register_block_pattern_category(
		'hone-orthopedics',
		array(
			'label'       => __( 'Hone Orthopedics', 'hone-orthopedics' ),
			'description' => __( 'Sections for an orthopedic clinic: the rounded portrait strip, the joint finder, notch-arrow photo cards, the specialist directory, the hours dot grid and the fee card.', 'hone-orthopedics' ),
		)
	);
}
add_action( 'init', 'hone_orthopedics_pattern_categories' );
