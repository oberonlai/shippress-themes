<?php
/**
 * Nagisa Grill — functions and definitions.
 *
 * @package nagisa-grill
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'NAGISA_GRILL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function nagisa_grill_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'nagisa_grill_setup' );

/**
 * Front-end styles and the small scroll-effects script (loaded in the head, not deferred, so the hidden states
 * are set before the first paint).
 */
function nagisa_grill_enqueue() {
	wp_enqueue_style( 'nagisa-grill-style', get_stylesheet_uri(), array(), NAGISA_GRILL_VERSION );
	wp_enqueue_style( 'nagisa-grill-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), NAGISA_GRILL_VERSION );
	wp_enqueue_script( 'nagisa-grill-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), NAGISA_GRILL_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'nagisa_grill_enqueue' );

/**
 * Pattern category.
 */
function nagisa_grill_pattern_categories() {
	register_block_pattern_category(
		'nagisa-grill',
		array(
			'label'       => __( 'Nagisa Grill', 'nagisa-grill' ),
			'description' => __( 'Sections for a one-boat seafood restaurant: the full-bleed photo first screen with a wordmark along its foot, the day schedule, the near-black photo scene, the table rules and the slate plate band.', 'nagisa-grill' ),
		)
	);
}
add_action( 'init', 'nagisa_grill_pattern_categories' );

/**
 * The tide mark (three wavy 1px hairlines), inline SVG in an HTML block, used above every section label.
 *
 * @param string $class Extra class for the svg.
 * @return string Block markup.
 */
function nagisa_grill_tide( $class = '' ) {
	$d = 'M0 4q3.75 -3.2 7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0M0 10q3.75 -3.2 7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0M0 16q3.75 -3.2 7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0';
	return '<!-- wp:html -->' . "\n" . '<svg class="ng-tide ' . esc_attr( $class ) . '" viewBox="0 0 60 20" preserveAspectRatio="none" width="60" height="20" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" aria-hidden="true" focusable="false"><path d="' . $d . '"/></svg>' . "\n" . '<!-- /wp:html -->';
}
