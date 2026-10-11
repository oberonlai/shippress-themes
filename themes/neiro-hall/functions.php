<?php
/**
 * Neiro Hall — functions and definitions.
 *
 * @package neiro-hall
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/hall-info.php';

define( 'NEIRO_HALL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function neiro_hall_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'neiro_hall_setup' );

/**
 * Front-end styles, and the small programme filter script (no build step; without it every concert shows).
 */
function neiro_hall_enqueue() {
	wp_enqueue_style( 'neiro-hall-style', get_stylesheet_uri(), array(), NEIRO_HALL_VERSION );
	wp_enqueue_script( 'neiro-hall-programme', get_theme_file_uri( 'assets/js/programme.js' ), array(), NEIRO_HALL_VERSION, array( 'strategy' => 'defer', 'in_footer' => true ) );
	wp_localize_script(
		'neiro-hall-programme',
		'neiroHallFilters',
		array(
			'genre'     => __( 'Genre', 'neiro-hall' ),
			'month'     => __( 'Month', 'neiro-hall' ),
			'allGenres' => __( 'All genres', 'neiro-hall' ),
			'allMonths' => __( 'All months', 'neiro-hall' ),
			/* translators: 1: concerts shown, 2: all concerts. */
			'showing'   => __( 'Showing %1$s of %2$s concerts', 'neiro-hall' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'neiro_hall_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function neiro_hall_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small mono capitals after a rust hairline)', 'neiro-hall' ),
			'lead'  => __( 'Lead paragraph', 'neiro-hall' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline', 'neiro-hall' ),
			'fill'      => __( 'Charcoal button', 'neiro-hall' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairlines between items)', 'neiro-hall' ),
		),
		'core/details'   => array(
			'faq' => __( 'Question (hairline and a plus sign)', 'neiro-hall' ),
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
add_action( 'init', 'neiro_hall_block_styles' );

/**
 * Pattern category.
 */
function neiro_hall_pattern_categories() {
	register_block_pattern_category(
		'neiro-hall',
		array(
			'label'       => __( 'Neiro Hall', 'neiro-hall' ),
			'description' => __( 'Quiet sections for a small concert hall: the ticket-stub programme with filters, the room, artists, venue, tickets, journal, newsletter and contact.', 'neiro-hall' ),
		)
	);
}
add_action( 'init', 'neiro_hall_pattern_categories' );
