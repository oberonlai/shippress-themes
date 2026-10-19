<?php
/**
 * Tsunagu Systems — functions and definitions.
 *
 * @package tsunagu-systems
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'TSUNAGU_SYSTEMS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function tsunagu_systems_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'tsunagu_systems_setup' );

/**
 * Front-end styles.
 */
function tsunagu_systems_enqueue() {
	wp_enqueue_style( 'tsunagu-systems-style', get_stylesheet_uri(), array(), TSUNAGU_SYSTEMS_VERSION );
}
add_action( 'wp_enqueue_scripts', 'tsunagu_systems_enqueue' );

/**
 * The Book a consultation buttons in the header, the studio board and the patterns (class ts-book) are written with a site-relative
 * link ("/contact/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function tsunagu_systems_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'ts-book' ) ) {
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
add_filter( 'render_block_core/button', 'tsunagu_systems_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function tsunagu_systems_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'tsunagu-systems' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a thick underline', 'tsunagu-systems' ),
			'outline'   => __( 'Ink-outline panel button', 'tsunagu-systems' ),
		),
		'core/separator' => array(
			'tone' => __( 'Screen-tone strip', 'tsunagu-systems' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'tsunagu-systems' ),
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
add_action( 'init', 'tsunagu_systems_block_styles' );

/**
 * Pattern category.
 */
function tsunagu_systems_pattern_categories() {
	register_block_pattern_category(
		'tsunagu-systems',
		array(
			'label'       => __( 'Tsunagu Systems', 'tsunagu-systems' ),
			'description' => __( 'Sections for an IT services company: the system-diagram hero, the plan comparison table, the five parts, onboarding, questions, one case and the consultation band.', 'tsunagu-systems' ),
		)
	);
}
add_action( 'init', 'tsunagu_systems_pattern_categories' );
