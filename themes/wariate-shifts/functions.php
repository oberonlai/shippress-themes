<?php
/**
 * Wariate Shifts — functions and definitions.
 *
 * @package wariate-shifts
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'WARIATE_SHIFTS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function wariate_shifts_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'wariate_shifts_setup' );

/**
 * Front-end styles and the small scroll-effect script (sp-scroll). The script loads in the head, not deferred, so the
 * hidden start state of the reveals exists before the first paint.
 */
function wariate_shifts_enqueue() {
	wp_enqueue_style( 'wariate-shifts-style', get_stylesheet_uri(), array(), WARIATE_SHIFTS_VERSION );
	wp_enqueue_style( 'wariate-shifts-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'wariate-shifts-style' ), WARIATE_SHIFTS_VERSION );
	wp_enqueue_script( 'wariate-shifts-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), WARIATE_SHIFTS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'wariate_shifts_enqueue' );

/**
 * Pattern category.
 */
function wariate_shifts_pattern_categories() {
	register_block_pattern_category(
		'wariate-shifts',
		array(
			'label'       => __( 'Wariate Shifts', 'wariate-shifts' ),
			'description' => __( 'Sections for a rota-software landing page: the centred column over a four-photo arched strip, the folder-tab panel with numbered steps, reason cards with hanging numerals, the sixty-minute time bar and the one demo booking band.', 'wariate-shifts' ),
		)
	);
}
add_action( 'init', 'wariate_shifts_pattern_categories' );

/**
 * Image URL helper for patterns (assets/images/<file>; assets/images/demo/ holds the copies imported into the Media Library).
 *
 * @param string $file File name inside assets/images/demo.
 * @return string
 */
function wariate_shifts_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}
