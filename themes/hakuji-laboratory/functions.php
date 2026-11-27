<?php
/**
 * Hakuji Laboratory: functions and definitions.
 *
 * @package hakuji-laboratory
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'HAKUJI_LABORATORY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hakuji_laboratory_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hakuji_laboratory_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function hakuji_laboratory_enqueue() {
	wp_enqueue_style( 'hakuji-laboratory-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), HAKUJI_LABORATORY_VERSION );
	wp_enqueue_style( 'hakuji-laboratory-style', get_stylesheet_uri(), array( 'hakuji-laboratory-sp-scroll' ), HAKUJI_LABORATORY_VERSION );
	wp_enqueue_script( 'hakuji-laboratory-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HAKUJI_LABORATORY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'hakuji_laboratory_enqueue' );

/**
 * Pattern category.
 */
function hakuji_laboratory_pattern_categories() {
	register_block_pattern_category(
		'hakuji-laboratory',
		array(
			'label'       => __( 'Hakuji Laboratory', 'hakuji-laboratory' ),
			'description' => __( 'Sections for a dental laboratory landing page: the collage hero with a stats row, rounded sheets over a parallax photo band, case-type cards, upload steps, the fee table, the team list, pick-up hours and the account sheet.', 'hakuji-laboratory' ),
		)
	);
}
add_action( 'init', 'hakuji_laboratory_pattern_categories' );
