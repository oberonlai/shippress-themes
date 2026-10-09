<?php
/**
 * Shashin Folio — functions and definitions.
 *
 * @package shashin-folio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';

define( 'SHASHIN_FOLIO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function shashin_folio_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'shashin_folio_setup' );

/**
 * Front-end styles.
 */
function shashin_folio_enqueue() {
	wp_enqueue_style( 'shashin-folio-style', get_stylesheet_uri(), array(), SHASHIN_FOLIO_VERSION );
}
add_action( 'wp_enqueue_scripts', 'shashin_folio_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function shashin_folio_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'caption-label' => __( 'Caption label (mono)', 'shashin-folio' ),
			'frame-number'  => __( 'Frame number', 'shashin-folio' ),
			'lead'          => __( 'Lead paragraph', 'shashin-folio' ),
		),
		'core/heading'   => array(
			'display-italic' => __( 'Display, italic', 'shashin-folio' ),
			'caption-label'  => __( 'Caption label (mono)', 'shashin-folio' ),
		),
		'core/group'     => array(
			'film-strip' => __( 'Film strip (sprocket edges)', 'shashin-folio' ),
			'plate'      => __( 'Plate (hairline frame)', 'shashin-folio' ),
		),
		'core/image'     => array(
			'still'      => __( 'Film still (caption below, slow fade)', 'shashin-folio' ),
			'letterbox'  => __( 'Letterbox (2.39:1 crop)', 'shashin-folio' ),
			'print'      => __( 'Print (white border)', 'shashin-folio' ),
		),
		'core/separator' => array(
			'frame-tick' => __( 'Frame tick', 'shashin-folio' ),
			'long-ma'    => __( 'Long pause (empty space)', 'shashin-folio' ),
		),
		'core/button'    => array(
			'arrow-link' => __( 'Arrow link', 'shashin-folio' ),
		),
		'core/table'     => array(
			'index' => __( 'Series index', 'shashin-folio' ),
		),
		'core/list'      => array(
			'credits' => __( 'Credits list', 'shashin-folio' ),
		),
		'core/quote'     => array(
			'subtitle' => __( 'Subtitle (centred)', 'shashin-folio' ),
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
add_action( 'init', 'shashin_folio_block_styles' );

/**
 * Pattern category.
 */
function shashin_folio_pattern_categories() {
	register_block_pattern_category(
		'shashin-folio',
		array(
			'label'       => __( 'Shashin Folio', 'shashin-folio' ),
			'description' => __( 'Cinematic sections for a photographer: stills, series, film strips, captions, commissions and contact.', 'shashin-folio' ),
		)
	);
}
add_action( 'init', 'shashin_folio_pattern_categories' );
