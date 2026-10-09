<?php
/**
 * Kenchiku Grid — functions and definitions.
 *
 * @package kenchiku-grid
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';

define( 'KENCHIKU_GRID_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function kenchiku_grid_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'kenchiku_grid_setup' );

/**
 * Front-end styles.
 */
function kenchiku_grid_enqueue() {
	wp_enqueue_style( 'kenchiku-grid-style', get_stylesheet_uri(), array(), KENCHIKU_GRID_VERSION );
}
add_action( 'wp_enqueue_scripts', 'kenchiku_grid_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kenchiku_grid_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'mono-label'   => __( 'Mono label', 'kenchiku-grid' ),
			'index-number' => __( 'Index number', 'kenchiku-grid' ),
			'lead'         => __( 'Lead paragraph', 'kenchiku-grid' ),
		),
		'core/heading'   => array(
			'display-tight' => __( 'Display, tight', 'kenchiku-grid' ),
			'mono-label'    => __( 'Mono label', 'kenchiku-grid' ),
		),
		'core/group'     => array(
			'module'     => __( 'Numbered module (hairline + accent tick)', 'kenchiku-grid' ),
			'grid-lines' => __( 'Show 12-column grid lines', 'kenchiku-grid' ),
			'spec-card'  => __( 'Spec card (framed)', 'kenchiku-grid' ),
		),
		'core/image'     => array(
			'grid-frame' => __( 'Registration marks', 'kenchiku-grid' ),
		),
		'core/separator' => array(
			'accent-tick' => __( 'Accent tick', 'kenchiku-grid' ),
			'rule'        => __( 'Charcoal rule', 'kenchiku-grid' ),
		),
		'core/button'    => array(
			'arrow-link' => __( 'Arrow link', 'kenchiku-grid' ),
		),
		'core/table'     => array(
			'project-index' => __( 'Project index', 'kenchiku-grid' ),
			'spec-sheet'    => __( 'Spec sheet', 'kenchiku-grid' ),
		),
		'core/list'      => array(
			'index-list' => __( 'Numbered index', 'kenchiku-grid' ),
		),
		'core/quote'     => array(
			'pull' => __( 'Pull quote with marker', 'kenchiku-grid' ),
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
add_action( 'init', 'kenchiku_grid_block_styles' );

/**
 * Pattern category.
 */
function kenchiku_grid_pattern_categories() {
	register_block_pattern_category(
		'kenchiku-grid',
		array(
			'label'       => __( 'Kenchiku Grid', 'kenchiku-grid' ),
			'description' => __( 'Grid-based sections for an architecture studio: projects, index tables, studio facts and contact.', 'kenchiku-grid' ),
		)
	);
}
add_action( 'init', 'kenchiku_grid_pattern_categories' );
