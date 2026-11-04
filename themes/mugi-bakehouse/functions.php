<?php
/**
 * Mugi Bakehouse — functions and definitions.
 *
 * @package mugi-bakehouse
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'MUGI_BAKEHOUSE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles (the theme stylesheet and the scroll effects, so the editor shows the final state).
 */
function mugi_bakehouse_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'mugi_bakehouse_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden state of a reveal is
 * set before the first paint; without it every section is simply visible. The small tab script (footer) only swaps
 * the two hero photographs when OVEN or BENCH is pressed.
 */
function mugi_bakehouse_enqueue() {
	wp_enqueue_style( 'mugi-bakehouse-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), MUGI_BAKEHOUSE_VERSION );
	wp_enqueue_style( 'mugi-bakehouse-style', get_stylesheet_uri(), array( 'mugi-bakehouse-sp-scroll' ), MUGI_BAKEHOUSE_VERSION );
	wp_enqueue_script( 'mugi-bakehouse-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), MUGI_BAKEHOUSE_VERSION, false );
	wp_enqueue_script( 'mugi-bakehouse-tabs', get_theme_file_uri( 'assets/mugi-tabs.js' ), array(), MUGI_BAKEHOUSE_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'mugi_bakehouse_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function mugi_bakehouse_block_styles() {
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'label',
			'label' => __( 'Label (small, tracked)', 'mugi-bakehouse' ),
		)
	);
	register_block_style(
		'core/separator',
		array(
			'name'  => 'slanted',
			'label' => __( 'Slanted rule', 'mugi-bakehouse' ),
		)
	);
}
add_action( 'init', 'mugi_bakehouse_block_styles' );

/**
 * Pattern category.
 */
function mugi_bakehouse_pattern_categories() {
	register_block_pattern_category(
		'mugi-bakehouse',
		array(
			'label'       => __( 'Mugi Bakehouse', 'mugi-bakehouse' ),
			'description' => __( 'Sections for a neighbourhood bakery: the full-bleed bakehouse photograph with edge tabs, ruled loaf rows, the oven day, standing orders, neighbours and the day book.', 'mugi-bakehouse' ),
		)
	);
}
add_action( 'init', 'mugi_bakehouse_pattern_categories' );

/**
 * Body class with the page slug, so the Oven and Bench edge tabs can show which page is current.
 */
function mugi_bakehouse_body_class( $classes ) {
	if ( is_page() ) {
		$classes[] = 'mb-page-' . sanitize_html_class( get_post_field( 'post_name', get_queried_object_id() ) );
	}
	return $classes;
}
add_filter( 'body_class', 'mugi_bakehouse_body_class' );
