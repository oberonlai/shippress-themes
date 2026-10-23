<?php
/**
 * Kotoba Language — functions and definitions.
 *
 * @package kotoba-language
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KOTOBA_LANGUAGE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kotoba_language_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kotoba_language_setup' );

/**
 * Front-end styles and the scroll-effects script. sp-scroll.js loads in the head, not deferred, so the hidden state
 * is set before the first paint.
 */
function kotoba_language_enqueue() {
	wp_enqueue_style( 'kotoba-language-style', get_stylesheet_uri(), array(), KOTOBA_LANGUAGE_VERSION );
	wp_enqueue_style( 'kotoba-language-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kotoba-language-style' ), KOTOBA_LANGUAGE_VERSION );
	wp_enqueue_script( 'kotoba-language-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KOTOBA_LANGUAGE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kotoba_language_enqueue' );

/**
 * Pattern category.
 */
function kotoba_language_pattern_categories() {
	register_block_pattern_category(
		'kotoba-language',
		array(
			'label'       => __( 'Kotoba Language', 'kotoba-language' ),
			'description' => __( 'Sections for an adult language school: a split photo-and-text opening with a cropped wordmark, three unequal pathways with mirrored arcs, a CEFR hairline scale, a classroom band, circular teacher portraits, a fee table and learner stories.', 'kotoba-language' ),
		)
	);
}
add_action( 'init', 'kotoba_language_pattern_categories' );

/**
 * One of the pair of mirrored arcs (1px curve, 112 x 400, round dot at one end: top on the left, bottom on the right).
 *
 * @param string $side 'l' or 'r'.
 * @return string SVG markup.
 */
function kotoba_language_arc( $side = 'l' ) {
	if ( 'r' === $side ) {
		$path = 'M4 0 Q108 200 4 400';
		$dot  = '<circle cx="4" cy="396.5" r="3.5" fill="#6E5C4C"/>';
	} else {
		$path = 'M108 0 Q4 200 108 400';
		$dot  = '<circle cx="108" cy="3.5" r="3.5" fill="#6E5C4C"/>';
	}
	return '<svg class="kl-arc kl-arc--' . esc_attr( $side ) . '" viewBox="0 0 112 400" width="112" height="400" aria-hidden="true" focusable="false"><path d="' . $path . '" fill="none" stroke="#6E5C4C" stroke-width="1" vector-effect="non-scaling-stroke"/>' . $dot . '</svg>';
}
