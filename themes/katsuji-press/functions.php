<?php
/**
 * Katsuji Press — functions and definitions.
 *
 * @package katsuji-press
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'KATSUJI_PRESS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function katsuji_press_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'katsuji_press_setup' );

/**
 * Front-end styles.
 */
function katsuji_press_enqueue() {
	wp_enqueue_style( 'katsuji-press-style', get_stylesheet_uri(), array(), KATSUJI_PRESS_VERSION );
}
add_action( 'wp_enqueue_scripts', 'katsuji_press_enqueue' );

/**
 * The booking buttons in the header and the patterns (class kp-book) are written with a site-relative link
 * ("/classes/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function katsuji_press_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'kp-book' ) ) {
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
add_filter( 'render_block_core/button', 'katsuji_press_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function katsuji_press_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'katsuji-press' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline underline', 'katsuji-press' ),
			'outline'   => __( 'White outline button on indigo', 'katsuji-press' ),
		),
		'core/separator' => array(
			'waves' => __( 'Three small leaf marks', 'katsuji-press' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'katsuji-press' ),
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
add_action( 'init', 'katsuji_press_block_styles' );

/**
 * Pattern category.
 */
function katsuji_press_pattern_categories() {
	register_block_pattern_category(
		'katsuji-press',
		array(
			'label'       => __( 'Katsuji Press', 'katsuji-press' ),
			'description' => __( 'Sections for a letterpress print shop: the asagi hero with the cut-out platen press, the horizontal print-menu strip, the collage process band, the synced print menu and the press details.', 'katsuji-press' ),
		)
	);
}
add_action( 'init', 'katsuji_press_pattern_categories' );
