<?php
/**
 * Kamisori Barber — functions and definitions.
 *
 * @package kamisori-barber
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'KAMISORI_BARBER_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function kamisori_barber_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'kamisori_barber_setup' );

/**
 * Front-end styles.
 */
function kamisori_barber_enqueue() {
	wp_enqueue_style( 'kamisori-barber-style', get_stylesheet_uri(), array(), KAMISORI_BARBER_VERSION );
}
add_action( 'wp_enqueue_scripts', 'kamisori_barber_enqueue' );

/**
 * The Book a seat buttons in the header, the studio board and the patterns (class kb-book) are written with a site-relative
 * link ("/visit/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function kamisori_barber_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'kb-book' ) ) {
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
add_filter( 'render_block_core/button', 'kamisori_barber_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kamisori_barber_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'kamisori-barber' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a thick underline', 'kamisori-barber' ),
			'outline'   => __( 'Ink-outline panel button', 'kamisori-barber' ),
		),
		'core/separator' => array(
			'tone' => __( 'Screen-tone strip', 'kamisori-barber' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'kamisori-barber' ),
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
add_action( 'init', 'kamisori_barber_block_styles' );

/**
 * Pattern category.
 */
function kamisori_barber_pattern_categories() {
	register_block_pattern_category(
		'kamisori-barber',
		array(
			'label'       => __( 'Kamisori Barber', 'kamisori-barber' ),
			'description' => __( 'Sections for a small barbershop: the kyo-murasaki hero with the cut-out chair breaking out of the window frame, the shop board, the services as long-column chapters, the story band, the four parts of a visit and the journal.', 'kamisori-barber' ),
		)
	);
}
add_action( 'init', 'kamisori_barber_pattern_categories' );
