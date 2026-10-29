<?php
/**
 * Kairo Supply: functions and definitions.
 *
 * @package kairo-supply
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KAIRO_SUPPLY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kairo_supply_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kairo_supply_setup' );

/**
 * Front-end styles, and the scroll-effect script in the head (not deferred, so html.sp-js is set before the first paint).
 */
function kairo_supply_enqueue() {
	wp_enqueue_style( 'kairo-supply-style', get_stylesheet_uri(), array(), KAIRO_SUPPLY_VERSION );
	wp_enqueue_style( 'kairo-supply-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kairo-supply-style' ), KAIRO_SUPPLY_VERSION );
	wp_enqueue_script( 'kairo-supply-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KAIRO_SUPPLY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kairo_supply_enqueue' );

/**
 * Block style variations for the pill buttons. All CSS lives in style.css.
 */
function kairo_supply_block_styles() {
	$styles = array(
		'ks-pill'       => __( 'Outlined pill', 'kairo-supply' ),
		'ks-pill-fill'  => __( 'Filled pill', 'kairo-supply' ),
		'ks-pill-light' => __( 'Light pill (on dark)', 'kairo-supply' ),
	);
	foreach ( $styles as $name => $label ) {
		register_block_style(
			'core/button',
			array(
				'name'  => $name,
				'label' => $label,
			)
		);
	}
}
add_action( 'init', 'kairo_supply_block_styles' );

/**
 * Pattern category.
 */
function kairo_supply_pattern_categories() {
	register_block_pattern_category(
		'kairo-supply',
		array(
			'label'       => __( 'Kairo Supply', 'kairo-supply' ),
			'description' => __( 'Sections for an electrical trade counter: the wordmark and stadium photo cover, the counter story, the dark stage, the account steps, the range, prices, stories, team and the single way to apply.', 'kairo-supply' ),
		)
	);
}
add_action( 'init', 'kairo_supply_pattern_categories' );
