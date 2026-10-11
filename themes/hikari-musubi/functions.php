<?php
/**
 * Hikari Musubi — functions and definitions.
 *
 * @package hikari-musubi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'HIKARI_MUSUBI_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function hikari_musubi_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'hikari_musubi_setup' );

/**
 * Front-end styles and the menu script (keeps the Menu button's aria-expanded in step with the full-screen menu).
 */
function hikari_musubi_enqueue() {
	wp_enqueue_style( 'hikari-musubi-style', get_stylesheet_uri(), array(), HIKARI_MUSUBI_VERSION );
	wp_enqueue_script(
		'hikari-musubi-menu',
		get_theme_file_uri( 'assets/js/menu.js' ),
		array(),
		HIKARI_MUSUBI_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'hikari_musubi_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hikari_musubi_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small spaced capitals)', 'hikari-musubi' ),
			'lead'  => __( 'Lead paragraph', 'hikari-musubi' ),
		),
		'core/separator' => array(
			'knot' => __( 'Mizuhiki knot (a tied cord between two lines)', 'hikari-musubi' ),
		),
		'core/button'    => array(
			'quiet' => __( 'Quiet (outline)', 'hikari-musubi' ),
		),
		'core/group'     => array(
			'card' => __( 'Blush card', 'hikari-musubi' ),
		),
		'core/list'      => array(
			'cord' => __( 'Cord list (small champagne lines)', 'hikari-musubi' ),
		),
		'core/details'   => array(
			'faq' => __( 'Question', 'hikari-musubi' ),
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
add_action( 'init', 'hikari_musubi_block_styles' );

/**
 * Pattern category.
 */
function hikari_musubi_pattern_categories() {
	register_block_pattern_category(
		'hikari-musubi',
		array(
			'label'       => __( 'Hikari Musubi', 'hikari-musubi' ),
			'description' => __( 'Quiet sections for a small wedding planner: the opening, a long-read letter, plans and prices, venues, a gallery, the journal, the newsletter and contact.', 'hikari-musubi' ),
		)
	);
}
add_action( 'init', 'hikari_musubi_pattern_categories' );
