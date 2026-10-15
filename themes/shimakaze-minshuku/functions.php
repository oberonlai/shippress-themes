<?php
/**
 * Shimakaze Minshuku — functions and definitions.
 *
 * @package shimakaze-minshuku
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'SHIMAKAZE_MINSHUKU_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function shimakaze_minshuku_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'shimakaze_minshuku_setup' );

/**
 * Front-end styles.
 */
function shimakaze_minshuku_enqueue() {
	wp_enqueue_style( 'shimakaze-minshuku-style', get_stylesheet_uri(), array(), SHIMAKAZE_MINSHUKU_VERSION );
}
add_action( 'wp_enqueue_scripts', 'shimakaze_minshuku_enqueue' );

/**
 * The booking buttons in the header bar and the rooms grid (class sm-book) are written with a site-relative link
 * ("/stay/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function shimakaze_minshuku_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'sm-book' ) ) {
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
add_filter( 'render_block_core/button', 'shimakaze_minshuku_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function shimakaze_minshuku_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'shimakaze-minshuku' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline underline', 'shimakaze-minshuku' ),
			'outline'   => __( 'Indigo outline button', 'shimakaze-minshuku' ),
		),
		'core/separator' => array(
			'waves' => __( 'Three small wave marks', 'shimakaze-minshuku' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'shimakaze-minshuku' ),
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
add_action( 'init', 'shimakaze_minshuku_block_styles' );

/**
 * Pattern category.
 */
function shimakaze_minshuku_pattern_categories() {
	register_block_pattern_category(
		'shimakaze-minshuku',
		array(
			'label'       => __( 'Shimakaze Minshuku', 'shimakaze-minshuku' ),
			'description' => __( 'Sections for an island guesthouse: the rooms grid, dinner, island days, the synced rates card and the inn details.', 'shimakaze-minshuku' ),
		)
	);
}
add_action( 'init', 'shimakaze_minshuku_pattern_categories' );
