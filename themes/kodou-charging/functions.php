<?php
/**
 * Kodou Charging: functions and definitions.
 *
 * @package kodou-charging
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'KODOU_CHARGING_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kodou_charging_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kodou_charging_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function kodou_charging_enqueue() {
	wp_enqueue_style( 'kodou-charging-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KODOU_CHARGING_VERSION );
	wp_enqueue_style( 'kodou-charging-style', get_stylesheet_uri(), array( 'kodou-charging-sp-scroll' ), KODOU_CHARGING_VERSION );
	wp_enqueue_script( 'kodou-charging-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KODOU_CHARGING_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kodou_charging_enqueue' );

/**
 * Pattern category.
 */
function kodou_charging_pattern_categories() {
	register_block_pattern_category(
		'kodou-charging',
		array(
			'label'       => __( 'Kodou Charging', 'kodou-charging' ),
			'description' => __( 'Sections for a workplace EV charging installer: the split hero with a booking bar, the outlined notice banner, the statement with two pictogram columns, filled-cell site tabs, assessment tiles, the visit in order, a price table, stories and questions.', 'kodou-charging' ),
		)
	);
}
add_action( 'init', 'kodou_charging_pattern_categories' );
