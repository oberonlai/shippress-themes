<?php
/**
 * Undo Ba — functions and definitions.
 *
 * @package undo-ba
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'UNDO_BA_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function undo_ba_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'undo_ba_setup' );

/**
 * Front-end styles and the menu script (keeps the phone menu button's aria-expanded in step with the overlay).
 */
function undo_ba_enqueue() {
	wp_enqueue_style( 'undo-ba-style', get_stylesheet_uri(), array(), UNDO_BA_VERSION );
	wp_enqueue_script(
		'undo-ba-menu',
		get_theme_file_uri( 'assets/js/menu.js' ),
		array(),
		UNDO_BA_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'undo_ba_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function undo_ba_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small spaced capitals)', 'undo-ba' ),
			'lead'  => __( 'Lead paragraph', 'undo-ba' ),
		),
		'core/separator' => array(
			'hairline' => __( 'Hairline (a fine warm-grey rule)', 'undo-ba' ),
		),
		'core/button'    => array(
			'quiet' => __( 'Quiet (outline)', 'undo-ba' ),
		),
		'core/group'     => array(
			'card' => __( 'Paper card', 'undo-ba' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairlines between items)', 'undo-ba' ),
		),
		'core/details'   => array(
			'faq' => __( 'Question', 'undo-ba' ),
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
add_action( 'init', 'undo_ba_block_styles' );

/**
 * Pattern category.
 */
function undo_ba_pattern_categories() {
	register_block_pattern_category(
		'undo-ba',
		array(
			'label'       => __( 'Undo Ba', 'undo-ba' ),
			'description' => __( 'Quiet sections for a small strength and conditioning studio: the opening, the week as a numbered timeline, programs, coaches, memberships and prices, the journal, the newsletter and trial booking.', 'undo-ba' ),
		)
	);
}
add_action( 'init', 'undo_ba_pattern_categories' );
