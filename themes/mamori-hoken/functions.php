<?php
/**
 * Mamori Hoken — functions and definitions.
 *
 * @package mamori-hoken
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'MAMORI_HOKEN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function mamori_hoken_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'mamori_hoken_setup' );

/**
 * Front-end styles.
 */
function mamori_hoken_enqueue() {
	wp_enqueue_style( 'mamori-hoken-style', get_stylesheet_uri(), array(), MAMORI_HOKEN_VERSION );
}
add_action( 'wp_enqueue_scripts', 'mamori_hoken_enqueue' );

/**
 * The Book a seat buttons in the header, the studio board and the patterns (class mh-book) are written with a site-relative
 * link ("/visit/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function mamori_hoken_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'mh-book' ) ) {
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
add_filter( 'render_block_core/button', 'mamori_hoken_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function mamori_hoken_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'mamori-hoken' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a thick underline', 'mamori-hoken' ),
			'outline'   => __( 'Ink-outline panel button', 'mamori-hoken' ),
		),
		'core/separator' => array(
			'tone' => __( 'Screen-tone strip', 'mamori-hoken' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'mamori-hoken' ),
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
add_action( 'init', 'mamori_hoken_block_styles' );

/**
 * Pattern category.
 */
function mamori_hoken_pattern_categories() {
	register_block_pattern_category(
		'mamori-hoken',
		array(
			'label'       => __( 'Mamori Hoken', 'mamori-hoken' ),
			'description' => __( 'Sections for a neighbourhood insurance agency: the hanada hero with the framed family photo and the cut-out document folder, the office board, the cover as a card mosaic, the story band, the round steps, the notes and the letters.', 'mamori-hoken' ),
		)
	);
}
add_action( 'init', 'mamori_hoken_pattern_categories' );
