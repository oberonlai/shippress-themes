<?php
/**
 * Kikan College: functions and definitions.
 *
 * @package kikan-college
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'KIKAN_COLLEGE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kikan_college_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kikan_college_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function kikan_college_enqueue() {
	wp_enqueue_style( 'kikan-college-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KIKAN_COLLEGE_VERSION );
	wp_enqueue_style( 'kikan-college-style', get_stylesheet_uri(), array( 'kikan-college-sp-scroll' ), KIKAN_COLLEGE_VERSION );
	wp_enqueue_script( 'kikan-college-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KIKAN_COLLEGE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kikan_college_enqueue' );

/**
 * Pattern category.
 */
function kikan_college_pattern_categories() {
	register_block_pattern_category(
		'kikan-college',
		array(
			'label'       => __( 'Kikan College', 'kikan-college' ),
			'description' => __( 'Sections for an apprenticeship college: the framed window hero with stats row, tinted plate tiles, the proportional day strip, the two years, the parallax hall band, placements ledger, instructors, story tiles, fee table and the taster Saturday band.', 'kikan-college' ),
		)
	);
}
add_action( 'init', 'kikan_college_pattern_categories' );
