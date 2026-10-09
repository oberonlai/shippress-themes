<?php
/**
 * Hinoki Yado — functions and definitions.
 *
 * @package hinoki-yado
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';

define( 'HINOKI_YADO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function hinoki_yado_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'hinoki_yado_setup' );

/**
 * Front-end styles.
 */
function hinoki_yado_enqueue() {
	wp_enqueue_style( 'hinoki-yado-style', get_stylesheet_uri(), array(), HINOKI_YADO_VERSION );
}
add_action( 'wp_enqueue_scripts', 'hinoki_yado_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hinoki_yado_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label'          => __( 'Label (small caps)', 'hinoki-yado' ),
			'vertical-label' => __( 'Vertical label (small caps, top to bottom)', 'hinoki-yado' ),
			'lead'           => __( 'Lead paragraph', 'hinoki-yado' ),
		),
		'core/heading'   => array(
			'label'       => __( 'Label (small caps)', 'hinoki-yado' ),
			'light-serif' => __( 'Light serif, italic accent', 'hinoki-yado' ),
		),
		'core/group'     => array(
			'washi-card' => __( 'Washi card (paper and fibre)', 'hinoki-yado' ),
			'steam'      => __( 'Steam (soft drifting gradient)', 'hinoki-yado' ),
			'reveal'     => __( 'Gentle reveal on scroll', 'hinoki-yado' ),
		),
		'core/image'     => array(
			'marumado'  => __( 'Round window (marumado)', 'hinoki-yado' ),
			'washi-mat' => __( 'Washi mat (paper border)', 'hinoki-yado' ),
			'slow-zoom' => __( 'Slow zoom', 'hinoki-yado' ),
		),
		'core/separator' => array(
			'steam-line' => __( 'Steam line (fading hairline)', 'hinoki-yado' ),
			'corridor'   => __( 'Corridor pause (empty space)', 'hinoki-yado' ),
		),
		'core/button'    => array(
			'arrow-link' => __( 'Arrow link', 'hinoki-yado' ),
			'outline'    => __( 'Outline', 'hinoki-yado' ),
		),
		'core/table'     => array(
			'spec' => __( 'Room spec sheet', 'hinoki-yado' ),
		),
		'core/list'      => array(
			'course' => __( 'Kaiseki course (dotted leaders)', 'hinoki-yado' ),
			'spec'   => __( 'Spec list (small caps keys)', 'hinoki-yado' ),
		),
		'core/quote'     => array(
			'guestbook' => __( 'Guest book (centred)', 'hinoki-yado' ),
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
add_action( 'init', 'hinoki_yado_block_styles' );

/**
 * Pattern category.
 */
function hinoki_yado_pattern_categories() {
	register_block_pattern_category(
		'hinoki-yado',
		array(
			'label'       => __( 'Hinoki Yado', 'hinoki-yado' ),
			'description' => __( 'Slow sections for a small inn: arrival, rooms with tatami specs, baths, the seasonal kaiseki menu, the letter and the booking enquiry.', 'hinoki-yado' ),
		)
	);
}
add_action( 'init', 'hinoki_yado_pattern_categories' );
