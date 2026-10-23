<?php
/**
 * Kasumi Mortgage — functions and definitions.
 *
 * @package kasumi-mortgage
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'KASUMI_MORTGAGE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function kasumi_mortgage_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'kasumi_mortgage_setup' );

/**
 * Front-end styles.
 */
function kasumi_mortgage_enqueue() {
	wp_enqueue_style( 'kasumi-mortgage-style', get_stylesheet_uri(), array(), KASUMI_MORTGAGE_VERSION );
}
add_action( 'wp_enqueue_scripts', 'kasumi_mortgage_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kasumi_mortgage_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small capitals after a lane-line dash)', 'kasumi-mortgage' ),
			'lead'  => __( 'Lead paragraph', 'kasumi-mortgage' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with an arrow', 'kasumi-mortgage' ),
			'outline'   => __( 'Quiet outline button', 'kasumi-mortgage' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairline between items)', 'kasumi-mortgage' ),
		),
		'core/table'     => array(
			'fees' => __( 'Fees (ruled, tabular figures)', 'kasumi-mortgage' ),
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
add_action( 'init', 'kasumi_mortgage_block_styles' );

/**
 * Pattern category.
 */
function kasumi_mortgage_pattern_categories() {
	register_block_pattern_category(
		'kasumi-mortgage',
		array(
			'label'       => __( 'Kasumi Mortgage', 'kasumi-mortgage' ),
			'description' => __( 'Quiet, photograph-led sections for an independent mortgage broker: the kitchen-table opening, six steps from first call to keys, mortgages and fees, the rates table, advisers, journal and contact.', 'kasumi-mortgage' ),
		)
	);
}
add_action( 'init', 'kasumi_mortgage_pattern_categories' );
