<?php
/**
 * Kanjo College — functions and definitions.
 *
 * @package kanjo-college
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KANJO_COLLEGE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared; without the plugin it does nothing.
 */
function kanjo_college_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kanjo_college_setup' );

/**
 * Front-end styles and the scroll-effects script (in the head, not deferred: it adds html.sp-js before first paint).
 */
function kanjo_college_enqueue() {
	wp_enqueue_style( 'kanjo-college-style', get_stylesheet_uri(), array(), KANJO_COLLEGE_VERSION );
	wp_enqueue_style( 'kanjo-college-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kanjo-college-style' ), KANJO_COLLEGE_VERSION );
	wp_enqueue_script( 'kanjo-college-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KANJO_COLLEGE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kanjo_college_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kanjo_college_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'text-link', 'label' => __( 'Text link with an arrow', 'kanjo-college' ) ) );
	register_block_style( 'core/paragraph', array( 'name' => 'chip', 'label' => __( 'Section chip', 'kanjo-college' ) ) );
}
add_action( 'init', 'kanjo_college_block_styles' );

/**
 * Pattern category.
 */
function kanjo_college_pattern_categories() {
	register_block_pattern_category(
		'kanjo-college',
		array(
			'label'       => __( 'Kanjo College', 'kanjo-college' ),
			'description' => __( 'Sections for an accountancy training college: the framed window cover with the route bar, portrait paper cards, the twelve-week row, the evening study pause, the lecturer ledger, the fee ledger, learner stories and the place-taking band.', 'kanjo-college' ),
		)
	);
}
add_action( 'init', 'kanjo_college_pattern_categories' );

/**
 * Inline a line-art SVG from assets/line/ (our own drawings), for patterns.
 *
 * @param string $name File name without extension.
 * @return string SVG markup.
 */
function kanjo_college_svg( $name ) {
	$file = get_theme_file_path( 'assets/line/' . sanitize_file_name( $name ) . '.svg' );
	return is_readable( $file ) ? (string) file_get_contents( $file ) : '';
}
