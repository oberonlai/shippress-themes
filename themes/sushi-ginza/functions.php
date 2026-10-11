<?php
/**
 * Sushi Ginza — functions and definitions.
 *
 * @package sushi-ginza
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shop-info.php';

define( 'SUSHI_GINZA_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function sushi_ginza_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'sushi_ginza_setup' );

/**
 * Front-end styles.
 */
function sushi_ginza_enqueue() {
	wp_enqueue_style( 'sushi-ginza-style', get_stylesheet_uri(), array(), SUSHI_GINZA_VERSION );
}
add_action( 'wp_enqueue_scripts', 'sushi_ginza_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function sushi_ginza_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small spaced capitals after a coral hairline)', 'sushi-ginza' ),
			'lead'  => __( 'Lead paragraph', 'sushi-ginza' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline', 'sushi-ginza' ),
			'fill'      => __( 'Navy button', 'sushi-ginza' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairlines between items)', 'sushi-ginza' ),
		),
		'core/details'   => array(
			'faq' => __( 'Question (hairline and a plus sign)', 'sushi-ginza' ),
		),
	);

	foreach ( $styles as $block => $variations ) {
		foreach ( $variations as $name => $label ) {
			register_block_style(
				$block,
				array(
					'name'  => $name,
					'label' => $label,
				)
			);
		}
	}
}
add_action( 'init', 'sushi_ginza_block_styles' );

/**
 * Pattern category.
 */
function sushi_ginza_pattern_categories() {
	register_block_pattern_category(
		'sushi-ginza',
		array(
			'label'       => __( 'Sushi Ginza', 'sushi-ginza' ),
			'description' => __( 'Quiet sections for an omakase counter: a masthead-and-index home page, the course with its plate legend, the chef, booking, journal, newsletter and contact.', 'sushi-ginza' ),
		)
	);
}
add_action( 'init', 'sushi_ginza_pattern_categories' );
