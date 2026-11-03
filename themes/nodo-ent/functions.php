<?php
/**
 * Nodo Clinic — functions and definitions.
 *
 * @package nodo-ent
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'NODO_ENT_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function nodo_ent_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'nodo_ent_setup' );

/**
 * Front-end styles and the scroll-effects script (in <head>, not deferred, so html.sp-js is set before first paint).
 */
function nodo_ent_enqueue() {
	wp_enqueue_style( 'nodo-ent-style', get_stylesheet_uri(), array(), NODO_ENT_VERSION );
	wp_enqueue_style( 'nodo-ent-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), NODO_ENT_VERSION );
	wp_enqueue_script( 'nodo-ent-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), NODO_ENT_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'nodo_ent_enqueue' );

/**
 * Pattern category.
 */
function nodo_ent_pattern_categories() {
	register_block_pattern_category(
		'nodo-ent',
		array(
			'label'       => __( 'Nodo Clinic', 'nodo-ent' ),
			'description' => __( 'Calm sections for an adult ear, nose and throat practice: a photograph with paper strips, ruled complaint rows, a stepped photo walk and a visit pace.', 'nodo-ent' ),
		)
	);
}
add_action( 'init', 'nodo_ent_pattern_categories' );
