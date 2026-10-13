<?php
/**
 * Shiori Review — functions and definitions.
 *
 * @package shiori-review
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'SHIORI_REVIEW_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function shiori_review_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'shiori_review_setup' );

/**
 * Front-end styles.
 */
function shiori_review_enqueue() {
	wp_enqueue_style( 'shiori-review-style', get_stylesheet_uri(), array(), SHIORI_REVIEW_VERSION );
}
add_action( 'wp_enqueue_scripts', 'shiori_review_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function shiori_review_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'shiori-review' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline underline', 'shiori-review' ),
			'outline'   => __( 'Ink outline button', 'shiori-review' ),
		),
		'core/separator' => array(
			'ribbon' => __( 'Ribbon rule (hairline with a small bookmark ribbon)', 'shiori-review' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'shiori-review' ),
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
add_action( 'init', 'shiori_review_block_styles' );

/**
 * Pattern category.
 */
function shiori_review_pattern_categories() {
	register_block_pattern_category(
		'shiori-review',
		array(
			'label'       => __( 'Shiori Review', 'shiori-review' ),
			'description' => __( 'Quiet sections for an independent literary quarterly: the contents index with folios, the editor\'s note, issue covers, subscription and submissions, the editors and the magazine details.', 'shiori-review' ),
		)
	);
}
add_action( 'init', 'shiori_review_pattern_categories' );
