<?php
/**
 * Sakura Juku — functions and definitions.
 *
 * @package sakura-juku
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/school-info.php';

define( 'SAKURA_JUKU_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function sakura_juku_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'sakura_juku_setup' );

/**
 * Front-end styles. No scripts: the stickers, the bento grid and the menu are plain CSS (and core blocks).
 */
function sakura_juku_enqueue() {
	wp_enqueue_style( 'sakura-juku-style', get_stylesheet_uri(), array(), SAKURA_JUKU_VERSION );
}
add_action( 'wp_enqueue_scripts', 'sakura_juku_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function sakura_juku_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small rounded tag)', 'sakura-juku' ),
			'lead'  => __( 'Lead paragraph', 'sakura-juku' ),
		),
		'core/button'    => array(
			'pink' => __( 'Pink pill (ink text on sakura pink)', 'sakura-juku' ),
		),
		'core/group'     => array(
			'card'  => __( 'Rounded card (white with a soft border)', 'sakura-juku' ),
			'pink'  => __( 'Pink card (sakura pink, ink text)', 'sakura-juku' ),
			'blue'  => __( 'Blue card (clear blue, white text)', 'sakura-juku' ),
			'sky'   => __( 'Sky card (pale blue)', 'sakura-juku' ),
			'blush' => __( 'Blush card (pale pink)', 'sakura-juku' ),
		),
		'core/list'      => array(
			'dots' => __( 'Petal dots (pink round bullets)', 'sakura-juku' ),
		),
		'core/table'     => array(
			'rounded' => __( 'Rounded timetable (soft rows)', 'sakura-juku' ),
		),
		'core/image'     => array(
			'rounded' => __( 'Rounded photo (large soft corners)', 'sakura-juku' ),
		),
		'core/separator' => array(
			'petals' => __( 'Petals (a row of pink dots)', 'sakura-juku' ),
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
add_action( 'init', 'sakura_juku_block_styles' );

/**
 * Pattern category.
 */
function sakura_juku_pattern_categories() {
	register_block_pattern_category(
		'sakura-juku',
		array(
			'label'       => __( 'Sakura Juku', 'sakura-juku' ),
			'description' => __( 'Sections for a language school: the bento home, courses, levels, the weekly timetable, teachers, opening hours, the newsletter and contact.', 'sakura-juku' ),
		)
	);
}
add_action( 'init', 'sakura_juku_pattern_categories' );
