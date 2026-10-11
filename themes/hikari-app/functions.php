<?php
/**
 * Hikari App — functions and definitions.
 *
 * @package hikari-app
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/app-info.php';

define( 'HIKARI_APP_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function hikari_app_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'hikari_app_setup' );

/**
 * Front-end styles.
 */
function hikari_app_enqueue() {
	wp_enqueue_style( 'hikari-app-style', get_stylesheet_uri(), array(), HIKARI_APP_VERSION );
}
add_action( 'wp_enqueue_scripts', 'hikari_app_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hikari_app_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small spaced capitals with a dusk dot)', 'hikari-app' ),
			'lead'  => __( 'Lead paragraph', 'hikari-app' ),
		),
		'core/button'    => array(
			'quiet' => __( 'Quiet outline pill', 'hikari-app' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairlines between items)', 'hikari-app' ),
		),
		'core/details'   => array(
			'faq' => __( 'Question (hairline and a plus sign)', 'hikari-app' ),
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
add_action( 'init', 'hikari_app_block_styles' );

/**
 * Pattern category.
 */
function hikari_app_pattern_categories() {
	register_block_pattern_category(
		'hikari-app',
		array(
			'label'       => __( 'Hikari App', 'hikari-app' ),
			'description' => __( 'Calm sections for a software product: a bento home page under lantern-light glows, features, pricing, changelog, about, journal, newsletter and contact.', 'hikari-app' ),
		)
	);
}
add_action( 'init', 'hikari_app_pattern_categories' );
