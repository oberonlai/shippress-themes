<?php
/**
 * Koma Manga — functions and definitions.
 *
 * @package koma-manga
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'KOMA_MANGA_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function koma_manga_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'koma_manga_setup' );

/**
 * Front-end styles.
 */
function koma_manga_enqueue() {
	wp_enqueue_style( 'koma-manga-style', get_stylesheet_uri(), array(), KOMA_MANGA_VERSION );
}
add_action( 'wp_enqueue_scripts', 'koma_manga_enqueue' );

/**
 * The commission buttons in the header, the studio board and the patterns (class km-book) are written with a site-relative
 * link ("/contact/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function koma_manga_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'km-book' ) ) {
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
add_filter( 'render_block_core/button', 'koma_manga_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function koma_manga_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'koma-manga' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a thick underline', 'koma-manga' ),
			'outline'   => __( 'Ink-outline panel button', 'koma-manga' ),
		),
		'core/separator' => array(
			'tone' => __( 'Screen-tone strip', 'koma-manga' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'koma-manga' ),
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
add_action( 'init', 'koma_manga_block_styles' );

/**
 * Pattern category.
 */
function koma_manga_pattern_categories() {
	register_block_pattern_category(
		'koma-manga',
		array(
			'label'       => __( 'Koma Manga', 'koma-manga' ),
			'description' => __( 'Sections for a manga artist portfolio: the giant-type hero over a clay collage with the cut-out artist, the studio board, works as a manga page, the serial band, the four-panel process strip and the latest studio notes.', 'koma-manga' ),
		)
	);
}
add_action( 'init', 'koma_manga_pattern_categories' );
