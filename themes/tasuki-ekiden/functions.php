<?php
/**
 * Tasuki Ekiden — functions and definitions.
 *
 * @package tasuki-ekiden
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'TASUKI_EKIDEN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function tasuki_ekiden_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'tasuki_ekiden_setup' );

/**
 * Front-end styles.
 */
function tasuki_ekiden_enqueue() {
	wp_enqueue_style( 'tasuki-ekiden-style', get_stylesheet_uri(), array(), TASUKI_EKIDEN_VERSION );
}
add_action( 'wp_enqueue_scripts', 'tasuki_ekiden_enqueue' );

/**
 * The Enter a team buttons in the header, the race board and the patterns (class te-book) are written with a site-relative
 * link ("/enter/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function tasuki_ekiden_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'te-book' ) ) {
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
add_filter( 'render_block_core/button', 'tasuki_ekiden_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function tasuki_ekiden_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'tasuki-ekiden' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a thick underline', 'tasuki-ekiden' ),
			'outline'   => __( 'Ink-outline panel button', 'tasuki-ekiden' ),
		),
		'core/separator' => array(
			'tone' => __( 'Screen-tone strip', 'tasuki-ekiden' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'tasuki-ekiden' ),
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
add_action( 'init', 'tasuki_ekiden_block_styles' );

/**
 * Pattern category.
 */
function tasuki_ekiden_pattern_categories() {
	register_block_pattern_category(
		'tasuki-ekiden',
		array(
			'label'       => __( 'Tasuki Ekiden', 'tasuki-ekiden' ),
			'description' => __( 'Sections for a community relay race: the text-left, art-right hero with the cut-out runner, the race board, the course as a horizontal strip, the sash band, race-day steps and the journal.', 'tasuki-ekiden' ),
		)
	);
}
add_action( 'init', 'tasuki_ekiden_pattern_categories' );
