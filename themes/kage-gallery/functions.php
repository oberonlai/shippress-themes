<?php
/**
 * Kage Gallery — functions and definitions.
 *
 * @package kage-gallery
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'KAGE_GALLERY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function kage_gallery_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'kage_gallery_setup' );

/**
 * Front-end styles and one small script: it moves the synced visit details into the full-screen menu, keeps the Menu
 * button's aria-expanded in step with it, and turns the Contact form into an email draft. The menu itself is the core
 * Navigation overlay (focus trap, Escape closes it, focus returns to the button).
 */
function kage_gallery_enqueue() {
	wp_enqueue_style( 'kage-gallery-style', get_stylesheet_uri(), array(), KAGE_GALLERY_VERSION );
	wp_enqueue_script(
		'kage-gallery',
		get_theme_file_uri( 'assets/js/kage.js' ),
		array(),
		KAGE_GALLERY_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'kage_gallery_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kage_gallery_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead'       => __( 'Lead paragraph', 'kage-gallery' ),
			'wall-label' => __( 'Wall label (artist, title, year, medium)', 'kage-gallery' ),
		),
		'core/image'     => array(
			'hung' => __( 'Hung work (a fine shadow edge under the frame)', 'kage-gallery' ),
		),
		'core/separator' => array(
			'shadow-edge' => __( 'Shadow edge (a hairline with a soft shadow beneath)', 'kage-gallery' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline underline', 'kage-gallery' ),
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
add_action( 'init', 'kage_gallery_block_styles' );

/**
 * Pattern category.
 */
function kage_gallery_pattern_categories() {
	register_block_pattern_category(
		'kage-gallery',
		array(
			'label'       => __( 'Kage Gallery', 'kage-gallery' ),
			'description' => __( 'Quiet sections for a small contemporary art gallery: the current exhibition as an oversized title, upcoming exhibitions, works with wall labels, artists, visit details, the journal, the newsletter and contact.', 'kage-gallery' ),
		)
	);
}
add_action( 'init', 'kage_gallery_pattern_categories' );
