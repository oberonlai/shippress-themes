<?php
/**
 * Kyukyu College — functions and definitions.
 *
 * @package kyukyu-college
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KYUKYU_COLLEGE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kyukyu_college_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kyukyu_college_setup' );

/**
 * Front-end styles and the scroll-effects script (head, not deferred, so html.sp-js is set before first paint).
 */
function kyukyu_college_enqueue() {
	wp_enqueue_style( 'kyukyu-college-style', get_stylesheet_uri(), array(), KYUKYU_COLLEGE_VERSION );
	wp_enqueue_style( 'kyukyu-college-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kyukyu-college-style' ), KYUKYU_COLLEGE_VERSION );
	wp_enqueue_script( 'kyukyu-college-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KYUKYU_COLLEGE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kyukyu_college_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kyukyu_college_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'long-arrow', 'label' => __( 'Pill with a long arrow', 'kyukyu-college' ) ) );
	register_block_style( 'core/paragraph', array( 'name' => 'signal-label', 'label' => __( 'Red subtitle', 'kyukyu-college' ) ) );
}
add_action( 'init', 'kyukyu_college_block_styles' );

/**
 * Pattern category.
 */
function kyukyu_college_pattern_categories() {
	register_block_pattern_category(
		'kyukyu-college',
		array(
			'label'       => __( 'Kyukyu College', 'kyukyu-college' ),
			'description' => __( 'Sections for a paramedic college: the name lockup with a framed photo, hairline split rows with a giant section word, sticky term chapters, the tinted photo band, the ride-along week line, figures, the price list, entry rows, stories and the visit row.', 'kyukyu-college' ),
		)
	);
}
add_action( 'init', 'kyukyu_college_pattern_categories' );
