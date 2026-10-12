<?php
/**
 * Mimi Veterinary — functions and definitions.
 *
 * @package mimi-veterinary
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/clinic-info.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'MIMI_VETERINARY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function mimi_veterinary_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'mimi_veterinary_setup' );

/**
 * Front-end styles.
 */
function mimi_veterinary_enqueue() {
	wp_enqueue_style( 'mimi-veterinary-style', get_stylesheet_uri(), array(), MIMI_VETERINARY_VERSION );
}
add_action( 'wp_enqueue_scripts', 'mimi_veterinary_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function mimi_veterinary_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small spaced capitals after three paw dots)', 'mimi-veterinary' ),
			'lead'  => __( 'Lead paragraph', 'mimi-veterinary' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a soft underline', 'mimi-veterinary' ),
			'fill'      => __( 'Deep teal pill button', 'mimi-veterinary' ),
			'light'     => __( 'Mist pill button (on the dark band)', 'mimi-veterinary' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairlines between items)', 'mimi-veterinary' ),
		),
		'core/details'   => array(
			'faq' => __( 'Question (hairline and a plus sign)', 'mimi-veterinary' ),
		),
		'core/table'     => array(
			'hours' => __( 'Opening hours (ticks and dashes centred)', 'mimi-veterinary' ),
			'fees'  => __( 'Fees (prices on the right, hairlines)', 'mimi-veterinary' ),
		),
		'core/separator' => array(
			'paw' => __( 'Paw dots (a quiet centred divider)', 'mimi-veterinary' ),
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
add_action( 'init', 'mimi_veterinary_block_styles' );

/**
 * Pattern category.
 */
function mimi_veterinary_pattern_categories() {
	register_block_pattern_category(
		'mimi-veterinary',
		array(
			'label'       => __( 'Mimi Veterinary', 'mimi-veterinary' ),
			'description' => __( 'Calm sections for a neighbourhood veterinary clinic: a map-first home page with a locator card, care promises, services, the vets, first-visit steps, fees, journal and contact.', 'mimi-veterinary' ),
		)
	);
}
add_action( 'init', 'mimi_veterinary_pattern_categories' );
