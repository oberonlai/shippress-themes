<?php
/**
 * Yose Rakugo — functions and definitions.
 *
 * @package yose-rakugo
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'YOSE_RAKUGO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function yose_rakugo_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'yose_rakugo_setup' );

/**
 * Front-end styles.
 */
function yose_rakugo_enqueue() {
	wp_enqueue_style( 'yose-rakugo-style', get_stylesheet_uri(), array(), YOSE_RAKUGO_VERSION );
}
add_action( 'wp_enqueue_scripts', 'yose_rakugo_enqueue' );

/**
 * The booking buttons in the header and the programme (class ys-book) are written with a site-relative link
 * ("/classes/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function yose_rakugo_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'ys-book' ) ) {
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
add_filter( 'render_block_core/button', 'yose_rakugo_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function yose_rakugo_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'yose-rakugo' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline underline', 'yose-rakugo' ),
			'outline'   => __( 'White outline button on indigo', 'yose-rakugo' ),
		),
		'core/separator' => array(
			'waves' => __( 'Three small fan marks', 'yose-rakugo' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'yose-rakugo' ),
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
add_action( 'init', 'yose_rakugo_block_styles' );

/**
 * Pattern category.
 */
function yose_rakugo_pattern_categories() {
	register_block_pattern_category(
		'yose-rakugo',
		array(
			'label'       => __( 'Yose Rakugo', 'yose-rakugo' ),
			'description' => __( 'Sections for a rakugo theatre: the vertical banner hero with the cut-out storyteller, the bill on the kincha band, the synced door prices and the theatre details.', 'yose-rakugo' ),
		)
	);
}
add_action( 'init', 'yose_rakugo_pattern_categories' );
