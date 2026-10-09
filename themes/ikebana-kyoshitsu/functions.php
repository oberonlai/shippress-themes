<?php
/**
 * Ikebana Kyoshitsu — functions and definitions.
 *
 * @package ikebana-kyoshitsu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';

define( 'IKEBANA_KYOSHITSU_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function ikebana_kyoshitsu_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'ikebana_kyoshitsu_setup' );

/**
 * Front-end styles.
 */
function ikebana_kyoshitsu_enqueue() {
	wp_enqueue_style( 'ikebana-kyoshitsu-style', get_stylesheet_uri(), array(), IKEBANA_KYOSHITSU_VERSION );
}
add_action( 'wp_enqueue_scripts', 'ikebana_kyoshitsu_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function ikebana_kyoshitsu_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label'          => __( 'Label (spaced capitals)', 'ikebana-kyoshitsu' ),
			'vertical-label' => __( 'Vertical label (top to bottom)', 'ikebana-kyoshitsu' ),
			'lead'           => __( 'Lead paragraph', 'ikebana-kyoshitsu' ),
			'brush-note'     => __( 'Brush note (italic, hung from a stem line)', 'ikebana-kyoshitsu' ),
		),
		'core/heading'   => array(
			'label'      => __( 'Label (spaced capitals)', 'ikebana-kyoshitsu' ),
			'off-axis'   => __( 'Off-axis (second line steps right)', 'ikebana-kyoshitsu' ),
		),
		'core/group'     => array(
			'petal-card' => __( 'Petal card (paper, soft corner)', 'ikebana-kyoshitsu' ),
			'petal-light' => __( 'Petal light (soft pink and green glow)', 'ikebana-kyoshitsu' ),
			'reveal'     => __( 'Gentle reveal on scroll', 'ikebana-kyoshitsu' ),
		),
		'core/image'     => array(
			'leaf-arch'  => __( 'Leaf arch (rounded top)', 'ikebana-kyoshitsu' ),
			'paper-mat'  => __( 'Paper mat (offset blush frame)', 'ikebana-kyoshitsu' ),
			'tilt'       => __( 'Off-axis tilt', 'ikebana-kyoshitsu' ),
			'slow-zoom'  => __( 'Slow zoom', 'ikebana-kyoshitsu' ),
		),
		'core/separator' => array(
			'brush'      => __( 'Brush line (tapered, drawn in)', 'ikebana-kyoshitsu' ),
			'stem'       => __( 'Stem (short angled line)', 'ikebana-kyoshitsu' ),
			'ma'         => __( 'Ma (empty pause)', 'ikebana-kyoshitsu' ),
		),
		'core/button'    => array(
			'arrow-link' => __( 'Arrow link', 'ikebana-kyoshitsu' ),
			'outline'    => __( 'Outline', 'ikebana-kyoshitsu' ),
		),
		'core/table'     => array(
			'timetable'  => __( 'Timetable (weekly lessons)', 'ikebana-kyoshitsu' ),
			'spec'       => __( 'Course details', 'ikebana-kyoshitsu' ),
		),
		'core/list'      => array(
			'stems'      => __( 'Stems (angled markers)', 'ikebana-kyoshitsu' ),
			'leaders'    => __( 'Price list (dotted leaders)', 'ikebana-kyoshitsu' ),
		),
		'core/quote'     => array(
			'teacher'    => __( 'Teacher\'s words (large italic, off-axis)', 'ikebana-kyoshitsu' ),
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
add_action( 'init', 'ikebana_kyoshitsu_block_styles' );

/**
 * Pattern category.
 */
function ikebana_kyoshitsu_pattern_categories() {
	register_block_pattern_category(
		'ikebana-kyoshitsu',
		array(
			'label'       => __( 'Ikebana Kyoshitsu', 'ikebana-kyoshitsu' ),
			'description' => __( 'Off-axis sections for a flower school: the three lines, classes and levels, the weekly timetable, a trial-lesson booking, teachers, students\' work, notes and contact.', 'ikebana-kyoshitsu' ),
		)
	);
}
add_action( 'init', 'ikebana_kyoshitsu_pattern_categories' );
