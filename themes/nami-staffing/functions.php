<?php
/**
 * Nami Staffing — functions and definitions.
 *
 * @package nami-staffing
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'NAMI_STAFFING_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function nami_staffing_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'nami_staffing_setup' );

/**
 * Front-end styles.
 */
function nami_staffing_enqueue() {
	wp_enqueue_style( 'nami-staffing-style', get_stylesheet_uri(), array(), NAMI_STAFFING_VERSION );
}
add_action( 'wp_enqueue_scripts', 'nami_staffing_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function nami_staffing_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small capitals after a lane-line dash)', 'nami-staffing' ),
			'lead'  => __( 'Lead paragraph', 'nami-staffing' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with an arrow', 'nami-staffing' ),
			'outline'   => __( 'Quiet outline button', 'nami-staffing' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairline between items)', 'nami-staffing' ),
		),
		'core/table'     => array(
			'fees' => __( 'Fees (ruled, tabular figures)', 'nami-staffing' ),
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
add_action( 'init', 'nami_staffing_block_styles' );

/**
 * Pattern category.
 */
function nami_staffing_pattern_categories() {
	register_block_pattern_category(
		'nami-staffing',
		array(
			'label'       => __( 'Nami Staffing', 'nami-staffing' ),
			'description' => __( 'Calm, photograph-led sections for a people-first staffing agency: two photographs around the opening line, two doors for employers and job seekers, the placement from brief to day thirty, consultants, fees in one paragraph, journal and contact.', 'nami-staffing' ),
		)
	);
}
add_action( 'init', 'nami_staffing_pattern_categories' );
