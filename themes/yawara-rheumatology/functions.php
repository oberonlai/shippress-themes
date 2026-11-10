<?php
/**
 * Yawara Rheumatology — functions and definitions.
 *
 * @package yawara-rheumatology
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'YAWARA_RHEUMATOLOGY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function yawara_rheumatology_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'yawara_rheumatology_setup' );

/**
 * Front-end styles and the small scroll-effects script (loaded in the head, not deferred, so the hidden states
 * are set before the first paint).
 */
function yawara_rheumatology_enqueue() {
	wp_enqueue_style( 'yawara-rheumatology-style', get_stylesheet_uri(), array(), YAWARA_RHEUMATOLOGY_VERSION );
	wp_enqueue_style( 'yawara-rheumatology-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), YAWARA_RHEUMATOLOGY_VERSION );
	wp_enqueue_script( 'yawara-rheumatology-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), YAWARA_RHEUMATOLOGY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'yawara_rheumatology_enqueue' );

/**
 * Block markup helpers for the patterns (the seam-tab photo cell and the tab card).
 *
 * @param string $file File in assets/images/.
 * @return string
 */
function yawara_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * A white seam tab: tracked title (a link when $href is given) over a small-caps sub-label.
 *
 * @param string $title Title.
 * @param string $sub   Small-caps sub-label (written in capitals).
 * @param string $href  Link target, '' for none.
 * @param string $class Extra class.
 * @return string
 */
function yawara_tab( $title, $sub, $href = '', $class = '' ) {
	$t = esc_html( $title );
	if ( $href ) {
		$t = '<a href="' . esc_url( $href ) . '">' . $t . '</a>';
	}
	return '<!-- wp:group {"className":"yw-tab ' . $class . '"} -->' . "\n"
		. '<div class="wp-block-group yw-tab ' . $class . '"><!-- wp:paragraph {"className":"yw-tab__t"} -->' . "\n"
		. '<p class="yw-tab__t">' . $t . '</p>' . "\n"
		. '<!-- /wp:paragraph -->' . "\n\n"
		. '<!-- wp:paragraph {"className":"yw-tab__s"} -->' . "\n"
		. '<p class="yw-tab__s">' . esc_html( $sub ) . '</p>' . "\n"
		. '<!-- /wp:paragraph --></div>' . "\n"
		. '<!-- /wp:group -->';
}

/**
 * A photo cell: image with an optional seam tab at its lower-left.
 *
 * @param string $file  File in assets/images/.
 * @param string $alt   Alt text.
 * @param string $tab   Pre-built tab markup ('' for none).
 * @param string $class Extra class on the cell.
 * @return string
 */
function yawara_cell( $file, $alt, $tab = '', $class = '' ) {
	return '<!-- wp:group {"className":"yw-cell ' . $class . '"} -->' . "\n"
		. '<div class="wp-block-group yw-cell ' . $class . '"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yw-cell__img"} -->' . "\n"
		. '<figure class="wp-block-image size-full yw-cell__img"><img src="' . yawara_img( $file ) . '" alt="' . esc_attr( $alt ) . '"/></figure>' . "\n"
		. '<!-- /wp:image -->' . ( $tab ? "\n\n" . $tab : '' ) . '</div>' . "\n"
		. '<!-- /wp:group -->';
}

/**
 * Pattern category.
 */
function yawara_rheumatology_pattern_categories() {
	register_block_pattern_category(
		'yawara-rheumatology',
		array(
			'label'       => __( 'Yawara Rheumatology', 'yawara-rheumatology' ),
			'description' => __( 'Sections for a rheumatology clinic: the half-and-half first screen with a drifting photo strip, seam tab cards, the notice line, the method band, the team strip, the first-year figures and the day at the clinic.', 'yawara-rheumatology' ),
		)
	);
}
add_action( 'init', 'yawara_rheumatology_pattern_categories' );
