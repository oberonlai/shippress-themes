<?php
/**
 * Tomari Marina — functions and definitions.
 *
 * @package tomari-marina
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'TOMARI_MARINA_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles (the theme stylesheet and the scroll effects, so the editor shows the final state).
 */
function tomari_marina_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'tomari_marina_setup' );

/**
 * Front-end styles and the small scroll script. The script loads in the head, not deferred, so the hidden state of a
 * reveal is set before the first paint; without it every section is simply visible.
 */
function tomari_marina_enqueue() {
	wp_enqueue_style( 'tomari-marina-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), TOMARI_MARINA_VERSION );
	wp_enqueue_style( 'tomari-marina-style', get_stylesheet_uri(), array( 'tomari-marina-sp-scroll' ), TOMARI_MARINA_VERSION );
	wp_enqueue_script( 'tomari-marina-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), TOMARI_MARINA_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'tomari_marina_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function tomari_marina_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small, with a short rule)', 'tomari-marina' ),
			'lead'  => __( 'Lead paragraph', 'tomari-marina' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with an arrow', 'tomari-marina' ),
		),
		'core/table'     => array(
			'fees' => __( 'Fees (hairline rows, nowrap prices)', 'tomari-marina' ),
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
add_action( 'init', 'tomari_marina_block_styles' );

/**
 * Pattern category.
 */
function tomari_marina_pattern_categories() {
	register_block_pattern_category(
		'tomari-marina',
		array(
			'label'       => __( 'Tomari Marina', 'tomari-marina' ),
			'description' => __( 'Sections for a small-boat marina: the first-light harbour photograph, the pinned three-step berth frame, the hairline harbour board with its open-today tab, the crew, the logbook and the booking close.', 'tomari-marina' ),
		)
	);
}
add_action( 'init', 'tomari_marina_pattern_categories' );
