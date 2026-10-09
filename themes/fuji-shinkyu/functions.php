<?php
/**
 * Fuji Shinkyu — functions and definitions.
 *
 * @package fuji-shinkyu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';

define( 'FUJI_SHINKYU_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function fuji_shinkyu_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'fuji_shinkyu_setup' );

/**
 * Front-end styles.
 */
function fuji_shinkyu_enqueue() {
	wp_enqueue_style( 'fuji-shinkyu-style', get_stylesheet_uri(), array(), FUJI_SHINKYU_VERSION );
}
add_action( 'wp_enqueue_scripts', 'fuji_shinkyu_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function fuji_shinkyu_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label'       => __( 'Label (spaced capitals)', 'fuji-shinkyu' ),
			'point-label' => __( 'Point label (ring, point and a fine line)', 'fuji-shinkyu' ),
			'lead'        => __( 'Lead paragraph', 'fuji-shinkyu' ),
			'point-note'  => __( 'Point note (hung from a gold point)', 'fuji-shinkyu' ),
		),
		'core/heading'   => array(
			'label'    => __( 'Label (spaced capitals)', 'fuji-shinkyu' ),
			'airy'     => __( 'Airy (extra-light, wide spacing)', 'fuji-shinkyu' ),
		),
		'core/group'     => array(
			'ring-card'   => __( 'Ring card (paper, fine ring in the corner)', 'fuji-shinkyu' ),
			'halo'        => __( 'Halo (soft wisteria glow)', 'fuji-shinkyu' ),
			'breath-ring' => __( 'Breathing ring (slow, behind the content)', 'fuji-shinkyu' ),
			'reveal'      => __( 'Gentle reveal on scroll', 'fuji-shinkyu' ),
		),
		'core/image'     => array(
			'circle'     => __( 'Circle', 'fuji-shinkyu' ),
			'orbit'      => __( 'Orbit (circle with an offset ring)', 'fuji-shinkyu' ),
			'pill'       => __( 'Pill (tall capsule)', 'fuji-shinkyu' ),
			'soft-frame' => __( 'Soft frame (rounded, hairline inset)', 'fuji-shinkyu' ),
		),
		'core/separator' => array(
			'meridian' => __( 'Meridian (fine line with points, drawn in)', 'fuji-shinkyu' ),
			'point'    => __( 'Point (a single ring)', 'fuji-shinkyu' ),
			'ma'       => __( 'Ma (empty pause)', 'fuji-shinkyu' ),
		),
		'core/button'    => array(
			'arrow-link' => __( 'Arrow link', 'fuji-shinkyu' ),
			'outline'    => __( 'Outline', 'fuji-shinkyu' ),
		),
		'core/table'     => array(
			'menu'  => __( 'Treatment menu (duration and price)', 'fuji-shinkyu' ),
			'hours' => __( 'Opening hours', 'fuji-shinkyu' ),
		),
		'core/list'      => array(
			'points'  => __( 'Points on a meridian line', 'fuji-shinkyu' ),
			'leaders' => __( 'Price list (dotted leaders)', 'fuji-shinkyu' ),
		),
		'core/quote'     => array(
			'practitioner' => __( 'Practitioner\'s words (large, light)', 'fuji-shinkyu' ),
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
add_action( 'init', 'fuji_shinkyu_block_styles' );

/**
 * Pattern category.
 */
function fuji_shinkyu_pattern_categories() {
	register_block_pattern_category(
		'fuji-shinkyu',
		array(
			'label'       => __( 'Fuji Shinkyu', 'fuji-shinkyu' ),
			'description' => __( 'Calm, ring-and-point sections for an acupuncture and moxibustion clinic: a breathing hero, the treatment menu with durations and prices, the first-visit guide, an appointment request, practitioners, the journal and contact.', 'fuji-shinkyu' ),
		)
	);
}
add_action( 'init', 'fuji_shinkyu_pattern_categories' );
