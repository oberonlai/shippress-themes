<?php
/**
 * Hagane Machinery — functions and definitions.
 *
 * @package hagane-machinery
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'HAGANE_MACHINERY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function hagane_machinery_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'hagane_machinery_setup' );

/**
 * Front-end styles.
 */
function hagane_machinery_enqueue() {
	wp_enqueue_style( 'hagane-machinery-style', get_stylesheet_uri(), array(), HAGANE_MACHINERY_VERSION );
}
add_action( 'wp_enqueue_scripts', 'hagane_machinery_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hagane_machinery_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small capitals after a lane-line dash)', 'hagane-machinery' ),
			'lead'  => __( 'Lead paragraph', 'hagane-machinery' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with an arrow', 'hagane-machinery' ),
			'outline'   => __( 'Quiet outline button', 'hagane-machinery' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairline between items)', 'hagane-machinery' ),
		),
		'core/table'     => array(
			'fees' => __( 'Fees (ruled, tabular figures)', 'hagane-machinery' ),
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
add_action( 'init', 'hagane_machinery_block_styles' );

/**
 * Pattern category.
 */
function hagane_machinery_pattern_categories() {
	register_block_pattern_category(
		'hagane-machinery',
		array(
			'label'       => __( 'Hagane Machinery', 'hagane-machinery' ),
			'description' => __( 'Quiet, photograph-led sections for an independent business hotel: the room at first light, six steps from the platform to checkout, rooms and rates, the price table, the people behind the desk, journal and contact.', 'hagane-machinery' ),
		)
	);
}
add_action( 'init', 'hagane_machinery_pattern_categories' );
