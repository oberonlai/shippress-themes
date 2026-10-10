<?php
/**
 * Kaze Yoga — functions and definitions.
 *
 * @package kaze-yoga
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/studio-info.php';

define( 'KAZE_YOGA_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function kaze_yoga_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'kaze_yoga_setup' );

/**
 * Front-end styles and the menu script (keeps the menu button's aria-expanded in step with the full-screen menu).
 */
function kaze_yoga_enqueue() {
	wp_enqueue_style( 'kaze-yoga-style', get_stylesheet_uri(), array(), KAZE_YOGA_VERSION );
	wp_enqueue_script(
		'kaze-yoga-menu',
		get_theme_file_uri( 'assets/js/menu.js' ),
		array(),
		KAZE_YOGA_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'kaze_yoga_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kaze_yoga_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label'   => __( 'Label (small spaced capitals)', 'kaze-yoga' ),
			'lead'    => __( 'Lead paragraph', 'kaze-yoga' ),
			'numeral' => __( 'Chapter number', 'kaze-yoga' ),
		),
		'core/separator' => array(
			'wave' => __( 'Breath line (a slow wave)', 'kaze-yoga' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a line', 'kaze-yoga' ),
		),
		'core/image'     => array(
			'pebble' => __( 'Pebble (soft organic shape)', 'kaze-yoga' ),
		),
		'core/group'     => array(
			'card' => __( 'Paper card', 'kaze-yoga' ),
		),
		'core/list'      => array(
			'steps' => __( 'Steps (numbered, with a breath line)', 'kaze-yoga' ),
			'calm'  => __( 'Calm list (small sage dashes)', 'kaze-yoga' ),
		),
		'core/details'   => array(
			'faq' => __( 'Question (opens softly)', 'kaze-yoga' ),
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
add_action( 'init', 'kaze_yoga_block_styles' );

/**
 * Pattern category.
 */
function kaze_yoga_pattern_categories() {
	register_block_pattern_category(
		'kaze-yoga',
		array(
			'label'       => __( 'Kaze Yoga', 'kaze-yoga' ),
			'description' => __( 'Calm, airy sections for a small yoga studio: the opening breath, chapters with a photograph that stays while the words move, the timetable, the teachers, the free trial class, the journal, the newsletter and contact.', 'kaze-yoga' ),
		)
	);
}
add_action( 'init', 'kaze_yoga_pattern_categories' );
