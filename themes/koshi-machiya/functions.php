<?php
/**
 * Koshi Machiya — functions and definitions.
 *
 * @package koshi-machiya
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'KOSHI_MACHIYA_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function koshi_machiya_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'koshi_machiya_setup' );

/**
 * Front-end styles.
 */
function koshi_machiya_enqueue() {
	wp_enqueue_style( 'koshi-machiya-style', get_stylesheet_uri(), array(), KOSHI_MACHIYA_VERSION );
}
add_action( 'wp_enqueue_scripts', 'koshi_machiya_enqueue' );

/**
 * The Book a stay buttons in the header, the house board and the patterns (class kc-book) are written with a site-relative
 * link ("/book/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function koshi_machiya_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'kc-book' ) ) {
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
add_filter( 'render_block_core/button', 'koshi_machiya_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function koshi_machiya_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'koshi-machiya' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a thick underline', 'koshi-machiya' ),
			'outline'   => __( 'Ink-outline panel button', 'koshi-machiya' ),
		),
		'core/separator' => array(
			'tone' => __( 'Screen-tone strip', 'koshi-machiya' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'koshi-machiya' ),
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
add_action( 'init', 'koshi_machiya_block_styles' );

/**
 * Pattern category.
 */
function koshi_machiya_pattern_categories() {
	register_block_pattern_category(
		'koshi-machiya',
		array(
			'label'       => __( 'Koshi Machiya', 'koshi-machiya' ),
			'description' => __( 'Sections for a townhouse stay laid out like a magazine: the persimmon cover with the stacked sketch collage and the cut-out townhouse, the house board, the feature spread of the rooms, the story band with the cut-out persimmon branch, the four stay steps and the journal.', 'koshi-machiya' ),
		)
	);
}
add_action( 'init', 'koshi_machiya_pattern_categories' );
