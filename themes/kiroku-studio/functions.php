<?php
/**
 * Kiroku Studio — functions and definitions.
 *
 * @package kiroku-studio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/studio-info.php';
require_once get_template_directory() . '/inc/tracks.php';

define( 'KIROKU_STUDIO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function kiroku_studio_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'kiroku_studio_setup' );

/**
 * Front-end styles. No scripts: the reel, the marquee and every hover reveal are plain CSS.
 */
function kiroku_studio_enqueue() {
	wp_enqueue_style( 'kiroku-studio-style', get_stylesheet_uri(), array(), KIROKU_STUDIO_VERSION );
}
add_action( 'wp_enqueue_scripts', 'kiroku_studio_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kiroku_studio_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small capitals with a recording dot)', 'kiroku-studio' ),
			'lead'  => __( 'Lead paragraph', 'kiroku-studio' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Text link with an arrow', 'kiroku-studio' ),
		),
		'core/group'     => array(
			'light' => __( 'Light panel (black text on white)', 'kiroku-studio' ),
			'track' => __( 'Sideways track (scrolls horizontally, snaps to each item)', 'kiroku-studio' ),
		),
		'core/image'     => array(
			'reveal' => __( 'Reveal (grey until hovered)', 'kiroku-studio' ),
		),
		'core/list'      => array(
			'index' => __( 'Numbered index (01, 02, 03)', 'kiroku-studio' ),
			'dash'  => __( 'Dash list (green dashes)', 'kiroku-studio' ),
		),
		'core/details'   => array(
			'faq' => __( 'Question (plus sign)', 'kiroku-studio' ),
		),
		'core/separator' => array(
			'scan' => __( 'Scan line (with a green playhead)', 'kiroku-studio' ),
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
add_action( 'init', 'kiroku_studio_block_styles' );

/**
 * Pattern category.
 */
function kiroku_studio_pattern_categories() {
	register_block_pattern_category(
		'kiroku-studio',
		array(
			'label'       => __( 'Kiroku Studio', 'kiroku-studio' ),
			'description' => __( 'Sections for a creative studio: the sideways case-study reel, the work index and case studies, services and process, the team, the journal, the newsletter and contact.', 'kiroku-studio' ),
		)
	);
}
add_action( 'init', 'kiroku_studio_pattern_categories' );
