<?php
/**
 * Shinai Dojo — functions and definitions.
 *
 * @package shinai-dojo
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'SHINAI_DOJO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function shinai_dojo_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'shinai_dojo_setup' );

/**
 * Front-end styles.
 */
function shinai_dojo_enqueue() {
	wp_enqueue_style( 'shinai-dojo-style', get_stylesheet_uri(), array(), SHINAI_DOJO_VERSION );
}
add_action( 'wp_enqueue_scripts', 'shinai_dojo_enqueue' );

/**
 * The Book a seat buttons in the header, the studio board and the patterns (class sd-book) are written with a site-relative
 * link ("/visit/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function shinai_dojo_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'sd-book' ) ) {
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
add_filter( 'render_block_core/button', 'shinai_dojo_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function shinai_dojo_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'shinai-dojo' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a thick underline', 'shinai-dojo' ),
			'outline'   => __( 'Ink-outline panel button', 'shinai-dojo' ),
		),
		'core/separator' => array(
			'tone' => __( 'Screen-tone strip', 'shinai-dojo' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'shinai-dojo' ),
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
add_action( 'init', 'shinai_dojo_block_styles' );

/**
 * Pattern category.
 */
function shinai_dojo_pattern_categories() {
	register_block_pattern_category(
		'shinai-dojo',
		array(
			'label'       => __( 'Shinai Dojo', 'shinai-dojo' ),
			'description' => __( 'Sections for a neighbourhood kendo dojo: the stacked-collage cover on the madder field with the cut-out helmet, the practice board, the classes as a magazine spread, the dojo band with the cut-out drum, a practice in four plates, the journal and the letters.', 'shinai-dojo' ),
		)
	);
}
add_action( 'init', 'shinai_dojo_pattern_categories' );
