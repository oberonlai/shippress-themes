<?php
/**
 * Kanna Komuten — functions and definitions.
 *
 * @package kanna-komuten
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'KANNA_KOMUTEN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function kanna_komuten_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'kanna_komuten_setup' );

/**
 * Front-end styles.
 */
function kanna_komuten_enqueue() {
	wp_enqueue_style( 'kanna-komuten-style', get_stylesheet_uri(), array(), KANNA_KOMUTEN_VERSION );
}
add_action( 'wp_enqueue_scripts', 'kanna_komuten_enqueue' );

/**
 * The Request a survey buttons in the header, the workshop board and the patterns (class kn-book) are written with a site-relative
 * link ("/survey/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function kanna_komuten_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'kn-book' ) ) {
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
add_filter( 'render_block_core/button', 'kanna_komuten_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kanna_komuten_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'kanna-komuten' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a thick underline', 'kanna-komuten' ),
			'outline'   => __( 'Ink-outline panel button', 'kanna-komuten' ),
		),
		'core/separator' => array(
			'tone' => __( 'Screen-tone strip', 'kanna-komuten' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'kanna-komuten' ),
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
add_action( 'init', 'kanna_komuten_block_styles' );

/**
 * Pattern category.
 */
function kanna_komuten_pattern_categories() {
	register_block_pattern_category(
		'kanna-komuten',
		array(
			'label'       => __( 'Kanna Komuten', 'kanna-komuten' ),
			'description' => __( 'Sections for a machiya carpentry workshop in split screens: the turmeric-yellow hero half over a full-bleed film photograph with the cut-out hand plane, the workshop board, recent projects, the workshop story band, the four working steps and the journal.', 'kanna-komuten' ),
		)
	);
}
add_action( 'init', 'kanna_komuten_pattern_categories' );
