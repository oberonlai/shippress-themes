<?php
/**
 * Shirabe Research — functions and definitions.
 *
 * @package shirabe-research
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'SHIRABE_RESEARCH_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (the scroll-effect CSS too, so the editor shows the final state).
 */
function shirabe_research_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'assets/sp-scroll.css' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'shirabe_research_setup' );

/**
 * Front-end styles and the scroll-effect script (in the head, not deferred, so the hidden states exist before first paint).
 */
function shirabe_research_enqueue() {
	wp_enqueue_style( 'shirabe-research-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), SHIRABE_RESEARCH_VERSION );
	wp_enqueue_style( 'shirabe-research-style', get_stylesheet_uri(), array( 'shirabe-research-scroll' ), SHIRABE_RESEARCH_VERSION );
	wp_enqueue_script( 'shirabe-research-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SHIRABE_RESEARCH_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'shirabe_research_enqueue' );

/**
 * Pattern category.
 */
function shirabe_research_pattern_categories() {
	register_block_pattern_category(
		'shirabe-research',
		array(
			'label'       => __( 'Shirabe Research', 'shirabe-research' ),
			'description' => __( 'Sections for a market research practice: the split headline row, the framed window, the brief, the dropped two-column method, one study in numbers, the study ledger, people and the fee ledger.', 'shirabe-research' ),
		)
	);
}
add_action( 'init', 'shirabe_research_pattern_categories' );
