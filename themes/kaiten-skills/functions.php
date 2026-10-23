<?php
/**
 * Kaiten Skills — functions and definitions.
 *
 * @package kaiten-skills
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'KAITEN_SKILLS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kaiten_skills_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kaiten_skills_setup' );

/**
 * Front-end styles and the scroll-effects script. sp-scroll.js loads in the head, not deferred, so the hidden state
 * is set before the first paint.
 */
function kaiten_skills_enqueue() {
	wp_enqueue_style( 'kaiten-skills-style', get_stylesheet_uri(), array(), KAITEN_SKILLS_VERSION );
	wp_enqueue_style( 'kaiten-skills-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kaiten-skills-style' ), KAITEN_SKILLS_VERSION );
	wp_enqueue_script( 'kaiten-skills-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KAITEN_SKILLS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kaiten_skills_enqueue' );

/**
 * Pattern category.
 */
function kaiten_skills_pattern_categories() {
	register_block_pattern_category(
		'kaiten-skills',
		array(
			'label'       => __( 'Kaiten Skills', 'kaiten-skills' ),
			'description' => __( 'Sections for an online career-skills school: a hand-cut photo frame with a leaf button, a strip of course cards, a wave-edged band with the five-step timeline and a price panel, stories, tutors and questions.', 'kaiten-skills' ),
		)
	);
}
add_action( 'init', 'kaiten_skills_pattern_categories' );
