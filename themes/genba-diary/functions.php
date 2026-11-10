<?php
/**
 * Genba Diary — functions and definitions.
 *
 * @package genba-diary
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'GENBA_DIARY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function genba_diary_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'genba_diary_setup' );

/**
 * Front-end styles and the scroll-effects script (head, not deferred, so html.sp-js is set before first paint).
 */
function genba_diary_enqueue() {
	wp_enqueue_style( 'genba-diary-style', get_stylesheet_uri(), array(), GENBA_DIARY_VERSION );
	wp_enqueue_style( 'genba-diary-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'genba-diary-style' ), GENBA_DIARY_VERSION );
	wp_enqueue_script( 'genba-diary-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), GENBA_DIARY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'genba_diary_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function genba_diary_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'outline-chevron', 'label' => __( 'Outline with a chevron', 'genba-diary' ) ) );
	register_block_style( 'core/paragraph', array( 'name' => 'lead', 'label' => __( 'Lead paragraph', 'genba-diary' ) ) );
}
add_action( 'init', 'genba_diary_block_styles' );

/**
 * Pattern category.
 */
function genba_diary_pattern_categories() {
	register_block_pattern_category(
		'genba-diary',
		array(
			'label'       => __( 'Genba Diary', 'genba-diary' ),
			'description' => __( 'Sections for a construction site-diary landing page: the slanted triptych cover, the intro band, crew cards, diary-day cards, the parallax gate band, rollout rows, stories, plans, questions and the request band.', 'genba-diary' ),
		)
	);
}
add_action( 'init', 'genba_diary_pattern_categories' );

/**
 * The "More field notes" row on a post leaves out the post being read.
 *
 * @param array    $query Query vars.
 * @param WP_Block $block The Query Loop block.
 * @return array
 */
function genba_diary_related_query( $query, $block ) {
	$class = isset( $block->attributes['className'] ) ? (string) $block->attributes['className'] : '';
	if ( false !== strpos( $class, 'gd-related-posts' ) && is_singular( 'post' ) ) {
		$query['post__not_in'] = array( get_queried_object_id() );
	}
	return $query;
}
add_filter( 'query_loop_block_query_vars', 'genba_diary_related_query', 10, 2 );
