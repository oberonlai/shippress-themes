<?php
/**
 * Asahi Gakuen — functions and definitions.
 *
 * @package asahi-gakuen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'ASAHI_GAKUEN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function asahi_gakuen_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'asahi_gakuen_setup' );

/**
 * Front-end styles.
 */
function asahi_gakuen_enqueue() {
	wp_enqueue_style( 'asahi-gakuen-style', get_stylesheet_uri(), array(), ASAHI_GAKUEN_VERSION );
}
add_action( 'wp_enqueue_scripts', 'asahi_gakuen_enqueue' );

/**
 * The Book a consultation buttons in the header, the studio board and the patterns (class ag-book) are written with a site-relative
 * link ("/contact/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function asahi_gakuen_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'ag-book' ) ) {
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
add_filter( 'render_block_core/button', 'asahi_gakuen_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function asahi_gakuen_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'asahi-gakuen' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a thick underline', 'asahi-gakuen' ),
			'outline'   => __( 'Ink-outline panel button', 'asahi-gakuen' ),
		),
		'core/separator' => array(
			'tone' => __( 'Screen-tone strip', 'asahi-gakuen' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'asahi-gakuen' ),
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
add_action( 'init', 'asahi_gakuen_block_styles' );

/**
 * Pattern category.
 */
function asahi_gakuen_pattern_categories() {
	register_block_pattern_category(
		'asahi-gakuen',
		array(
			'label'       => __( 'Asahi Gakuen', 'asahi-gakuen' ),
			'description' => __( 'Sections for an independent high school: the type poster first screen, the portrait index, an interview, the school year, people in figures, admissions and notices.', 'asahi-gakuen' ),
		)
	);
}
add_action( 'init', 'asahi_gakuen_pattern_categories' );
