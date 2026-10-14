<?php
/**
 * Kumotori Hut — functions and definitions.
 *
 * @package kumotori-hut
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/hut-info.php';

define( 'KUMOTORI_HUT_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function kumotori_hut_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'kumotori_hut_setup' );

/**
 * Front-end styles.
 */
function kumotori_hut_enqueue() {
	wp_enqueue_style( 'kumotori-hut-style', get_stylesheet_uri(), array(), KUMOTORI_HUT_VERSION );
}
add_action( 'wp_enqueue_scripts', 'kumotori_hut_enqueue' );

/**
 * The Visit page's message script loads only on the page that holds the form.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function kumotori_hut_group( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false !== strpos( $class, 'kh-visit' ) ) {
		wp_enqueue_script( 'kumotori-hut-visit', get_theme_file_uri( 'assets/js/visit.js' ), array(), KUMOTORI_HUT_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	}
	return $content;
}
add_filter( 'render_block_core/group', 'kumotori_hut_group', 10, 2 );

/**
 * The booking buttons in the header and the phone strip (class kh-book) are written with a site-relative link
 * ("/stay/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function kumotori_hut_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'kh-book' ) ) {
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
add_filter( 'render_block_core/button', 'kumotori_hut_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kumotori_hut_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'kumotori-hut' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline underline', 'kumotori-hut' ),
			'outline'   => __( 'Blue-ink outline button', 'kumotori-hut' ),
		),
		'core/separator' => array(
			'tiles' => __( 'Three small tiles', 'kumotori-hut' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'kumotori-hut' ),
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
add_action( 'init', 'kumotori_hut_block_styles' );

/**
 * Pattern category.
 */
function kumotori_hut_pattern_categories() {
	register_block_pattern_category(
		'kumotori-hut',
		array(
			'label'       => __( 'Kumotori Hut', 'kumotori-hut' ),
			'description' => __( 'Quiet sections for a mountain hut: the trail map, routes, the rates card, the season and the contact details.', 'kumotori-hut' ),
		)
	);
}
add_action( 'init', 'kumotori_hut_pattern_categories' );
