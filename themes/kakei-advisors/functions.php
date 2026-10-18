<?php
/**
 * Kakei Advisors — functions and definitions.
 *
 * @package kakei-advisors
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'KAKEI_ADVISORS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function kakei_advisors_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'kakei_advisors_setup' );

/**
 * Front-end styles.
 */
function kakei_advisors_enqueue() {
	wp_enqueue_style( 'kakei-advisors-style', get_stylesheet_uri(), array(), KAKEI_ADVISORS_VERSION );
}
add_action( 'wp_enqueue_scripts', 'kakei_advisors_enqueue' );

/**
 * The Book a seat buttons in the header, the studio board and the patterns (class ka-book) are written with a site-relative
 * link ("/meeting/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function kakei_advisors_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'ka-book' ) ) {
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
add_filter( 'render_block_core/button', 'kakei_advisors_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kakei_advisors_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'kakei-advisors' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a thick underline', 'kakei-advisors' ),
			'outline'   => __( 'Ink-outline panel button', 'kakei-advisors' ),
		),
		'core/separator' => array(
			'tone' => __( 'Screen-tone strip', 'kakei-advisors' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'kakei-advisors' ),
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
add_action( 'init', 'kakei_advisors_block_styles' );

/**
 * Pattern category.
 */
function kakei_advisors_pattern_categories() {
	register_block_pattern_category(
		'kakei-advisors',
		array(
			'label'       => __( 'Kakei Advisors', 'kakei-advisors' ),
			'description' => __( 'Sections for an independent financial planner: the pine-green hero with the framed meeting-room window and the cut-out olive tree, the office board, the services as horizontal strips, the life-stage strip, the story band, the notes and the newsletter.', 'kakei-advisors' ),
		)
	);
}
add_action( 'init', 'kakei_advisors_pattern_categories' );
