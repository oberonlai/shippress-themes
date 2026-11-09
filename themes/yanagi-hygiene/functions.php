<?php
/**
 * Yanagi Hygiene: functions and definitions.
 *
 * @package yanagi-hygiene
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'YANAGI_HYGIENE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared but not required.
 */
function yanagi_hygiene_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'yanagi_hygiene_setup' );

/**
 * Front-end styles and the small scroll script (head, not deferred, so the hidden state never flashes).
 */
function yanagi_hygiene_enqueue() {
	wp_enqueue_style( 'yanagi-hygiene-style', get_stylesheet_uri(), array(), YANAGI_HYGIENE_VERSION );
	wp_enqueue_style( 'yanagi-hygiene-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'yanagi-hygiene-style' ), YANAGI_HYGIENE_VERSION );
	wp_enqueue_script( 'yanagi-hygiene-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), YANAGI_HYGIENE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'yanagi_hygiene_enqueue' );

/**
 * Pattern category.
 */
function yanagi_hygiene_pattern_categories() {
	register_block_pattern_category(
		'yanagi-hygiene',
		array(
			'label'       => __( 'Yanagi Hygiene', 'yanagi-hygiene' ),
			'description' => __( 'Sections for a commercial pest-control landing page: a skyline-cut photo opening with a twelve-month rail, a building cross-section with plus pills, a sticky photo beside timed chapters, a parallax photo band, a framed logbook panel, fees and a pentagon request tab.', 'yanagi-hygiene' ),
		)
	);
}
add_action( 'init', 'yanagi_hygiene_pattern_categories' );

/**
 * Section title lockup (light Latin title, localised sub-title, 96 px rule).
 *
 * @param string $title Title.
 * @param string $sub   Sub-title.
 * @param string $extra Extra class names.
 * @return string Block markup.
 */
function yh_lock( $title, $sub, $extra = 'sp-reveal sp-reveal--up' ) {
	$cls = trim( 'yh-lock ' . $extra );
	return '<!-- wp:group {"className":"' . $cls . '","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group ' . $cls . '"><!-- wp:heading {"className":"yh-lock__t"} -->' . "\n"
		. '<h2 class="wp-block-heading yh-lock__t">' . esc_html( $title ) . '</h2>' . "\n"
		. '<!-- /wp:heading --><!-- wp:paragraph {"className":"yh-lock__s"} -->' . "\n"
		. '<p class="yh-lock__s">' . esc_html( $sub ) . '</p>' . "\n"
		. '<!-- /wp:paragraph --><!-- wp:separator {"className":"yh-lock__rule"} -->' . "\n"
		. '<hr class="wp-block-separator has-alpha-channel-opacity yh-lock__rule"/>' . "\n"
		. '<!-- /wp:separator --></div>' . "\n"
		. '<!-- /wp:group -->';
}

/**
 * The single request call to action: a pentagon tab pointing right.
 *
 * @param string $size  s (header), m (bar), l (request band).
 * @param string $extra Extra class names.
 * @return string Block markup.
 */
function yh_pent( $size = 'm', $extra = '' ) {
	$cls = trim( 'yh-pent yh-pent--' . $size . ' ' . $extra );
	return '<!-- wp:buttons {"className":"yh-pents","layout":{"type":"flex"}} -->' . "\n"
		. '<div class="wp-block-buttons yh-pents"><!-- wp:button {"className":"' . $cls . '"} -->' . "\n"
		. '<div class="wp-block-button ' . $cls . '"><a class="wp-block-button__link wp-element-button" href="/contact/">' . esc_html( yh_t( 'cta' ) ) . '</a></div>' . "\n"
		. '<!-- /wp:button --></div>' . "\n"
		. '<!-- /wp:buttons -->';
}

/**
 * A plus pill that opens a short note (core Details block).
 *
 * @param string $cls   Class names.
 * @param string $title Pill label.
 * @param string $note  Note text.
 * @return string Block markup.
 */
function yh_pill( $cls, $title, $note ) {
	return '<!-- wp:details {"className":"' . $cls . '"} -->' . "\n"
		. '<details class="wp-block-details ' . $cls . '"><summary>' . esc_html( $title ) . '</summary><!-- wp:paragraph -->' . "\n"
		. '<p>' . esc_html( $note ) . '</p>' . "\n"
		. '<!-- /wp:paragraph --></details>' . "\n"
		. '<!-- /wp:details -->';
}

/**
 * Photo as a core Image block.
 *
 * @param string $file Image file name in assets/images.
 * @param string $alt  Alt text.
 * @param string $cls  Class names.
 * @return string Block markup.
 */
function yh_img( $file, $alt, $cls = '' ) {
	$cls = trim( 'yh-ph ' . $cls );
	return '<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"' . $cls . '"} -->' . "\n"
		. '<figure class="wp-block-image size-full ' . $cls . '"><img src="' . esc_url( get_theme_file_uri( 'assets/images/' . $file ) ) . '" alt="' . esc_attr( $alt ) . '"/></figure>' . "\n"
		. '<!-- /wp:image -->';
}
