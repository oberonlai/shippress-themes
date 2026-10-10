<?php
/**
 * Shiro Horitsu — functions and definitions.
 *
 * @package shiro-horitsu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';

define( 'SHIRO_HORITSU_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function shiro_horitsu_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'shiro_horitsu_setup' );

/**
 * Front-end styles.
 */
function shiro_horitsu_enqueue() {
	wp_enqueue_style( 'shiro-horitsu-style', get_stylesheet_uri(), array(), SHIRO_HORITSU_VERSION );
}
add_action( 'wp_enqueue_scripts', 'shiro_horitsu_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function shiro_horitsu_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label'   => __( 'Label (spaced capitals)', 'shiro-horitsu' ),
			'section' => __( 'Section label (with a section mark)', 'shiro-horitsu' ),
			'lead'    => __( 'Lead paragraph (serif)', 'shiro-horitsu' ),
			'numeral' => __( 'Numeral (large serif)', 'shiro-horitsu' ),
			'fine'    => __( 'Fine print', 'shiro-horitsu' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with arrow', 'shiro-horitsu' ),
		),
		'core/separator' => array(
			'ink' => __( 'Ink rule (dark hairline)', 'shiro-horitsu' ),
		),
		'core/list'      => array(
			'ruled'    => __( 'Ruled (hairlines, short dash)', 'shiro-horitsu' ),
			'timeline' => __( 'Timeline (italic year first)', 'shiro-horitsu' ),
		),
		'core/table'     => array(
			'ledger' => __( 'Ledger (hairlines, fees on the right)', 'shiro-horitsu' ),
		),
		'core/quote'     => array(
			'plain' => __( 'Plain (no rule)', 'shiro-horitsu' ),
		),
		'core/details'   => array(
			'faq' => __( 'FAQ (ruled, plus sign)', 'shiro-horitsu' ),
		),
		'core/image'     => array(
			'frame' => __( 'Frame (paper border)', 'shiro-horitsu' ),
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
add_action( 'init', 'shiro_horitsu_block_styles' );

/**
 * Pattern category.
 */
function shiro_horitsu_pattern_categories() {
	register_block_pattern_category(
		'shiro-horitsu',
		array(
			'label'       => __( 'Shiro Horitsu', 'shiro-horitsu' ),
			'description' => __( 'Quiet sections for a boutique law firm: a hero with column rules, a numbered practice index, attorney profiles, the first-consultation flow, a fee ledger, insights, the newsletter and contact.', 'shiro-horitsu' ),
		)
	);
}
add_action( 'init', 'shiro_horitsu_pattern_categories' );
