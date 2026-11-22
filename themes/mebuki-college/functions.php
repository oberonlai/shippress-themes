<?php
/**
 * Mebuki College: functions and definitions.
 *
 * @package mebuki-college
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'MEBUKI_COLLEGE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function mebuki_college_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'mebuki_college_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function mebuki_college_enqueue() {
	wp_enqueue_style( 'mebuki-college-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), MEBUKI_COLLEGE_VERSION );
	wp_enqueue_style( 'mebuki-college-style', get_stylesheet_uri(), array( 'mebuki-college-sp-scroll' ), MEBUKI_COLLEGE_VERSION );
	wp_enqueue_script( 'mebuki-college-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), MEBUKI_COLLEGE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'mebuki_college_enqueue' );

/**
 * Pattern category.
 */
function mebuki_college_pattern_categories() {
	register_block_pattern_category(
		'mebuki-college',
		array(
			'label'       => __( 'Mebuki College', 'mebuki-college' ),
			'description' => __( 'Sections for an early-childhood teacher-training college: a pale split hero with tutor chalk marks over the photo, notched photo cards, a day on the course on one hairline, mirrored panel cards, fees, admission and tutors.', 'mebuki-college' ),
		)
	);
}
add_action( 'init', 'mebuki_college_pattern_categories' );
