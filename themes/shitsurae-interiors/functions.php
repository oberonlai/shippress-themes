<?php
/**
 * Shitsurae Interiors: functions and definitions.
 *
 * @package shitsurae-interiors
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'SHITSURAE_INTERIORS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function shitsurae_interiors_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'shitsurae_interiors_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function shitsurae_interiors_enqueue() {
	wp_enqueue_style( 'shitsurae-interiors-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), SHITSURAE_INTERIORS_VERSION );
	wp_enqueue_style( 'shitsurae-interiors-style', get_stylesheet_uri(), array( 'shitsurae-interiors-sp-scroll' ), SHITSURAE_INTERIORS_VERSION );
	wp_enqueue_script( 'shitsurae-interiors-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SHITSURAE_INTERIORS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'shitsurae_interiors_enqueue' );

/**
 * Pattern category.
 */
function shitsurae_interiors_pattern_categories() {
	register_block_pattern_category(
		'shitsurae-interiors',
		array(
			'label'       => __( 'Shitsurae Interiors', 'shitsurae-interiors' ),
			'description' => __( 'Sections for an interior design studio: the caption-strip hero, the case rows with briefs and budgets, the works index with its grid, the material strip, the survey-to-handover rows and the one way to book.', 'shitsurae-interiors' ),
		)
	);
}
add_action( 'init', 'shitsurae_interiors_pattern_categories' );
