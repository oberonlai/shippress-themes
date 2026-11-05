<?php
/**
 * Misora Links — functions and definitions.
 *
 * @package misora-links
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'MISORA_LINKS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function misora_links_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'misora_links_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head, not deferred, so the hidden state is set
 * before the first paint; without it everything stays visible.
 */
function misora_links_enqueue() {
	wp_enqueue_style( 'misora-links-style', get_stylesheet_uri(), array(), MISORA_LINKS_VERSION );
	wp_enqueue_style( 'misora-links-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'misora-links-style' ), MISORA_LINKS_VERSION );
	wp_enqueue_script( 'misora-links-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), MISORA_LINKS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'misora_links_enqueue' );

/**
 * Pattern category.
 */
function misora_links_pattern_categories() {
	register_block_pattern_category(
		'misora-links',
		array(
			'label'       => __( 'Misora Links', 'misora-links' ),
			'description' => __( 'Sections for a members\' golf club: the ticket-notch first tee, the morning sheet rail, three rounds, the parallax course, the ruled season rows, people, plans, stories, journal and visit.', 'misora-links' ),
		)
	);
}
add_action( 'init', 'misora_links_pattern_categories' );
