<?php
/**
 * Hakuba Dental — functions and definitions.
 *
 * @package hakuba-dental
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';

define( 'HAKUBA_DENTAL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function hakuba_dental_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'hakuba_dental_setup' );

/**
 * Front-end styles.
 */
function hakuba_dental_enqueue() {
	wp_enqueue_style( 'hakuba-dental-style', get_stylesheet_uri(), array(), HAKUBA_DENTAL_VERSION );
}
add_action( 'wp_enqueue_scripts', 'hakuba_dental_enqueue' );

/**
 * "Open today": marks the visitor's weekday on <html> (hd-day-mon … hd-day-sun) as early as possible, so the
 * header strip shows only today's hours line (.hd-today__day--mon …). Without JavaScript the strip shows the
 * week summary (.hd-today__all) instead. Tiny and inline, so there is no extra request and no flash.
 */
function hakuba_dental_today() {
	wp_print_inline_script_tag( file_get_contents( get_template_directory() . '/assets/js/today.js' ) );
}
add_action( 'wp_head', 'hakuba_dental_today', 1 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hakuba_dental_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label'   => __( 'Label (small blue capitals)', 'hakuba-dental' ),
			'eyebrow' => __( 'Eyebrow (pill with a dot)', 'hakuba-dental' ),
			'lead'    => __( 'Lead paragraph', 'hakuba-dental' ),
			'numeral' => __( 'Numeral (large)', 'hakuba-dental' ),
			'fine'    => __( 'Fine print', 'hakuba-dental' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with arrow', 'hakuba-dental' ),
			'soft'      => __( 'Soft pill (mist)', 'hakuba-dental' ),
		),
		'core/group'     => array(
			'cell'  => __( 'Bento cell (rounded, mist)', 'hakuba-dental' ),
			'tooth' => __( 'Tooth cell (crown-shaped top)', 'hakuba-dental' ),
		),
		'core/list'      => array(
			'checks' => __( 'Checks (blue tick)', 'hakuba-dental' ),
			'steps'  => __( 'Steps (numbered pills)', 'hakuba-dental' ),
		),
		'core/table'     => array(
			'hours' => __( 'Opening hours (ticks and dashes centred)', 'hakuba-dental' ),
			'fees'  => __( 'Fees (rounded rows, prices on the right)', 'hakuba-dental' ),
		),
		'core/details'   => array(
			'faq' => __( 'FAQ (rounded, plus sign)', 'hakuba-dental' ),
		),
		'core/image'     => array(
			'tooth' => __( 'Tooth silhouette mask', 'hakuba-dental' ),
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
add_action( 'init', 'hakuba_dental_block_styles' );

/**
 * Pattern category.
 */
function hakuba_dental_pattern_categories() {
	register_block_pattern_category(
		'hakuba-dental',
		array(
			'label'       => __( 'Hakuba Dental', 'hakuba-dental' ),
			'description' => __( 'Calm, clear sections for a family dental clinic: a bento hero with tooth-shaped cells, treatments, fees, the first visit, the team, opening hours, the journal, the newsletter and contact.', 'hakuba-dental' ),
		)
	);
}
add_action( 'init', 'hakuba_dental_pattern_categories' );
