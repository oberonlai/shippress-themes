<?php
/**
 * Hidamari Care — functions and definitions.
 *
 * @package hidamari-care
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'HIDAMARI_CARE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function hidamari_care_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'hidamari_care_setup' );

/**
 * Front-end styles.
 */
function hidamari_care_enqueue() {
	wp_enqueue_style( 'hidamari-care-style', get_stylesheet_uri(), array(), HIDAMARI_CARE_VERSION );
}
add_action( 'wp_enqueue_scripts', 'hidamari_care_enqueue' );

/**
 * The Book a seat buttons in the header, the studio board and the patterns (class hc-book) are written with a site-relative
 * link ("/visit/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function hidamari_care_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'hc-book' ) ) {
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
add_filter( 'render_block_core/button', 'hidamari_care_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hidamari_care_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'hidamari-care' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a thick underline', 'hidamari-care' ),
			'outline'   => __( 'Ink-outline panel button', 'hidamari-care' ),
		),
		'core/separator' => array(
			'tone' => __( 'Screen-tone strip', 'hidamari-care' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'hidamari-care' ),
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
add_action( 'init', 'hidamari_care_block_styles' );

/**
 * Pattern category.
 */
function hidamari_care_pattern_categories() {
	register_block_pattern_category(
		'hidamari-care',
		array(
			'label'       => __( 'Hidamari Care', 'hidamari-care' ),
			'description' => __( 'Sections for a senior care residence: the day-line hero, the hour-by-hour schedule, rooms and care, fees, the visiting calendar, family voices and contact.', 'hidamari-care' ),
		)
	);
}
add_action( 'init', 'hidamari_care_pattern_categories' );
