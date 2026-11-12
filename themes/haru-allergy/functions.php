<?php
/**
 * Haru Allergy: functions and definitions.
 *
 * @package haru-allergy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'HARU_ALLERGY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function haru_allergy_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'haru_allergy_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before
 * the first paint; without it every sp-* element stays visible.
 */
function haru_allergy_enqueue() {
	wp_enqueue_style( 'haru-allergy-style', get_stylesheet_uri(), array(), HARU_ALLERGY_VERSION );
	wp_enqueue_style( 'haru-allergy-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), HARU_ALLERGY_VERSION );
	wp_enqueue_script( 'haru-allergy-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HARU_ALLERGY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'haru_allergy_enqueue' );

/**
 * Pattern category.
 */
function haru_allergy_pattern_categories() {
	register_block_pattern_category(
		'haru-allergy',
		array(
			'label'       => __( 'Haru Allergy', 'haru-allergy' ),
			'description' => __( 'Sections for an allergy clinic: the pinned photo with a rising poem, edge portraits, the line-up method band, the slate case-note band and the rounded voice card.', 'haru-allergy' ),
		)
	);
}
add_action( 'init', 'haru_allergy_pattern_categories' );
