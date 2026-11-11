<?php
/**
 * Kamotsu Academy — functions and definitions.
 *
 * @package kamotsu-academy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KAMOTSU_ACADEMY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kamotsu_academy_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kamotsu_academy_setup' );

/**
 * Front-end styles and the scroll-effects script (head, not deferred, so html.sp-js is set before first paint).
 */
function kamotsu_academy_enqueue() {
	wp_enqueue_style( 'kamotsu-academy-style', get_stylesheet_uri(), array(), KAMOTSU_ACADEMY_VERSION );
	wp_enqueue_style( 'kamotsu-academy-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kamotsu-academy-style' ), KAMOTSU_ACADEMY_VERSION );
	wp_enqueue_script( 'kamotsu-academy-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KAMOTSU_ACADEMY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kamotsu_academy_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kamotsu_academy_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'outline-pill', 'label' => __( 'Outline pill', 'kamotsu-academy' ) ) );
	register_block_style( 'core/paragraph', array( 'name' => 'kicker', 'label' => __( 'Caps kicker', 'kamotsu-academy' ) ) );
}
add_action( 'init', 'kamotsu_academy_block_styles' );

/**
 * Pattern category.
 */
function kamotsu_academy_pattern_categories() {
	register_block_pattern_category(
		'kamotsu-academy',
		array(
			'label'       => __( 'Kamotsu Academy', 'kamotsu-academy' ),
			'description' => __( 'Sections for an HGV training centre: the full-bleed photo with a giant white word and a docked card, tall promo cards, a sticky photo with admission rows, the road timeline of the weeks, a parallax band, the fee table, the instructor list, story cards and the open-yard close.', 'kamotsu-academy' ),
		)
	);
}
add_action( 'init', 'kamotsu_academy_pattern_categories' );
