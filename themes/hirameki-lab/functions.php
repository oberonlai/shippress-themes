<?php
/**
 * Hirameki Lab — functions and definitions.
 *
 * @package hirameki-lab
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'HIRAMEKI_LAB_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function hirameki_lab_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'hirameki_lab_setup' );

/**
 * Front-end styles.
 */
function hirameki_lab_enqueue() {
	wp_enqueue_style( 'hirameki-lab-style', get_stylesheet_uri(), array(), HIRAMEKI_LAB_VERSION );
}
add_action( 'wp_enqueue_scripts', 'hirameki_lab_enqueue' );

/**
 * The Book a seat buttons in the header, the studio board and the patterns (class hl-book) are written with a site-relative
 * link ("/trial/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function hirameki_lab_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'hl-book' ) ) {
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
add_filter( 'render_block_core/button', 'hirameki_lab_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hirameki_lab_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'hirameki-lab' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a thick underline', 'hirameki-lab' ),
			'outline'   => __( 'Ihl-outline panel button', 'hirameki-lab' ),
		),
		'core/separator' => array(
			'tone' => __( 'Screen-tone strip', 'hirameki-lab' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'hirameki-lab' ),
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
add_action( 'init', 'hirameki_lab_block_styles' );

/**
 * Pattern category.
 */
function hirameki_lab_pattern_categories() {
	register_block_pattern_category(
		'hirameki-lab',
		array(
			'label'       => __( 'Hirameki Lab', 'hirameki-lab' ),
			'description' => __( 'Sections for an after-school STEM lab: the project strip, the project wall, the featured project, the courses table, lab figures and the trial band.', 'hirameki-lab' ),
		)
	);
}
add_action( 'init', 'hirameki_lab_pattern_categories' );
