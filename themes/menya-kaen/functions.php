<?php
/**
 * Menya Kaen — functions and definitions.
 *
 * @package menya-kaen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shop-info.php';

define( 'MENYA_KAEN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function menya_kaen_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'menya_kaen_setup' );

/**
 * Front-end styles and one small script that keeps the small-screen menu button's aria-expanded state in step with
 * the menu (assets/js/menu.js).
 */
function menya_kaen_enqueue() {
	wp_enqueue_style( 'menya-kaen-style', get_stylesheet_uri(), array(), MENYA_KAEN_VERSION );
	wp_enqueue_script(
		'menya-kaen-menu',
		get_theme_file_uri( 'assets/js/menu.js' ),
		array(),
		MENYA_KAEN_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'menya_kaen_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function menya_kaen_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small spaced capitals after a vermilion hairline)', 'menya-kaen' ),
			'lead'  => __( 'Lead paragraph', 'menya-kaen' ),
		),
		'core/separator' => array(
			'dots' => __( 'Three quiet dots', 'menya-kaen' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline', 'menya-kaen' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairlines between items)', 'menya-kaen' ),
			'route' => __( 'Route with numbered stops', 'menya-kaen' ),
		),
		'core/details'   => array(
			'faq' => __( 'Question (hairline and a plus sign)', 'menya-kaen' ),
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
add_action( 'init', 'menya_kaen_block_styles' );

/**
 * Pattern category.
 */
function menya_kaen_pattern_categories() {
	register_block_pattern_category(
		'menya-kaen',
		array(
			'label'       => __( 'Menya Kaen', 'menya-kaen' ),
			'description' => __( 'Quiet sections for a small ramen-ya: a long-read home page, the printed menu card, add-ons, the walk from the station, the people, notes, the newsletter and contact.', 'menya-kaen' ),
		)
	);
}
add_action( 'init', 'menya_kaen_pattern_categories' );

/**
 * Pages imported by version 1 show photographs straight from the theme folder (assets/images/<name>.jpg). Version 2
 * retired some of those files; this points each retired name at the version 2 photograph that takes its place, so an
 * updated site shows no broken images. The page content itself is never changed.
 *
 * @param string $html Rendered block.
 * @return string
 */
function menya_kaen_retired_images( $html ) {
	if ( false === strpos( $html, 'assets/images/' ) ) {
		return $html;
	}
	$base    = get_theme_file_uri( 'assets/images/' );
	$retired = array(
		'shoyu'            => 'hero',
		'miso'             => 'shio',
		'chef'             => 'hands',
		'noodles'          => 'hands',
		'street'           => 'noren',
		'gyoza'            => 'tare',
		'toppings-flatlay' => 'tare',
	);
	foreach ( $retired as $old => $new ) {
		$html = str_replace( $base . $old . '.jpg', $base . $new . '.jpg', $html );
	}
	return $html;
}
add_filter( 'render_block', 'menya_kaen_retired_images' );
