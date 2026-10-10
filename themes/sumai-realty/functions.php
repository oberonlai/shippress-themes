<?php
/**
 * Sumai Realty — functions and definitions.
 *
 * @package sumai-realty
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/office-info.php';
require_once get_template_directory() . '/inc/directory.php';

define( 'SUMAI_REALTY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function sumai_realty_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'sumai_realty_setup' );

/**
 * Front-end styles and one small script: the listings directory's tabs and filter chips (assets/js/directory.js).
 * Without it the tabs are plain anchor links and the chips plain links the server filters by (inc/directory.php).
 */
function sumai_realty_enqueue() {
	wp_enqueue_style( 'sumai-realty-style', get_stylesheet_uri(), array(), SUMAI_REALTY_VERSION );
	wp_enqueue_script(
		'sumai-realty-directory',
		get_theme_file_uri( 'assets/js/directory.js' ),
		array(),
		SUMAI_REALTY_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'sumai_realty_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function sumai_realty_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small capitals with a sheet number)', 'sumai-realty' ),
			'lead'  => __( 'Lead paragraph', 'sumai-realty' ),
		),
		'core/separator' => array(
			'dimension' => __( 'Dimension line (with end ticks)', 'sumai-realty' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with an arrow', 'sumai-realty' ),
		),
		'core/group'     => array(
			'plan-frame' => __( 'Plan frame (wall lines and a door swing)', 'sumai-realty' ),
		),
		'core/image'     => array(
			'plan-frame' => __( 'Plan frame (corner ticks)', 'sumai-realty' ),
		),
		'core/table'     => array(
			'spec' => __( 'Spec sheet (ruled rows)', 'sumai-realty' ),
		),
		'core/list'      => array(
			'ticks' => __( 'Measured steps (numbered ticks)', 'sumai-realty' ),
			'dash'  => __( 'Dash list (brass dashes)', 'sumai-realty' ),
		),
		'core/details'   => array(
			'faq' => __( 'Question (plus sign)', 'sumai-realty' ),
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
add_action( 'init', 'sumai_realty_block_styles' );

/**
 * Pattern category.
 */
function sumai_realty_pattern_categories() {
	register_block_pattern_category(
		'sumai-realty',
		array(
			'label'       => __( 'Sumai Realty', 'sumai-realty' ),
			'description' => __( 'Sections for an estate agent: the listings directory, listing sheets with spec tables and floor plans, market numbers, the agents, the journal, the newsletter and contact.', 'sumai-realty' ),
		)
	);
}
add_action( 'init', 'sumai_realty_pattern_categories' );
