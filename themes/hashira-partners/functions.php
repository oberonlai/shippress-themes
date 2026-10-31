<?php
/**
 * Hashira Partners — functions and definitions.
 *
 * @package hashira-partners
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'HASHIRA_PARTNERS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (the scroll-effect CSS too, so the editor shows the final state).
 */
function hashira_partners_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hashira_partners_setup' );

/**
 * Front-end styles and the scroll-effect script (in the head, not deferred, so the hidden states exist before first paint).
 */
function hashira_partners_enqueue() {
	wp_enqueue_style( 'hashira-partners-style', get_stylesheet_uri(), array(), HASHIRA_PARTNERS_VERSION );
	wp_enqueue_style( 'hashira-partners-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'hashira-partners-style' ), HASHIRA_PARTNERS_VERSION );
	wp_enqueue_script( 'hashira-partners-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HASHIRA_PARTNERS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'hashira_partners_enqueue' );

/**
 * Pattern category.
 */
function hashira_partners_pattern_categories() {
	register_block_pattern_category(
		'hashira-partners',
		array(
			'label'       => __( 'Hashira Partners', 'hashira-partners' ),
			'description' => __( 'Sections for a small-warehouse leasing brokerage: the ruled two-line headline over a photograph, case panels with four caption columns, the stepped-bar buildings archive, the ruled viewing steps and the request form.', 'hashira-partners' ),
		)
	);
}
add_action( 'init', 'hashira_partners_pattern_categories' );
