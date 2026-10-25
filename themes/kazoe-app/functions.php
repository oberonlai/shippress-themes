<?php
/**
 * Kazoe Books App — functions and definitions.
 *
 * @package kazoe-app
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KAZOE_APP_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles (style.css and the scroll effects, so the editor shows the final state).
 */
function kazoe_app_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kazoe_app_setup' );

/**
 * Front-end styles and the small scroll-effects script (loaded in <head>, not deferred, so the hidden start state
 * only exists when the script runs).
 */
function kazoe_app_enqueue() {
	wp_enqueue_style( 'kazoe-app-style', get_stylesheet_uri(), array(), KAZOE_APP_VERSION );
	wp_enqueue_style( 'kazoe-app-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KAZOE_APP_VERSION );
	wp_enqueue_script( 'kazoe-app-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KAZOE_APP_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kazoe_app_enqueue' );

/**
 * Pattern category.
 */
function kazoe_app_pattern_categories() {
	register_block_pattern_category(
		'kazoe-app',
		array(
			'label'       => __( 'Kazoe Books App', 'kazoe-app' ),
			'description' => __( 'Landing sections: the split hero with stepped label boxes, numbered feature rows, photo cards, setup steps, owner stories, pricing table, FAQ rows and the closing call to action.', 'kazoe-app' ),
		)
	);
}
add_action( 'init', 'kazoe_app_pattern_categories' );
