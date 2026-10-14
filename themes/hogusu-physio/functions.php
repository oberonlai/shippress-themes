<?php
/**
 * Hogusu Physio — functions and definitions.
 *
 * @package hogusu-physio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/clinic-info.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'HOGUSU_PHYSIO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function hogusu_physio_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'hogusu_physio_setup' );

/**
 * Front-end styles.
 */
function hogusu_physio_enqueue() {
	wp_enqueue_style( 'hogusu-physio-style', get_stylesheet_uri(), array(), HOGUSU_PHYSIO_VERSION );
}
add_action( 'wp_enqueue_scripts', 'hogusu_physio_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hogusu_physio_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small spaced capitals after three quiet dots)', 'hogusu-physio' ),
			'lead'  => __( 'Lead paragraph', 'hogusu-physio' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a soft underline', 'hogusu-physio' ),
			'fill'      => __( 'Deep teal pill button', 'hogusu-physio' ),
			'light'     => __( 'Mist pill button (on the dark band)', 'hogusu-physio' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairlines between items)', 'hogusu-physio' ),
		),
		'core/details'   => array(
			'faq' => __( 'Question (hairline and a plus sign)', 'hogusu-physio' ),
		),
		'core/table'     => array(
			'hours' => __( 'Opening hours (ticks and dashes centred)', 'hogusu-physio' ),
			'fees'  => __( 'Fees (prices on the right, hairlines)', 'hogusu-physio' ),
		),
		'core/separator' => array(
			'paw' => __( 'Quiet dots (a centred divider)', 'hogusu-physio' ),
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
add_action( 'init', 'hogusu_physio_block_styles' );

/**
 * Pattern category.
 */
function hogusu_physio_pattern_categories() {
	register_block_pattern_category(
		'hogusu-physio',
		array(
			'label'       => __( 'Hogusu Physio', 'hogusu-physio' ),
			'description' => __( 'Calm sections for a neighbourhood physiotherapy clinic: a first-visit long read, treatments, the team, fees, journal and contact.', 'hogusu-physio' ),
		)
	);
}
add_action( 'init', 'hogusu_physio_pattern_categories' );
