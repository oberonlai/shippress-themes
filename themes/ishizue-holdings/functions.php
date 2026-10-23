<?php
/**
 * Ishizue Holdings — functions and definitions.
 *
 * @package ishizue-holdings
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'ISHIZUE_HOLDINGS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function ishizue_holdings_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'ishizue_holdings_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head, not deferred, so html.sp-js is set before
 * the first paint (the hidden reveal states only exist under html.sp-js).
 */
function ishizue_holdings_enqueue() {
	wp_enqueue_style( 'ishizue-holdings-style', get_stylesheet_uri(), array(), ISHIZUE_HOLDINGS_VERSION );
	wp_enqueue_style( 'ishizue-holdings-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'ishizue-holdings-style' ), ISHIZUE_HOLDINGS_VERSION );
	wp_enqueue_script( 'ishizue-holdings-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), ISHIZUE_HOLDINGS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'ishizue_holdings_enqueue' );

/**
 * Pattern category.
 */
function ishizue_holdings_pattern_categories() {
	register_block_pattern_category(
		'ishizue-holdings',
		array(
			'label'       => __( 'Ishizue Holdings', 'ishizue-holdings' ),
			'description' => __( 'Sections for a diversified holding company: the tagline beside a rounded photograph with a dated timeline line, bracket-phrase marquee rows, the sticky stack of tinted group-company cards, a full-bleed quay photograph, the governance band, the investor notices panel, the owners band and the visit close.', 'ishizue-holdings' ),
		)
	);
}
add_action( 'init', 'ishizue_holdings_pattern_categories' );

/**
 * URL of a theme photograph (patterns use it so the markup stays valid wherever the theme sits).
 *
 * @param string $file File name inside assets/images/.
 * @return string
 */
function ishizue_holdings_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}
