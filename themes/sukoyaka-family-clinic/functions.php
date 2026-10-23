<?php
/**
 * Sukoyaka Family Clinic — functions and definitions.
 *
 * @package sukoyaka-family-clinic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'SUKOYAKA_FAMILY_CLINIC_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function sukoyaka_family_clinic_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'sukoyaka_family_clinic_setup' );

/**
 * Front-end styles.
 */
function sukoyaka_family_clinic_enqueue() {
	wp_enqueue_style( 'sukoyaka-family-clinic-style', get_stylesheet_uri(), array(), SUKOYAKA_FAMILY_CLINIC_VERSION );
}
add_action( 'wp_enqueue_scripts', 'sukoyaka_family_clinic_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function sukoyaka_family_clinic_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small capitals after a lane-line dash)', 'sukoyaka-family-clinic' ),
			'lead'  => __( 'Lead paragraph', 'sukoyaka-family-clinic' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with an arrow', 'sukoyaka-family-clinic' ),
			'outline'   => __( 'Quiet outline button', 'sukoyaka-family-clinic' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairline between items)', 'sukoyaka-family-clinic' ),
		),
		'core/table'     => array(
			'fees' => __( 'Fees (ruled, tabular figures)', 'sukoyaka-family-clinic' ),
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
add_action( 'init', 'sukoyaka_family_clinic_block_styles' );

/**
 * Pattern category.
 */
function sukoyaka_family_clinic_pattern_categories() {
	register_block_pattern_category(
		'sukoyaka-family-clinic',
		array(
			'label'       => __( 'Sukoyaka Family Clinic', 'sukoyaka-family-clinic' ),
			'description' => __( 'Quiet, photograph-led sections for an independent business hotel: the room at first light, six steps from the platform to checkout, rooms and rates, the price table, the people behind the desk, journal and contact.', 'sukoyaka-family-clinic' ),
		)
	);
}
add_action( 'init', 'sukoyaka_family_clinic_pattern_categories' );
