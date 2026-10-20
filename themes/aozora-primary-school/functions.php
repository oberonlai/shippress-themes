<?php
/**
 * Aozora Primary School — functions and definitions.
 *
 * @package aozora-primary-school
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'AOZORA_PRIMARY_SCHOOL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function aozora_primary_school_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'aozora_primary_school_setup' );

/**
 * Front-end styles.
 */
function aozora_primary_school_enqueue() {
	wp_enqueue_style( 'aozora-primary-school-style', get_stylesheet_uri(), array(), AOZORA_PRIMARY_SCHOOL_VERSION );
}
add_action( 'wp_enqueue_scripts', 'aozora_primary_school_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function aozora_primary_school_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small capitals after a lane-line dash)', 'aozora-primary-school' ),
			'lead'  => __( 'Lead paragraph', 'aozora-primary-school' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with an arrow', 'aozora-primary-school' ),
			'outline'   => __( 'Quiet outline button', 'aozora-primary-school' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairline between items)', 'aozora-primary-school' ),
		),
		'core/table'     => array(
			'fees' => __( 'Fees (ruled, tabular figures)', 'aozora-primary-school' ),
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
add_action( 'init', 'aozora_primary_school_block_styles' );

/**
 * Pattern category.
 */
function aozora_primary_school_pattern_categories() {
	register_block_pattern_category(
		'aozora-primary-school',
		array(
			'label'       => __( 'Aozora Primary School', 'aozora-primary-school' ),
			'description' => __( 'Quiet, photograph-led sections for an independent business hotel: the room at first light, six steps from the platform to checkout, rooms and rates, the price table, the people behind the desk, journal and contact.', 'aozora-primary-school' ),
		)
	);
}
add_action( 'init', 'aozora_primary_school_pattern_categories' );
