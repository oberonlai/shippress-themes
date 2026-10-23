<?php
/**
 * Hari Kampo — functions and definitions.
 *
 * @package hari-kampo
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'HARI_KAMPO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function hari_kampo_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'hari_kampo_setup' );

/**
 * Front-end styles.
 */
function hari_kampo_enqueue() {
	wp_enqueue_style( 'hari-kampo-style', get_stylesheet_uri(), array(), HARI_KAMPO_VERSION );
}
add_action( 'wp_enqueue_scripts', 'hari_kampo_enqueue' );

/**
 * The booking buttons in the header and the patterns (class hk-book) are written with a site-relative link
 * ("/classes/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function hari_kampo_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'hk-book' ) ) {
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
add_filter( 'render_block_core/button', 'hari_kampo_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hari_kampo_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'hari-kampo' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline underline', 'hari-kampo' ),
			'outline'   => __( 'White outline button on indigo', 'hari-kampo' ),
		),
		'core/separator' => array(
			'waves' => __( 'Three small leaf marks', 'hari-kampo' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'hari-kampo' ),
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
add_action( 'init', 'hari_kampo_block_styles' );

/**
 * Pattern category.
 */
function hari_kampo_pattern_categories() {
	register_block_pattern_category(
		'hari-kampo',
		array(
			'label'       => __( 'Hari Kampo', 'hari-kampo' ),
			'description' => __( 'Sections for a kampo pharmacy: the stacked-collage hero with the cut-out ginseng, the herb-drawer masonry, the synced consultation fees and the pharmacy details.', 'hari-kampo' ),
		)
	);
}
add_action( 'init', 'hari_kampo_pattern_categories' );
