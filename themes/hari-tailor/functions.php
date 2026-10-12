<?php
/**
 * Hari Tailor — functions and definitions.
 *
 * @package hari-tailor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'HARI_TAILOR_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function hari_tailor_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'hari_tailor_setup' );

/**
 * Front-end styles.
 */
function hari_tailor_enqueue() {
	wp_enqueue_style( 'hari-tailor-style', get_stylesheet_uri(), array(), HARI_TAILOR_VERSION );
}
add_action( 'wp_enqueue_scripts', 'hari_tailor_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hari_tailor_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small spaced capitals after a chalk tick)', 'hari-tailor' ),
			'lead'  => __( 'Lead paragraph', 'hari-tailor' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline underline', 'hari-tailor' ),
			'fill'      => __( 'Navy wool button', 'hari-tailor' ),
			'rail'      => __( 'Outline button for the navy side rail', 'hari-tailor' ),
		),
		'core/list'      => array(
			'stitched' => __( 'Stitched list (dashed basting-thread rules)', 'hari-tailor' ),
		),
		'core/table'     => array(
			'hours' => __( 'Appointment hours (ruled, tabular figures)', 'hari-tailor' ),
		),
		'core/separator' => array(
			'chalk' => __( 'Chalk mark (a short dashed line with a cross)', 'hari-tailor' ),
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
add_action( 'init', 'hari_tailor_block_styles' );

/**
 * Pattern category.
 */
function hari_tailor_pattern_categories() {
	register_block_pattern_category(
		'hari-tailor',
		array(
			'label'       => __( 'Hari Tailor', 'hari-tailor' ),
			'description' => __( 'Quiet sections for a bespoke tailor: the atelier opening, the five-stage fitting timeline, cloth book swatch cards, appointment hours, the cutters, journal and contact.', 'hari-tailor' ),
		)
	);
}
add_action( 'init', 'hari_tailor_pattern_categories' );
