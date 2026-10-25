<?php
/**
 * Shirota Laundry: functions and definitions.
 *
 * @package shirota-laundry
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'SHIROTA_LAUNDRY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (the scroll-effects CSS too, so the editor shows the final state).
 */
function shirota_laundry_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'shirota_laundry_setup' );

/**
 * Front-end styles and the small scroll-effects script (in the head, not deferred, so no content flashes).
 */
function shirota_laundry_enqueue() {
	wp_enqueue_style( 'shirota-laundry-style', get_stylesheet_uri(), array(), SHIROTA_LAUNDRY_VERSION );
	wp_enqueue_style( 'shirota-laundry-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'shirota-laundry-style' ), SHIROTA_LAUNDRY_VERSION );
	wp_enqueue_script( 'shirota-laundry-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SHIROTA_LAUNDRY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'shirota_laundry_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function shirota_laundry_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'outline-pill', 'label' => __( 'Outline pill', 'shirota-laundry' ) ) );
	register_block_style( 'core/paragraph', array( 'name' => 'lead', 'label' => __( 'Lead paragraph', 'shirota-laundry' ) ) );
}
add_action( 'init', 'shirota_laundry_block_styles' );

/**
 * Pattern category.
 */
function shirota_laundry_pattern_categories() {
	register_block_pattern_category(
		'shirota-laundry',
		array(
			'label'       => __( 'Shirota Laundry', 'shirota-laundry' ),
			'description' => __( 'Sections for a commercial laundry: the oval window over a ghost wordmark, the ruled service index, the staggered card mosaic and the rate table.', 'shirota-laundry' ),
		)
	);
}
add_action( 'init', 'shirota_laundry_pattern_categories' );
