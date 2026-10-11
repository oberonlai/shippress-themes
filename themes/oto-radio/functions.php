<?php
/**
 * Oto Radio — functions and definitions.
 *
 * @package oto-radio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/station-info.php';
require_once get_template_directory() . '/inc/episodes.php';

define( 'OTO_RADIO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function oto_radio_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'oto_radio_setup' );

/**
 * Front-end styles. No scripts: the waveforms, the on-air light and the menu are plain CSS (and core blocks).
 */
function oto_radio_enqueue() {
	wp_enqueue_style( 'oto-radio-style', get_stylesheet_uri(), array(), OTO_RADIO_VERSION );
}
add_action( 'wp_enqueue_scripts', 'oto_radio_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function oto_radio_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small capitals with an amber dot)', 'oto-radio' ),
			'lead'  => __( 'Lead paragraph', 'oto-radio' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Text link with an arrow', 'oto-radio' ),
		),
		'core/group'     => array(
			'cream' => __( 'Cream panel (violet text on cream)', 'oto-radio' ),
		),
		'core/list'      => array(
			'rundown' => __( 'Rundown (programme-guide rows)', 'oto-radio' ),
			'dash'    => __( 'Dash list (amber dashes)', 'oto-radio' ),
		),
		'core/separator' => array(
			'wave' => __( 'Waveform (amber bars)', 'oto-radio' ),
		),
		'core/image'     => array(
			'sleeve' => __( 'Record sleeve (square, with a vinyl edge)', 'oto-radio' ),
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
add_action( 'init', 'oto_radio_block_styles' );

/**
 * Pattern category.
 */
function oto_radio_pattern_categories() {
	register_block_pattern_category(
		'oto-radio',
		array(
			'label'       => __( 'Oto Radio', 'oto-radio' ),
			'description' => __( 'Sections for a podcast or radio show: the episode timeline, the episode index, the listen bar, the hosts, the running order, the newsletter and contact.', 'oto-radio' ),
		)
	);
}
add_action( 'init', 'oto_radio_pattern_categories' );
