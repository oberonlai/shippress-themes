<?php
/**
 * Denki Components — functions and definitions.
 *
 * @package denki-components
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'DENKI_COMPONENTS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function denki_components_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'denki_components_setup' );

/**
 * Front-end styles and the scroll-effects script (sp-scroll). The script loads in the head, not deferred, so
 * html.sp-js is set before the first paint and nothing flashes.
 */
function denki_components_enqueue() {
	wp_enqueue_style( 'denki-components-style', get_stylesheet_uri(), array(), DENKI_COMPONENTS_VERSION );
	wp_enqueue_style( 'denki-components-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'denki-components-style' ), DENKI_COMPONENTS_VERSION );
	wp_enqueue_script( 'denki-components-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), DENKI_COMPONENTS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'denki_components_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function denki_components_block_styles() {
	register_block_style(
		'core/button',
		array(
			'name'  => 'pill',
			'label' => __( 'Pill with disc', 'denki-components' ),
		)
	);
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'index-label',
			'label' => __( 'Index label', 'denki-components' ),
		)
	);
}
add_action( 'init', 'denki_components_block_styles' );

/**
 * Pattern category.
 */
function denki_components_pattern_categories() {
	register_block_pattern_category(
		'denki-components',
		array(
			'label'       => __( 'Denki Components', 'denki-components' ),
			'description' => __( 'Sections for a components maker: the headline over a band of figures and a framed reel-line photograph, hairline product rows with indexed labels, a monthly ledger beside a sticky photograph, a staggered plant photo field, case rows and a sample-kit price list.', 'denki-components' ),
		)
	);
}
add_action( 'init', 'denki_components_pattern_categories' );
