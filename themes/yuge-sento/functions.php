<?php
/**
 * Yuge Sento — functions and definitions.
 *
 * @package yuge-sento
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/bath-info.php';

define( 'YUGE_SENTO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function yuge_sento_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'yuge_sento_setup' );

/**
 * Front-end styles.
 */
function yuge_sento_enqueue() {
	wp_enqueue_style( 'yuge-sento-style', get_stylesheet_uri(), array(), YUGE_SENTO_VERSION );
}
add_action( 'wp_enqueue_scripts', 'yuge_sento_enqueue' );

/**
 * The Visit page's message script loads only on the page that holds the form.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function yuge_sento_group( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false !== strpos( $class, 'yg-visit' ) ) {
		wp_enqueue_script( 'yuge-sento-visit', get_theme_file_uri( 'assets/js/visit.js' ), array(), YUGE_SENTO_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	}
	return $content;
}
add_filter( 'render_block_core/group', 'yuge_sento_group', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function yuge_sento_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'yuge-sento' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline underline', 'yuge-sento' ),
			'outline'   => __( 'Blue-ink outline button', 'yuge-sento' ),
		),
		'core/separator' => array(
			'tiles' => __( 'Three small tiles', 'yuge-sento' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'yuge-sento' ),
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
add_action( 'init', 'yuge_sento_block_styles' );

/**
 * Pattern category.
 */
function yuge_sento_pattern_categories() {
	register_block_pattern_category(
		'yuge-sento',
		array(
			'label'       => __( 'Yuge Sento', 'yuge-sento' ),
			'description' => __( 'Quiet sections for a neighbourhood bathhouse: the opening, chapters of an evening at the bath, the keeper\'s note, the price card, the bath guide and the visit details.', 'yuge-sento' ),
		)
	);
}
add_action( 'init', 'yuge_sento_pattern_categories' );
