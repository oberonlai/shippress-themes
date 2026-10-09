<?php
/**
 * Ma Vertical — functions and definitions.
 *
 * @package ma-vertical
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';

define( 'MA_VERTICAL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function ma_vertical_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'ma_vertical_setup' );

/**
 * Front-end styles.
 */
function ma_vertical_enqueue() {
	wp_enqueue_style( 'ma-vertical-style', get_stylesheet_uri(), array(), MA_VERTICAL_VERSION );
}
add_action( 'wp_enqueue_scripts', 'ma_vertical_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function ma_vertical_block_styles() {
	$tategaki = array(
		'core/heading',
		'core/paragraph',
		'core/post-title',
		'core/post-excerpt',
		'core/query-title',
		'core/group',
		'core/quote',
	);
	foreach ( $tategaki as $block ) {
		register_block_style(
			$block,
			array(
				'name'  => 'tategaki',
				'label' => __( 'Tategaki (vertical)', 'ma-vertical' ),
			)
		);
	}

	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'hanko',
			'label' => __( 'Hanko seal', 'ma-vertical' ),
		)
	);
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'eyebrow',
			'label' => __( 'Eyebrow', 'ma-vertical' ),
		)
	);
	register_block_style(
		'core/separator',
		array(
			'name'  => 'shu-rule',
			'label' => __( 'Short vermilion rule', 'ma-vertical' ),
		)
	);
	register_block_style(
		'core/image',
		array(
			'name'  => 'washi-frame',
			'label' => __( 'Washi frame', 'ma-vertical' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'  => 'text-arrow',
			'label' => __( 'Text arrow', 'ma-vertical' ),
		)
	);
}
add_action( 'init', 'ma_vertical_block_styles' );

/**
 * Pattern category.
 */
function ma_vertical_pattern_categories() {
	register_block_pattern_category(
		'ma-vertical',
		array(
			'label'       => __( 'Ma Vertical', 'ma-vertical' ),
			'description' => __( 'Whitespace and vertical-writing sections for the Ma Vertical theme.', 'ma-vertical' ),
		)
	);
}
add_action( 'init', 'ma_vertical_pattern_categories' );
