<?php
/**
 * Eiyo Clinic — functions and definitions.
 *
 * @package eiyo-clinic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'EIYO_CLINIC_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; the theme works without the plugin.
 */
function eiyo_clinic_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'eiyo_clinic_setup' );

/**
 * Front-end styles and the scroll script (in the head, not deferred, so the hidden states exist before first paint).
 */
function eiyo_clinic_enqueue() {
	wp_enqueue_style( 'eiyo-clinic-style', get_stylesheet_uri(), array(), EIYO_CLINIC_VERSION );
	wp_enqueue_style( 'eiyo-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), EIYO_CLINIC_VERSION );
	wp_enqueue_script( 'eiyo-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), EIYO_CLINIC_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'eiyo_clinic_enqueue' );

/**
 * Pattern category.
 */
function eiyo_clinic_pattern_categories() {
	register_block_pattern_category(
		'eiyo-clinic',
		array(
			'label'       => __( 'Eiyo Clinic', 'eiyo-clinic' ),
			'description' => __( 'Sections for a nutrition clinic home page: the inset photograph with the headline under it, the lighting-up statement, the coverflow problem row, the pine block with two hairline arches, story cards, the room, the fee list and the closing strip.', 'eiyo-clinic' ),
		)
	);
}
add_action( 'init', 'eiyo_clinic_pattern_categories' );

/**
 * Alt text of the theme's photographs, by id.
 *
 * @return array
 */
function eiyo_clinic_alts() {
	return array(
		'p01' => 'Dietitian and client sitting across an oak table with a handwritten meal plan.',
		'p02' => 'Man sitting alone at a bright kitchen table eating a packed lunch beside notes.',
		'p03' => 'Two adults sharing a simple dinner of soup and bread at a wooden table.',
		'p04' => 'Hands writing entries into an open notebook beside a warm cup of tea.',
		'p05' => 'Person wearing an overcoat standing near an open apartment door holding a coffee cup.',
		'p06' => 'Person eating a late evening meal quietly at a white kitchen island counter.',
		'p07' => 'Person standing before an open refrigerator inspecting stacked plastic meal containers inside.',
		'p08' => 'Overhead view of a breakfast plate beside a handwritten plan and a pencil.',
		'p09' => 'Mature man preparing warm oatmeal with fresh fruit inside a sunlit home kitchen.',
		'p10' => 'Woman wearing medical scrubs packing a reusable lunch container on a kitchen counter.',
		'p11' => 'Parent and teenager arranging four ceramic plates onto a plain wooden dinner table.',
		'p12' => 'Three professional dietitians discussing printed patient notes around a sunlit wooden conference table.',
		'p13' => 'Bright clinic reception area featuring indoor plants, white walls, and a light wooden bench.',
	);
}

/**
 * URL of one of the theme's photographs (assets/images/<id>.webp).
 *
 * @param string $id Photo id, e.g. p01.
 * @return string
 */
function eiyo_clinic_img( $id ) {
	return get_theme_file_uri( 'assets/images/' . strtolower( $id ) . '.webp' );
}

/**
 * An image block for one photograph.
 *
 * @param string $id    Photo id.
 * @param string $class Extra class names (also written to the block attributes).
 * @param string $img   Extra attributes for the img tag (e.g. loading="lazy").
 * @return string Block markup.
 */
function eiyo_clinic_image( $id, $class = '', $img = '' ) {
	$id    = strtolower( $id );
	$alts  = eiyo_clinic_alts();
	$class = trim( 'ec-ph ec-ph--' . $id . ' ' . $class );
	return '<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"' . esc_attr( $class ) . '"} -->' . "\n"
		. '<figure class="wp-block-image size-full ' . esc_attr( $class ) . '"><img src="' . esc_url( eiyo_clinic_img( $id ) ) . '" alt="' . esc_attr( isset( $alts[ $id ] ) ? $alts[ $id ] : '' ) . '"' . ( $img ? ' ' . $img : '' ) . '/></figure>' . "\n"
		. '<!-- /wp:image -->';
}
