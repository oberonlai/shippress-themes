<?php
/**
 * Isso Relocation — functions and definitions.
 *
 * @package isso-relocation
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'ISSO_RELOCATION_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (the style sheet and the scroll-effect CSS, so the editor shows the final state).
 */
function isso_relocation_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'isso_relocation_setup' );

/**
 * Front-end styles and the scroll-effect script (in the head, not deferred, so the hidden state never flashes).
 */
function isso_relocation_enqueue() {
	wp_enqueue_style( 'isso-relocation-style', get_stylesheet_uri(), array(), ISSO_RELOCATION_VERSION );
	wp_enqueue_style( 'isso-relocation-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'isso-relocation-style' ), ISSO_RELOCATION_VERSION );
	wp_enqueue_script( 'isso-relocation-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), ISSO_RELOCATION_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'isso_relocation_enqueue' );

/**
 * Pattern category.
 */
function isso_relocation_pattern_category() {
	register_block_pattern_category( 'isso-relocation', array( 'label' => __( 'Isso Relocation', 'isso-relocation' ) ) );
}
add_action( 'init', 'isso_relocation_pattern_category' );
