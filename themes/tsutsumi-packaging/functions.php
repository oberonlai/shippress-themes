<?php
/**
 * Tsutsumi Packaging — functions and definitions.
 *
 * @package tsutsumi-packaging
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'TSUTSUMI_PACKAGING_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function tsutsumi_packaging_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'tsutsumi_packaging_setup' );

/**
 * Front-end styles.
 */
function tsutsumi_packaging_enqueue() {
	wp_enqueue_style( 'tsutsumi-packaging-style', get_stylesheet_uri(), array(), TSUTSUMI_PACKAGING_VERSION );
}
add_action( 'wp_enqueue_scripts', 'tsutsumi_packaging_enqueue' );

/**
 * The Book a consultation buttons in the header, the studio board and the patterns (class tp-book) are written with a site-relative
 * link ("/contact/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function tsutsumi_packaging_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'tp-book' ) ) {
		return $content;
	}
	return preg_replace_callback(
		'#href="(/[^"/][^"]*|/)"#',
		function ( $m ) {
			$raw   = html_entity_decode( $m[1] );
			$path  = (string) wp_parse_url( $raw, PHP_URL_PATH );
			$rest  = substr( $raw, strlen( $path ) );
			$page  = '' !== trim( $path, '/' ) ? get_page_by_path( trim( $path, '/' ) ) : null;
			$url   = ( $page && 'publish' === $page->post_status ) ? get_permalink( $page ) . $rest : home_url( $raw );
			return 'href="' . esc_url( $url ) . '"';
		},
		$content,
		1
	);
}
add_filter( 'render_block_core/button', 'tsutsumi_packaging_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function tsutsumi_packaging_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'tsutsumi-packaging' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a thick underline', 'tsutsumi-packaging' ),
			'outline'   => __( 'Ink-outline panel button', 'tsutsumi-packaging' ),
		),
		'core/separator' => array(
			'tone' => __( 'Screen-tone strip', 'tsutsumi-packaging' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'tsutsumi-packaging' ),
		),
	);

	foreach ( $styles as $block => $variations ) {
		foreach ( $variations as $name => $label ) {
			register_block_style(
				$block,
				array(
					'name'  => $name,
					'label' => $label,
				)
			);
		}
	}
}
add_action( 'init', 'tsutsumi_packaging_block_styles' );

/**
 * Pattern category.
 */
function tsutsumi_packaging_pattern_categories() {
	register_block_pattern_category(
		'tsutsumi-packaging',
		array(
			'label'       => __( 'Tsutsumi Packaging', 'tsutsumi-packaging' ),
			'description' => __( 'Sections for a packaging manufacturer: the spec table first screen, material swatches, the custom-order flow, quality tests, downloads and the sample request band.', 'tsutsumi-packaging' ),
		)
	);
}
add_action( 'init', 'tsutsumi_packaging_pattern_categories' );
