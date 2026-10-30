<?php
/**
 * Kumoi Lodge: functions and definitions.
 *
 * @package kumoi-lodge
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KUMOI_LODGE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (the scroll effects show their final state in the editor).
 */
function kumoi_lodge_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kumoi_lodge_setup' );

/**
 * Front-end styles and the scroll-effects script (in <head>, not deferred, so the hidden states exist before first paint).
 */
function kumoi_lodge_enqueue() {
	wp_enqueue_style( 'kumoi-lodge-style', get_stylesheet_uri(), array(), KUMOI_LODGE_VERSION );
	wp_enqueue_style( 'kumoi-lodge-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kumoi-lodge-style' ), KUMOI_LODGE_VERSION );
	wp_enqueue_script( 'kumoi-lodge-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KUMOI_LODGE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kumoi_lodge_enqueue' );

/**
 * Pattern category.
 */
function kumoi_lodge_pattern_categories() {
	register_block_pattern_category(
		'kumoi-lodge',
		array(
			'label'       => __( 'Kumoi Lodge', 'kumoi-lodge' ),
			'description' => __( 'Sections for a mountain lodge: a framed window with an info bar, a blurred opener, room cards with a hairline split row, a cloud stage, a bordered facility box, food squares, a rate table and a dusk close.', 'kumoi-lodge' ),
		)
	);
}
add_action( 'init', 'kumoi_lodge_pattern_categories' );

/**
 * URL of a theme image.
 *
 * @param string $name File name without extension (assets/images/<name>.webp).
 * @return string
 */
function kumoi_lodge_img( $name ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $name . '.webp' ) );
}

/**
 * Outline pill button markup (block comment included).
 *
 * @param string $label Button label.
 * @param string $path  Site path.
 * @return string Escaped block markup.
 */
function kumoi_lodge_pill( $label, $path ) {
	return '<!-- wp:buttons {"className":"km-pills"} -->' . "\n"
		. '<div class="wp-block-buttons km-pills"><!-- wp:button {"className":"km-pill"} -->' . "\n"
		. '<div class="wp-block-button km-pill"><a class="wp-block-button__link wp-element-button" href="' . esc_url( home_url( $path ) ) . '">' . esc_html( $label ) . '</a></div>' . "\n"
		. '<!-- /wp:button --></div>' . "\n"
		. '<!-- /wp:buttons -->';
}
