<?php
/**
 * Ichiba Monozukuri — functions and definitions.
 *
 * @package ichiba-monozukuri
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'ICHIBA_MONOZUKURI_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function ichiba_monozukuri_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'ichiba_monozukuri_setup' );

/**
 * Front-end styles.
 */
function ichiba_monozukuri_enqueue() {
	wp_enqueue_style( 'ichiba-monozukuri-style', get_stylesheet_uri(), array(), ICHIBA_MONOZUKURI_VERSION );
}
add_action( 'wp_enqueue_scripts', 'ichiba_monozukuri_enqueue' );

/**
 * The booking buttons in the header, the market board and the patterns (class im-book) are written with a site-relative
 * link ("/contact/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function ichiba_monozukuri_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'im-book' ) ) {
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
add_filter( 'render_block_core/button', 'ichiba_monozukuri_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function ichiba_monozukuri_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'ichiba-monozukuri' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline underline', 'ichiba-monozukuri' ),
			'outline'   => __( 'Night-ink outline button', 'ichiba-monozukuri' ),
		),
		'core/separator' => array(
			'stars' => __( 'Three small stars', 'ichiba-monozukuri' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'ichiba-monozukuri' ),
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
add_action( 'init', 'ichiba_monozukuri_block_styles' );

/**
 * Pattern category.
 */
function ichiba_monozukuri_pattern_categories() {
	register_block_pattern_category(
		'ichiba-monozukuri',
		array(
			'label'       => __( 'Ichiba Monozukuri', 'ichiba-monozukuri' ),
			'description' => __( 'Sections for a monthly craft market: the indigo stacked-collage hero with the cut-out still life, the market board, the four kinds of stall, the season band, the market-day timeline and the latest journal notes.', 'ichiba-monozukuri' ),
		)
	);
}
add_action( 'init', 'ichiba_monozukuri_pattern_categories' );
