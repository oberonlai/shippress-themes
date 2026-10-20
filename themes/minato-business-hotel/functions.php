<?php
/**
 * Minato Business Hotel — functions and definitions.
 *
 * @package minato-business-hotel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'MINATO_BUSINESS_HOTEL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function minato_business_hotel_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'minato_business_hotel_setup' );

/**
 * Front-end styles.
 */
function minato_business_hotel_enqueue() {
	wp_enqueue_style( 'minato-business-hotel-style', get_stylesheet_uri(), array(), MINATO_BUSINESS_HOTEL_VERSION );
}
add_action( 'wp_enqueue_scripts', 'minato_business_hotel_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function minato_business_hotel_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small capitals after a lane-line dash)', 'minato-business-hotel' ),
			'lead'  => __( 'Lead paragraph', 'minato-business-hotel' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with an arrow', 'minato-business-hotel' ),
			'outline'   => __( 'Quiet outline button', 'minato-business-hotel' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairline between items)', 'minato-business-hotel' ),
		),
		'core/table'     => array(
			'fees' => __( 'Fees (ruled, tabular figures)', 'minato-business-hotel' ),
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
add_action( 'init', 'minato_business_hotel_block_styles' );

/**
 * Pattern category.
 */
function minato_business_hotel_pattern_categories() {
	register_block_pattern_category(
		'minato-business-hotel',
		array(
			'label'       => __( 'Minato Business Hotel', 'minato-business-hotel' ),
			'description' => __( 'Quiet, photograph-led sections for an independent business hotel: the room at first light, six steps from the platform to checkout, rooms and rates, the price table, the people behind the desk, journal and contact.', 'minato-business-hotel' ),
		)
	);
}
add_action( 'init', 'minato_business_hotel_pattern_categories' );
