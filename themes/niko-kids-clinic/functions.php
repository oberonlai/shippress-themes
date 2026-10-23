<?php
/**
 * Niko Kids Clinic — functions and definitions.
 *
 * @package niko-kids-clinic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'NIKO_KIDS_CLINIC_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function niko_kids_clinic_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'niko_kids_clinic_setup' );

/**
 * Front-end styles.
 */
function niko_kids_clinic_enqueue() {
	wp_enqueue_style( 'niko-kids-clinic-style', get_stylesheet_uri(), array(), NIKO_KIDS_CLINIC_VERSION );
}
add_action( 'wp_enqueue_scripts', 'niko_kids_clinic_enqueue' );

/**
 * The Book a seat buttons in the header, the studio board and the patterns (class nk-book) are written with a site-relative
 * link ("/trial/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function niko_kids_clinic_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'nk-book' ) ) {
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
add_filter( 'render_block_core/button', 'niko_kids_clinic_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function niko_kids_clinic_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'niko-kids-clinic' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a thick underline', 'niko-kids-clinic' ),
			'outline'   => __( 'Ink-outline panel button', 'niko-kids-clinic' ),
		),
		'core/separator' => array(
			'tone' => __( 'Screen-tone strip', 'niko-kids-clinic' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'niko-kids-clinic' ),
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
add_action( 'init', 'niko_kids_clinic_block_styles' );

/**
 * Pattern category.
 */
function niko_kids_clinic_pattern_categories() {
	register_block_pattern_category(
		'niko-kids-clinic',
		array(
			'label'       => __( 'Niko Kids Clinic', 'niko-kids-clinic' ),
			'description' => __( 'Sections for a paediatric clinic: the diagonal-split hero with the photo collage and the cut-out teddy bear, the clinic board, the care index, the visit steps, the story band and the latest notes.', 'niko-kids-clinic' ),
		)
	);
}
add_action( 'init', 'niko_kids_clinic_pattern_categories' );
