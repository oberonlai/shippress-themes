<?php
/**
 * Engawa Works — functions and definitions.
 *
 * @package engawa-works
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/space-info.php';

define( 'ENGAWA_WORKS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function engawa_works_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'engawa_works_setup' );

/**
 * Front-end styles.
 */
function engawa_works_enqueue() {
	wp_enqueue_style( 'engawa-works-style', get_stylesheet_uri(), array(), ENGAWA_WORKS_VERSION );
}
add_action( 'wp_enqueue_scripts', 'engawa_works_enqueue' );

/**
 * The Tour booking and Contact forms' script loads only on pages that hold a form; the ticker script only where the
 * footer's "today at the space" ticker is.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function engawa_works_group( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false !== strpos( $class, 'ew-write' ) ) {
		wp_enqueue_script( 'engawa-works-forms', get_theme_file_uri( 'assets/js/forms.js' ), array(), ENGAWA_WORKS_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	}
	if ( false !== strpos( $class, 'ew-ticker' ) ) {
		wp_enqueue_script( 'engawa-works-ticker', get_theme_file_uri( 'assets/js/ticker.js' ), array(), ENGAWA_WORKS_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	}
	return $content;
}
add_filter( 'render_block_core/group', 'engawa_works_group', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function engawa_works_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'engawa-works' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline underline', 'engawa-works' ),
			'outline'   => __( 'Ink outline button', 'engawa-works' ),
		),
		'core/separator' => array(
			'rail' => __( 'Engawa rail (thin ochre line with joints)', 'engawa-works' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'engawa-works' ),
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
add_action( 'init', 'engawa_works_block_styles' );

/**
 * Pattern category.
 */
function engawa_works_pattern_categories() {
	register_block_pattern_category(
		'engawa-works',
		array(
			'label'       => __( 'Engawa Works', 'engawa-works' ),
			'description' => __( 'Quiet sections for a neighbourhood coworking space: the bento grid of the space, the host\'s note, membership plans, community evenings, the tour booking form and the space details.', 'engawa-works' ),
		)
	);
}
add_action( 'init', 'engawa_works_pattern_categories' );
