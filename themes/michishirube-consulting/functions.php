<?php
/**
 * Michishirube Consulting — functions and definitions.
 *
 * @package michishirube-consulting
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'MICHISHIRUBE_CONSULTING_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function michishirube_consulting_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'michishirube_consulting_setup' );

/**
 * Front-end styles.
 */
function michishirube_consulting_enqueue() {
	wp_enqueue_style( 'michishirube-consulting-style', get_stylesheet_uri(), array(), MICHISHIRUBE_CONSULTING_VERSION );
}
add_action( 'wp_enqueue_scripts', 'michishirube_consulting_enqueue' );

/**
 * The Book a seat buttons in the header, the studio board and the patterns (class mc-book) are written with a site-relative
 * link ("/contact/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function michishirube_consulting_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'mc-book' ) ) {
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
add_filter( 'render_block_core/button', 'michishirube_consulting_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function michishirube_consulting_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'michishirube-consulting' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a thick underline', 'michishirube-consulting' ),
			'outline'   => __( 'Ink-outline panel button', 'michishirube-consulting' ),
		),
		'core/separator' => array(
			'tone' => __( 'Screen-tone strip', 'michishirube-consulting' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'michishirube-consulting' ),
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
add_action( 'init', 'michishirube_consulting_block_styles' );

/**
 * Pattern category.
 */
function michishirube_consulting_pattern_categories() {
	register_block_pattern_category(
		'michishirube-consulting',
		array(
			'label'       => __( 'Michishirube Consulting', 'michishirube-consulting' ),
			'description' => __( 'Sections for a management consulting firm: the deep navy hero with the framed boardroom photo and the cut-out consultant, the office board, the services, the story band, the steps, the insights and the briefing.', 'michishirube-consulting' ),
		)
	);
}
add_action( 'init', 'michishirube_consulting_pattern_categories' );
