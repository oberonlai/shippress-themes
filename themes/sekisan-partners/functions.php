<?php
/**
 * Sekisan Partners: functions and definitions.
 *
 * @package sekisan-partners
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'SEKISAN_PARTNERS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function sekisan_partners_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'sekisan_partners_setup' );

/**
 * Front-end styles, and the scroll-effect script in the head (not deferred, so html.sp-js is set before the first paint).
 */
function sekisan_partners_enqueue() {
	wp_enqueue_style( 'sekisan-partners-style', get_stylesheet_uri(), array(), SEKISAN_PARTNERS_VERSION );
	wp_enqueue_style( 'sekisan-partners-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'sekisan-partners-style' ), SEKISAN_PARTNERS_VERSION );
	wp_enqueue_script( 'sekisan-partners-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SEKISAN_PARTNERS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'sekisan_partners_enqueue' );

/**
 * Block style variations for the square buttons. All CSS lives in style.css.
 */
function sekisan_partners_block_styles() {
	$styles = array(
		'sk-wide'    => __( 'Wide square (3 px border, arrow)', 'sekisan-partners' ),
		'sk-outline' => __( 'Outline on a photo (2 px)', 'sekisan-partners' ),
		'sk-dark'    => __( 'Wide square on the dark block', 'sekisan-partners' ),
	);
	foreach ( $styles as $name => $label ) {
		register_block_style(
			'core/button',
			array(
				'name'  => $name,
				'label' => $label,
			)
		);
	}
}
add_action( 'init', 'sekisan_partners_block_styles' );

/**
 * Pattern category.
 */
function sekisan_partners_pattern_categories() {
	register_block_pattern_category(
		'sekisan-partners',
		array(
			'label'       => __( 'Sekisan Partners', 'sekisan-partners' ),
			'description' => __( 'Sections for a building cost consultancy: the full-bleed cost-plan photograph beside the ink rail, the gap panel, numbered index rows, the estimate, the handover cards, the fee table, the cases band, the people list and the single request block.', 'sekisan-partners' ),
		)
	);
}
add_action( 'init', 'sekisan_partners_pattern_categories' );
