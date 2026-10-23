<?php
/**
 * Shirayami Butoh — functions and definitions.
 *
 * @package shirayami-butoh
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'SHIRAYAMI_BUTOH_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function shirayami_butoh_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'shirayami_butoh_setup' );

/**
 * Front-end styles.
 */
function shirayami_butoh_enqueue() {
	wp_enqueue_style( 'shirayami-butoh-style', get_stylesheet_uri(), array(), SHIRAYAMI_BUTOH_VERSION );
}
add_action( 'wp_enqueue_scripts', 'shirayami_butoh_enqueue' );

/**
 * The Book a seat buttons in the header, the studio board and the patterns (class sb-book) are written with a site-relative
 * link ("/seats/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function shirayami_butoh_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'sb-book' ) ) {
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
add_filter( 'render_block_core/button', 'shirayami_butoh_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function shirayami_butoh_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'shirayami-butoh' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a thick underline', 'shirayami-butoh' ),
			'outline'   => __( 'Ink-outline panel button', 'shirayami-butoh' ),
		),
		'core/separator' => array(
			'tone' => __( 'Screen-tone strip', 'shirayami-butoh' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'shirayami-butoh' ),
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
add_action( 'init', 'shirayami_butoh_block_styles' );

/**
 * Pattern category.
 */
function shirayami_butoh_pattern_categories() {
	register_block_pattern_category(
		'shirayami-butoh',
		array(
			'label'       => __( 'Shirayami Butoh', 'shirayami-butoh' ),
			'description' => __( 'Sections for a butoh dance company in one long centred column: the sumire violet hero with giant centred type and the cut-out dancer, the studio board, the repertoire, the company band, the four class steps and the notebook.', 'shirayami-butoh' ),
		)
	);
}
add_action( 'init', 'shirayami_butoh_pattern_categories' );
