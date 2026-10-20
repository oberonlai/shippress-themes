<?php
/**
 * Kagi Security — functions and definitions.
 *
 * @package kagi-security
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'KAGI_SECURITY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function kagi_security_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'kagi_security_setup' );

/**
 * Front-end styles.
 */
function kagi_security_enqueue() {
	wp_enqueue_style( 'kagi-security-style', get_stylesheet_uri(), array(), KAGI_SECURITY_VERSION );
}
add_action( 'wp_enqueue_scripts', 'kagi_security_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kagi_security_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small capitals after a lane-line dash)', 'kagi-security' ),
			'lead'  => __( 'Lead paragraph', 'kagi-security' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with an arrow', 'kagi-security' ),
			'outline'   => __( 'Quiet outline button', 'kagi-security' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairline between items)', 'kagi-security' ),
		),
		'core/table'     => array(
			'fees' => __( 'Fees (ruled, tabular figures)', 'kagi-security' ),
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
add_action( 'init', 'kagi_security_block_styles' );

/**
 * Pattern category.
 */
function kagi_security_pattern_categories() {
	register_block_pattern_category(
		'kagi-security',
		array(
			'label'       => __( 'Kagi Security', 'kagi-security' ),
			'description' => __( 'Quiet, photograph-led sections for an independent business hotel: the room at first light, six steps from the platform to checkout, rooms and rates, the price table, the people behind the desk, journal and contact.', 'kagi-security' ),
		)
	);
}
add_action( 'init', 'kagi_security_pattern_categories' );
