<?php
/**
 * Hanabi Matsuri — functions and definitions.
 *
 * @package hanabi-matsuri
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';

define( 'HANABI_MATSURI_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function hanabi_matsuri_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'hanabi_matsuri_setup' );

/**
 * Front-end styles.
 */
function hanabi_matsuri_enqueue() {
	wp_enqueue_style( 'hanabi-matsuri-style', get_stylesheet_uri(), array(), HANABI_MATSURI_VERSION );
}
add_action( 'wp_enqueue_scripts', 'hanabi_matsuri_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hanabi_matsuri_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label'           => __( 'Label (wide capitals, marigold)', 'hanabi-matsuri' ),
			'kicker'          => __( 'Kicker (spark and label)', 'hanabi-matsuri' ),
			'lead'            => __( 'Lead paragraph', 'hanabi-matsuri' ),
			'numeral'         => __( 'Date numeral (oversized, solid)', 'hanabi-matsuri' ),
			'numeral-outline' => __( 'Date numeral (oversized, outline)', 'hanabi-matsuri' ),
			'stamp'           => __( 'Stamp (round, tilted badge)', 'hanabi-matsuri' ),
		),
		'core/heading'   => array(
			'label'   => __( 'Label (wide capitals, marigold)', 'hanabi-matsuri' ),
			'poster'  => __( 'Poster (condensed, enormous)', 'hanabi-matsuri' ),
			'outline' => __( 'Outline (stroked letters)', 'hanabi-matsuri' ),
		),
		'core/group'     => array(
			'burst'       => __( 'Burst (radiating rays behind)', 'hanabi-matsuri' ),
			'diagonal'    => __( 'Diagonal band (slanted orange edge)', 'hanabi-matsuri' ),
			'ticket'      => __( 'Ticket (notched, perforated)', 'hanabi-matsuri' ),
			'poster-card' => __( 'Poster card (offset shadow)', 'hanabi-matsuri' ),
			'overlap'     => __( 'Overlap (pulls up over the block above)', 'hanabi-matsuri' ),
			'reveal'      => __( 'Staggered reveal on scroll', 'hanabi-matsuri' ),
		),
		'core/image'     => array(
			'burst-ring'   => __( 'Burst ring (round, rays around)', 'hanabi-matsuri' ),
			'tilt'         => __( 'Tilted poster (offset orange block)', 'hanabi-matsuri' ),
			'poster-frame' => __( 'Poster frame (cream border)', 'hanabi-matsuri' ),
		),
		'core/separator' => array(
			'fuse'   => __( 'Fuse (dotted, with a spark)', 'hanabi-matsuri' ),
			'zigzag' => __( 'Zigzag (bunting edge)', 'hanabi-matsuri' ),
		),
		'core/button'    => array(
			'arrow-link' => __( 'Arrow link', 'hanabi-matsuri' ),
			'outline'    => __( 'Outline', 'hanabi-matsuri' ),
		),
		'core/table'     => array(
			'timetable' => __( 'Timetable (time, stage, act)', 'hanabi-matsuri' ),
		),
		'core/list'      => array(
			'ruled'   => __( 'Ruled (hairlines, spark bullets)', 'hanabi-matsuri' ),
			'checks'  => __( 'Checklist (ticks)', 'hanabi-matsuri' ),
			'leaders' => __( 'Price list (dotted leaders)', 'hanabi-matsuri' ),
		),
		'core/quote'     => array(
			'shout' => __( 'Shout (poster capitals, burst mark)', 'hanabi-matsuri' ),
		),
		'core/details'   => array(
			'faq' => __( 'FAQ (ruled, plus sign)', 'hanabi-matsuri' ),
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
add_action( 'init', 'hanabi_matsuri_block_styles' );

/**
 * Pattern category.
 */
function hanabi_matsuri_pattern_categories() {
	register_block_pattern_category(
		'hanabi-matsuri',
		array(
			'label'       => __( 'Hanabi Matsuri', 'hanabi-matsuri' ),
			'description' => __( 'Poster-like sections for a summer fireworks and music festival: a burst hero with oversized dates, the lineup and timetable, fireworks program, pass tiers, the map, transport and FAQ, the crew, news and the newsletter.', 'hanabi-matsuri' ),
		)
	);
}
add_action( 'init', 'hanabi_matsuri_pattern_categories' );
