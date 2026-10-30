<?php
/**
 * Shirushi Customs — functions and definitions.
 *
 * @package shirushi-customs
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'SHIRUSHI_CUSTOMS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function shirushi_customs_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'shirushi_customs_setup' );

/**
 * Front-end styles and the scroll-effects script (in the head, not deferred, so the hidden states exist before the
 * first paint). strip.js only wires the two round arrows under the dossier strip (click, no scroll listener).
 */
function shirushi_customs_enqueue() {
	wp_enqueue_style( 'shirushi-customs-style', get_stylesheet_uri(), array(), SHIRUSHI_CUSTOMS_VERSION );
	wp_enqueue_style( 'shirushi-customs-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'shirushi-customs-style' ), SHIRUSHI_CUSTOMS_VERSION );
	wp_enqueue_script( 'shirushi-customs-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SHIRUSHI_CUSTOMS_VERSION, false );
	wp_enqueue_script( 'shirushi-customs-strip', get_theme_file_uri( 'assets/strip.js' ), array(), SHIRUSHI_CUSTOMS_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
}
add_action( 'wp_enqueue_scripts', 'shirushi_customs_enqueue' );

/**
 * Pattern category.
 */
function shirushi_customs_pattern_categories() {
	register_block_pattern_category(
		'shirushi-customs',
		array(
			'label'       => __( 'Shirushi Customs', 'shirushi-customs' ),
			'description' => __( 'Sections for a small customs broker: the dark stage with a timeline line, the desk beside a tall photograph, the declaration masonry, the handover dossier strip, the quay with a blurred ground and a map, the preparation list, the fee table, the notes and the notice panel.', 'shirushi-customs' ),
		)
	);
}
add_action( 'init', 'shirushi_customs_pattern_categories' );
