<?php
/**
 * Kasumi Bar — functions and definitions.
 *
 * @package kasumi-bar
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'KASUMI_BAR_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function kasumi_bar_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'kasumi_bar_setup' );

/**
 * Front-end styles.
 */
function kasumi_bar_enqueue() {
	wp_enqueue_style( 'kasumi-bar-style', get_stylesheet_uri(), array(), KASUMI_BAR_VERSION );
}
add_action( 'wp_enqueue_scripts', 'kasumi_bar_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kasumi_bar_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small spaced gold capitals)', 'kasumi-bar' ),
			'lead'  => __( 'Lead paragraph (serif)', 'kasumi-bar' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a gold hairline underline', 'kasumi-bar' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (gold hairlines)', 'kasumi-bar' ),
		),
		'core/separator' => array(
			'hairline' => __( 'Short gold hairline', 'kasumi-bar' ),
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
add_action( 'init', 'kasumi_bar_block_styles' );

/**
 * Pattern category.
 */
function kasumi_bar_pattern_categories() {
	register_block_pattern_category(
		'kasumi-bar',
		array(
			'label'       => __( 'Kasumi Bar', 'kasumi-bar' ),
			'description' => __( 'Quiet sections for a small cocktail bar: the name and chapter titles in vertical type, seasonal drinks, a menu card with gold leaders, reservations, the bar and its people, journal and contact.', 'kasumi-bar' ),
		)
	);
}
add_action( 'init', 'kasumi_bar_pattern_categories' );
