<?php
/**
 * Beni Kappo — functions and definitions.
 *
 * @package beni-kappo
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';

define( 'BENI_KAPPO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function beni_kappo_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'beni_kappo_setup' );

/**
 * Front-end styles.
 */
function beni_kappo_enqueue() {
	wp_enqueue_style( 'beni-kappo-style', get_stylesheet_uri(), array(), BENI_KAPPO_VERSION );
}
add_action( 'wp_enqueue_scripts', 'beni_kappo_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function beni_kappo_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label'         => __( 'Label (spaced capitals, gold)', 'beni-kappo' ),
			'kicker'        => __( 'Kicker (vermilion bar and label)', 'beni-kappo' ),
			'lead'          => __( 'Lead paragraph', 'beni-kappo' ),
			'brush-numeral' => __( 'Brush numeral (huge course number)', 'beni-kappo' ),
		),
		'core/heading'   => array(
			'label'   => __( 'Label (spaced capitals, gold)', 'beni-kappo' ),
			'stacked' => __( 'Stacked (heavy, tight, very large)', 'beni-kappo' ),
		),
		'core/group'     => array(
			'noren'    => __( 'Noren panel (red curtain with slits)', 'beni-kappo' ),
			'lacquer'  => __( 'Lacquer panel (raised, gold edge)', 'beni-kappo' ),
			'lantern'  => __( 'Lantern glow (warm light behind)', 'beni-kappo' ),
			'overlap'  => __( 'Overlap (pulls up over the block above)', 'beni-kappo' ),
			'reveal'   => __( 'Staggered reveal on scroll', 'beni-kappo' ),
		),
		'core/image'     => array(
			'vignette'      => __( 'Vignette (dark, lit from within)', 'beni-kappo' ),
			'lacquer-frame' => __( 'Lacquer frame (gold inset, red offset panel)', 'beni-kappo' ),
			'noren-cut'     => __( 'Noren cut (slit bottom edge)', 'beni-kappo' ),
		),
		'core/separator' => array(
			'rod'   => __( 'Noren rod (gold line with end caps)', 'beni-kappo' ),
			'brush' => __( 'Brushstroke (vermilion)', 'beni-kappo' ),
		),
		'core/button'    => array(
			'arrow-link' => __( 'Arrow link', 'beni-kappo' ),
			'outline'    => __( 'Outline (gold)', 'beni-kappo' ),
		),
		'core/table'     => array(
			'courses' => __( 'Course list (name, courses, price)', 'beni-kappo' ),
			'sake'    => __( 'Sake list (glass and carafe)', 'beni-kappo' ),
		),
		'core/list'      => array(
			'ruled'   => __( 'Ruled (hairlines, vermilion dash)', 'beni-kappo' ),
			'leaders' => __( 'Price list (dotted leaders)', 'beni-kappo' ),
		),
		'core/quote'     => array(
			'chef' => __( 'Chef\'s words (large italic, gold mark)', 'beni-kappo' ),
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
add_action( 'init', 'beni_kappo_block_styles' );

/**
 * Pattern category.
 */
function beni_kappo_pattern_categories() {
	register_block_pattern_category(
		'beni-kappo',
		array(
			'label'       => __( 'Beni Kappo', 'beni-kappo' ),
			'description' => __( 'Layered, lantern-lit sections for a small counter restaurant: a full-bleed hero behind noren panels, the course in brush numerals, courses and prices, the sake list, counter seating and reservations, the cooks, the journal and contact.', 'beni-kappo' ),
		)
	);
}
add_action( 'init', 'beni_kappo_pattern_categories' );

/**
 * Sake list column names for small screens.
 * On small screens the table's header row is hidden, so each cell shows its column name in front of it. The names
 * come from the table's own header row (edited in the block editor) as data-label attributes, never from CSS text.
 *
 * @param string $html  Rendered table block.
 * @param array  $block Parsed block.
 * @return string
 */
function beni_kappo_table_labels( $html, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'is-style-sake' ) || ! preg_match( '#<thead[^>]*>(.*?)</thead>#is', $html, $head ) || ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
		return $html;
	}
	preg_match_all( '#<th\b[^>]*>(.*?)</th>#is', $head[1], $cells );
	$labels = array_map(
		function ( $cell ) {
			return trim( html_entity_decode( wp_strip_all_tags( $cell ), ENT_QUOTES, 'UTF-8' ) );
		},
		$cells[1]
	);
	$tags   = new WP_HTML_Tag_Processor( $html );
	$column = 0;
	while ( $tags->next_tag() ) {
		$name = $tags->get_tag();
		if ( 'TR' === $name ) {
			$column = 0;
		} elseif ( 'TD' === $name ) {
			if ( isset( $labels[ $column ] ) && '' !== $labels[ $column ] ) {
				$tags->set_attribute( 'data-label', $labels[ $column ] );
			}
			++$column;
		}
	}
	return $tags->get_updated_html();
}
add_filter( 'render_block_core/table', 'beni_kappo_table_labels', 10, 2 );
