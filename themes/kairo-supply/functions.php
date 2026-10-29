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
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KAIRO_SUPPLY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (the scroll-effect CSS shows the final state in the editor).
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
 * Front-end styles and the scroll-effect script (in the head, not deferred).
 */
function kairo_supply_enqueue() {
	wp_enqueue_style( 'kairo-supply-style', get_stylesheet_uri(), array(), KAIRO_SUPPLY_VERSION );
	wp_enqueue_style( 'kairo-supply-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kairo-supply-style' ), KAIRO_SUPPLY_VERSION );
	wp_enqueue_script( 'kairo-supply-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KAIRO_SUPPLY_VERSION, array( 'in_footer' => false ) );
}
add_action( 'wp_enqueue_scripts', 'kairo_supply_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kairo_supply_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'text-link', 'label' => __( 'Text link with an arrow', 'kairo-supply' ) ) );
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
			'description' => __( 'Sections for a trade counter: the light-band first screen, the pinned stage, floating cards, tilted portraits, account rows, rate table and the apply card.', 'kairo-supply' ),
		)
	);
}
add_action( 'init', 'kairo_supply_pattern_categories' );
