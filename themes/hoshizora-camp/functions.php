<?php
/**
 * Hoshizora Camp — functions and definitions.
 *
 * @package hoshizora-camp
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'HOSHIZORA_CAMP_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function hoshizora_camp_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'hoshizora_camp_setup' );

/**
 * Front-end styles.
 */
function hoshizora_camp_enqueue() {
	wp_enqueue_style( 'hoshizora-camp-style', get_stylesheet_uri(), array(), HOSHIZORA_CAMP_VERSION );
}
add_action( 'wp_enqueue_scripts', 'hoshizora_camp_enqueue' );

/**
 * The booking buttons in the header, the camp board and the patterns (class hz-book) are written with a site-relative
 * link ("/contact/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function hoshizora_camp_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'hz-book' ) ) {
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
add_filter( 'render_block_core/button', 'hoshizora_camp_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hoshizora_camp_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'hoshizora-camp' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline underline', 'hoshizora-camp' ),
			'outline'   => __( 'Night-ink outline button', 'hoshizora-camp' ),
		),
		'core/separator' => array(
			'stars' => __( 'Three small stars', 'hoshizora-camp' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'hoshizora-camp' ),
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
add_action( 'init', 'hoshizora_camp_block_styles' );

/**
 * Pattern category.
 */
function hoshizora_camp_pattern_categories() {
	register_block_pattern_category(
		'hoshizora-camp',
		array(
			'label'       => __( 'Hoshizora Camp', 'hoshizora-camp' ),
			'description' => __( 'Sections for a glamping site: the dove-grey scene-map hero with the cut-out tent, the four ways to stay, the silver-grass band, the night timeline with the cut-out lantern, and the synced camp board, details and rates.', 'hoshizora-camp' ),
		)
	);
}
add_action( 'init', 'hoshizora_camp_pattern_categories' );
