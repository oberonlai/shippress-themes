<?php
/**
 * Mado Air: functions and definitions.
 *
 * @package mado-air
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'MADO_AIR_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function mado_air_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'mado_air_setup' );

/**
 * Front-end styles and the scroll script (head, not deferred, as sp-scroll requires).
 */
function mado_air_enqueue() {
	wp_enqueue_style( 'mado-air-style', get_stylesheet_uri(), array(), MADO_AIR_VERSION );
	wp_enqueue_style( 'mado-air-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'mado-air-style' ), MADO_AIR_VERSION );
	wp_enqueue_script( 'mado-air-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), MADO_AIR_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'mado_air_enqueue' );

/**
 * Pattern category.
 */
function mado_air_pattern_categories() {
	register_block_pattern_category(
		'mado-air',
		array(
			'label'       => __( 'Mado Air', 'mado-air' ),
			'description' => __( 'Sections for a product-launch landing page: the crossfading window-sill hero, the info bar, the grey technology band with a line-art cutaway, the dark design band, the square gallery, specs, early-tester stories, the pre-order card and the FAQ.', 'mado-air' ),
		)
	);
}
add_action( 'init', 'mado_air_pattern_categories' );

/**
 * Group attribute `spPar` (parallax speed, e.g. "8%") becomes an inline custom property; the hero photo layer is hidden from assistive tech.
 *
 * @param string $html  Block HTML.
 * @param array  $block Parsed block.
 * @return string
 */
function mado_air_group_extras( $html, $block ) {
	$a = $block['attrs'] ?? array();
	$p = new WP_HTML_Tag_Processor( $html );
	if ( ! $p->next_tag() ) {
		return $html;
	}
	if ( ! empty( $a['spPar'] ) && preg_match( '/^-?\d+(\.\d+)?%$/', $a['spPar'] ) ) {
		$p->set_attribute( 'style', '--sp-par:' . $a['spPar'] );
	}
	// The crossfading hero photographs are decoration for the title beside them: keep them out of the accessibility tree.
	if ( $p->has_class( 'ma-hero__layer' ) ) {
		$p->set_attribute( 'aria-hidden', 'true' );
	}
	return $p->get_updated_html();
}
add_filter( 'render_block_core/group', 'mado_air_group_extras', 10, 2 );
