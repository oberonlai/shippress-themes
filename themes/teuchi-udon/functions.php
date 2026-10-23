<?php
/**
 * Teuchi Udon — functions and definitions.
 *
 * @package teuchi-udon
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'TEUCHI_UDON_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function teuchi_udon_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'teuchi_udon_setup' );

/**
 * Front-end styles.
 */
function teuchi_udon_enqueue() {
	wp_enqueue_style( 'teuchi-udon-style', get_stylesheet_uri(), array(), TEUCHI_UDON_VERSION );
}
add_action( 'wp_enqueue_scripts', 'teuchi_udon_enqueue' );

/**
 * The Book a seat buttons in the header, the studio board and the patterns (class tu-book) are written with a site-relative
 * link ("/visit/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function teuchi_udon_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'tu-book' ) ) {
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
add_filter( 'render_block_core/button', 'teuchi_udon_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function teuchi_udon_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'teuchi-udon' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a thick underline', 'teuchi-udon' ),
			'outline'   => __( 'Ink-outline panel button', 'teuchi-udon' ),
		),
		'core/separator' => array(
			'tone' => __( 'Screen-tone strip', 'teuchi-udon' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'teuchi-udon' ),
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
add_action( 'init', 'teuchi_udon_block_styles' );

/**
 * Pattern category.
 */
function teuchi_udon_pattern_categories() {
	register_block_pattern_category(
		'teuchi-udon',
		array(
			'label'       => __( 'Teuchi Udon', 'teuchi-udon' ),
			'description' => __( 'Sections for a neighbourhood udon shop: the chitose green hero with the hanging banner pencil sketch and the cut-out udon bowl, the udon shop board, the rooms as a card mosaic, the story band, the round steps, the journal and the letters.', 'teuchi-udon' ),
		)
	);
}
add_action( 'init', 'teuchi_udon_pattern_categories' );
