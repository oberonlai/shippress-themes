<?php
/**
 * Hinata Market: functions and definitions.
 *
 * @package hinata-market
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'HINATA_MARKET_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hinata_market_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hinata_market_setup' );

/**
 * Front-end styles and scripts. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before the first
 * paint; without it every sp-* element stays visible.
 */
function hinata_market_enqueue() {
	wp_enqueue_style( 'hinata-market-style', get_stylesheet_uri(), array(), HINATA_MARKET_VERSION );
	wp_enqueue_style( 'hinata-market-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), HINATA_MARKET_VERSION );
	wp_enqueue_script( 'hinata-market-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HINATA_MARKET_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'hinata_market_enqueue' );

/**
 * The photographs on the front page and pages load up front so none stays blank in the first screens.
 *
 * @param bool $default Whether lazy loading is on.
 * @return bool
 */
function hinata_market_lazy_loading( $default ) {
	return ( is_front_page() || is_page() ) ? false : $default;
}
add_filter( 'wp_lazy_loading_enabled', 'hinata_market_lazy_loading' );

/**
 * Pattern category.
 */
function hinata_market_pattern_categories() {
	register_block_pattern_category(
		'hinata-market',
		array(
			'label'       => __( 'Hinata Market', 'hinata-market' ),
			'description' => __( 'Sections for a weekend farmers’ market: a ruled three-column front page with a date stamp card, a stall ticker, a horizontal stall strip, a parallax season band, pitch application rows and a fee table.', 'hinata-market' ),
		)
	);
}
add_action( 'init', 'hinata_market_pattern_categories' );
