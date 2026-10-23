<?php
/**
 * Hatsumei Patent Attorneys — functions and definitions.
 *
 * @package hatsumei-patent
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'HATSUMEI_PATENT_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function hatsumei_patent_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'hatsumei_patent_setup' );

/**
 * Front-end styles.
 */
function hatsumei_patent_enqueue() {
	wp_enqueue_style( 'hatsumei-patent-style', get_stylesheet_uri(), array(), HATSUMEI_PATENT_VERSION );
}
add_action( 'wp_enqueue_scripts', 'hatsumei_patent_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hatsumei_patent_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small capitals after a lane-line dash)', 'hatsumei-patent' ),
			'lead'  => __( 'Lead paragraph', 'hatsumei-patent' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with an arrow', 'hatsumei-patent' ),
			'outline'   => __( 'Quiet outline button', 'hatsumei-patent' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairline between items)', 'hatsumei-patent' ),
		),
		'core/table'     => array(
			'fees' => __( 'Fees (ruled, tabular figures)', 'hatsumei-patent' ),
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
add_action( 'init', 'hatsumei_patent_block_styles' );

/**
 * Pattern category.
 */
function hatsumei_patent_pattern_categories() {
	register_block_pattern_category(
		'hatsumei-patent',
		array(
			'label'       => __( 'Hatsumei Patent Attorneys', 'hatsumei-patent' ),
			'description' => __( 'Quiet, photograph-led sections for an independent business hotel: the room at first light, six steps from the platform to checkout, rooms and rates, the price table, the people behind the desk, journal and contact.', 'hatsumei-patent' ),
		)
	);
}
add_action( 'init', 'hatsumei_patent_pattern_categories' );
