<?php
/**
 * Kami Salon — functions and definitions.
 *
 * @package kami-salon
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/salon-info.php';

define( 'KAMI_SALON_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function kami_salon_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'kami_salon_setup' );

/**
 * Front-end styles and the menu script (keeps the mobile menu button's aria-expanded in step with the full-screen menu).
 */
function kami_salon_enqueue() {
	wp_enqueue_style( 'kami-salon-style', get_stylesheet_uri(), array(), KAMI_SALON_VERSION );
	wp_enqueue_script(
		'kami-salon-menu',
		get_theme_file_uri( 'assets/js/menu.js' ),
		array(),
		KAMI_SALON_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'kami_salon_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kami_salon_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label'   => __( 'Label (small spaced capitals)', 'kami-salon' ),
			'lead'    => __( 'Lead paragraph', 'kami-salon' ),
			'numeral' => __( 'Big number', 'kami-salon' ),
		),
		'core/separator' => array(
			'snip' => __( 'Cut line (dashes and scissors)', 'kami-salon' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with an arrow', 'kami-salon' ),
		),
		'core/image'     => array(
			'cut' => __( 'Scissor cut (diagonal edge)', 'kami-salon' ),
		),
		'core/group'     => array(
			'cut-card' => __( 'Cut card (diagonal corner)', 'kami-salon' ),
		),
		'core/list'      => array(
			'steps' => __( 'Steps (big numbers)', 'kami-salon' ),
			'dash'  => __( 'Dash list (magenta dashes)', 'kami-salon' ),
		),
		'core/details'   => array(
			'faq' => __( 'Question (plus sign)', 'kami-salon' ),
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
add_action( 'init', 'kami_salon_block_styles' );

/**
 * Pattern category.
 */
function kami_salon_pattern_categories() {
	register_block_pattern_category(
		'kami-salon',
		array(
			'label'       => __( 'Kami Salon', 'kami-salon' ),
			'description' => __( 'Bold, editorial sections for a hair salon: the card mosaic, services, stylists, looks, the price menu, booking, the journal, the newsletter and contact.', 'kami-salon' ),
		)
	);
}
add_action( 'init', 'kami_salon_pattern_categories' );
