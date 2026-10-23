<?php
/**
 * Akachōchin — functions and definitions.
 *
 * @package akachochin-izakaya
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'AKACHOCHIN_IZAKAYA_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function akachochin_izakaya_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'akachochin_izakaya_setup' );

/**
 * Front-end styles.
 */
function akachochin_izakaya_enqueue() {
	wp_enqueue_style( 'akachochin-izakaya-style', get_stylesheet_uri(), array(), AKACHOCHIN_IZAKAYA_VERSION );
}
add_action( 'wp_enqueue_scripts', 'akachochin_izakaya_enqueue' );

/**
 * The booking buttons in the header and the patterns (class ak-book) are written with a site-relative link
 * ("/classes/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function akachochin_izakaya_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'ak-book' ) ) {
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
add_filter( 'render_block_core/button', 'akachochin_izakaya_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function akachochin_izakaya_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'akachochin-izakaya' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline underline', 'akachochin-izakaya' ),
			'outline'   => __( 'Sumi outline button', 'akachochin-izakaya' ),
		),
		'core/separator' => array(
			'waves' => __( 'Three small leaf marks', 'akachochin-izakaya' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'akachochin-izakaya' ),
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
add_action( 'init', 'akachochin_izakaya_block_styles' );

/**
 * Pattern category.
 */
function akachochin_izakaya_pattern_categories() {
	register_block_pattern_category(
		'akachochin-izakaya',
		array(
			'label'       => __( 'Akachōchin', 'akachochin-izakaya' ),
			'description' => __( 'Sections for an izakaya: the vermilion hero with vertical banners and the cut-out lantern, the card mosaic, the synced board of dishes and the shop details.', 'akachochin-izakaya' ),
		)
	);
}
add_action( 'init', 'akachochin_izakaya_pattern_categories' );
