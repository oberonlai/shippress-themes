<?php
/**
 * Hokuto Driving School — functions and definitions.
 *
 * @package hokuto-driving-school
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'HOKUTO_DRIVING_SCHOOL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function hokuto_driving_school_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'hokuto_driving_school_setup' );

/**
 * Front-end styles.
 */
function hokuto_driving_school_enqueue() {
	wp_enqueue_style( 'hokuto-driving-school-style', get_stylesheet_uri(), array(), HOKUTO_DRIVING_SCHOOL_VERSION );
}
add_action( 'wp_enqueue_scripts', 'hokuto_driving_school_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hokuto_driving_school_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small capitals after a lane-line dash)', 'hokuto-driving-school' ),
			'lead'  => __( 'Lead paragraph', 'hokuto-driving-school' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with an arrow', 'hokuto-driving-school' ),
			'outline'   => __( 'Quiet outline button', 'hokuto-driving-school' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairline between items)', 'hokuto-driving-school' ),
		),
		'core/table'     => array(
			'fees' => __( 'Fees (ruled, tabular figures)', 'hokuto-driving-school' ),
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
add_action( 'init', 'hokuto_driving_school_block_styles' );

/**
 * Pattern category.
 */
function hokuto_driving_school_pattern_categories() {
	register_block_pattern_category(
		'hokuto-driving-school',
		array(
			'label'       => __( 'Hokuto Driving School', 'hokuto-driving-school' ),
			'description' => __( 'Quiet, photograph-led sections for a family driving school: the road opening, the route from yard to test day, courses and fees, instructors, journal and contact.', 'hokuto-driving-school' ),
		)
	);
}
add_action( 'init', 'hokuto_driving_school_pattern_categories' );
