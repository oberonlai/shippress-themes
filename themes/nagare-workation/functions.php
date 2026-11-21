<?php
/**
 * Nagare Workation Hotel: functions and definitions.
 *
 * @package nagare-workation
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'NAGARE_WORKATION_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function nagare_workation_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'nagare_workation_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function nagare_workation_enqueue() {
	wp_enqueue_style( 'nagare-workation-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), NAGARE_WORKATION_VERSION );
	wp_enqueue_style( 'nagare-workation-style', get_stylesheet_uri(), array( 'nagare-workation-sp-scroll' ), NAGARE_WORKATION_VERSION );
	wp_enqueue_script( 'nagare-workation-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), NAGARE_WORKATION_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'nagare_workation_enqueue' );

/**
 * Pattern category.
 */
function nagare_workation_pattern_categories() {
	register_block_pattern_category(
		'nagare-workation',
		array(
			'label'       => __( 'Nagare Workation Hotel', 'nagare-workation' ),
			'description' => __( 'Sections for a lakeside workation hotel: a three-pane photograph hero, a horizontal photo strip of the week, a label-cell price board, a seam portrait band, the coworking floor and the one way to book.', 'nagare-workation' ),
		)
	);
}
add_action( 'init', 'nagare_workation_pattern_categories' );
