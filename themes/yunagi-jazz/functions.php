<?php
/**
 * Yunagi Jazz: functions and definitions.
 *
 * @package yunagi-jazz
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'YUNAGI_JAZZ_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function yunagi_jazz_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'yunagi_jazz_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function yunagi_jazz_enqueue() {
	wp_enqueue_style( 'yunagi-jazz-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), YUNAGI_JAZZ_VERSION );
	wp_enqueue_style( 'yunagi-jazz-style', get_stylesheet_uri(), array( 'yunagi-jazz-sp-scroll' ), YUNAGI_JAZZ_VERSION );
	wp_enqueue_script( 'yunagi-jazz-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), YUNAGI_JAZZ_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'yunagi_jazz_enqueue' );

/**
 * Pattern category.
 */
function yunagi_jazz_pattern_categories() {
	register_block_pattern_category(
		'yunagi-jazz',
		array(
			'label'       => __( 'Yunagi Jazz', 'yunagi-jazz' ),
			'description' => __( 'Sections for an open-air jazz festival: three photographs on an ink mat, drifting set cards pinned behind white sheets, hour-by-hour day schedules, what a ticket includes and the one way to buy.', 'yunagi-jazz' ),
		)
	);
}
add_action( 'init', 'yunagi_jazz_pattern_categories' );

/** The cloned marquee set is decorative: mark it aria-hidden at render time (a raw aria-hidden in the block markup makes core/group invalid in the editor). */
function yunagi_jazz_strip_clone_aria( $content, $block ) {
	if ( 'core/group' !== ( $block['blockName'] ?? '' ) || false === strpos( $content, 'yj-strip__set--clone' ) ) {
		return $content;
	}
	$p = new WP_HTML_Tag_Processor( $content );
	if ( $p->next_tag( 'div' ) && $p->has_class( 'yj-strip__set--clone' ) ) {
		$p->set_attribute( 'aria-hidden', 'true' );
	}
	return $p->get_updated_html();
}
add_filter( 'render_block', 'yunagi_jazz_strip_clone_aria', 10, 2 );
