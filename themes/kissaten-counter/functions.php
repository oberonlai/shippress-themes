<?php
/**
 * Kissaten Counter — functions and definitions.
 *
 * @package kissaten-counter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';

define( 'KISSATEN_COUNTER_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function kissaten_counter_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'kissaten_counter_setup' );

/**
 * Front-end styles.
 */
function kissaten_counter_enqueue() {
	wp_enqueue_style( 'kissaten-counter-style', get_stylesheet_uri(), array(), KISSATEN_COUNTER_VERSION );
}
add_action( 'wp_enqueue_scripts', 'kissaten_counter_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kissaten_counter_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'eyebrow' => __( 'Eyebrow', 'kissaten-counter' ),
			'hand'    => __( 'Hand-lettered note', 'kissaten-counter' ),
			'lead'    => __( 'Lead', 'kissaten-counter' ),
		),
		'core/heading'   => array(
			'soft-display' => __( 'Soft display', 'kissaten-counter' ),
		),
		'core/group'     => array(
			'menu-card' => __( 'Menu card (paper)', 'kissaten-counter' ),
			'saucer'    => __( 'Saucer (raised dark card)', 'kissaten-counter' ),
		),
		'core/image'     => array(
			'arch'   => __( 'Arched window', 'kissaten-counter' ),
			'saucer' => __( 'Round (saucer)', 'kissaten-counter' ),
		),
		'core/separator' => array(
			'seats' => __( 'Twelve seats', 'kissaten-counter' ),
		),
		'core/button'    => array(
			'outline' => __( 'Outline pill', 'kissaten-counter' ),
		),
		'core/table'     => array(
			'hours' => __( 'Opening hours', 'kissaten-counter' ),
		),
		'core/list'      => array(
			'beans' => __( 'Bean bullets', 'kissaten-counter' ),
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
add_action( 'init', 'kissaten_counter_block_styles' );

/**
 * Pattern category.
 */
function kissaten_counter_pattern_categories() {
	register_block_pattern_category(
		'kissaten-counter',
		array(
			'label'       => __( 'Kissaten Counter', 'kissaten-counter' ),
			'description' => __( 'Counter, menu board and visit sections for the Kissaten Counter theme.', 'kissaten-counter' ),
		)
	);
}
add_action( 'init', 'kissaten_counter_pattern_categories' );
