<?php
/**
 * Kodama Sound: functions and definitions.
 *
 * @package kodama-sound
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'KODAMA_SOUND_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kodama_sound_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kodama_sound_setup' );

/**
 * Front-end styles and the small scroll script (head, not deferred, so the hidden states only exist once it ran).
 */
function kodama_sound_enqueue() {
	wp_enqueue_style( 'kodama-sound-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KODAMA_SOUND_VERSION );
	wp_enqueue_style( 'kodama-sound-style', get_stylesheet_uri(), array( 'kodama-sound-sp-scroll' ), KODAMA_SOUND_VERSION );
	wp_enqueue_script( 'kodama-sound-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KODAMA_SOUND_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kodama_sound_enqueue' );

/**
 * Pattern category.
 */
function kodama_sound_pattern_categories() {
	register_block_pattern_category(
		'kodama-sound',
		array(
			'label'       => __( 'Kodama Sound', 'kodama-sound' ),
			'description' => __( 'Sections for a sound designer and composer: the framed window with a hand-drawn trace line, ruled credit sheets, the three-zone schedule row, flush-edge photographs and the dark send-a-cut tab.', 'kodama-sound' ),
		)
	);
}
add_action( 'init', 'kodama_sound_pattern_categories' );
