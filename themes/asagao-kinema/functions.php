<?php
/**
 * Asagao Kinema — functions and definitions.
 *
 * @package asagao-kinema
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'ASAGAO_KINEMA_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function asagao_kinema_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'asagao_kinema_setup' );

/**
 * Front-end styles.
 */
function asagao_kinema_enqueue() {
	wp_enqueue_style( 'asagao-kinema-style', get_stylesheet_uri(), array(), ASAGAO_KINEMA_VERSION );
}
add_action( 'wp_enqueue_scripts', 'asagao_kinema_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function asagao_kinema_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small spaced capitals)', 'asagao-kinema' ),
			'lead'  => __( 'Lead paragraph', 'asagao-kinema' ),
		),
		'core/button'    => array(
			'ticket'    => __( 'Ticket (shu vermilion, notched ends)', 'asagao-kinema' ),
			'text-link' => __( 'Text link with a heavy underline', 'asagao-kinema' ),
			'outline'   => __( 'Outline button', 'asagao-kinema' ),
		),
		'core/table'     => array(
			'prices' => __( 'Prices (amounts on the right, hairlines)', 'asagao-kinema' ),
		),
		'core/separator' => array(
			'reel' => __( 'Film strip (a short sprocket rule)', 'asagao-kinema' ),
		),
	);

	foreach ( $styles as $block => $variations ) {
		foreach ( $variations as $name => $label ) {
			register_block_style(
				$block,
				array(
					'name'  => $name,
					'label' => $label,
				)
			);
		}
	}
}
add_action( 'init', 'asagao_kinema_block_styles' );

/**
 * Pattern category.
 */
function asagao_kinema_pattern_categories() {
	register_block_pattern_category(
		'asagao-kinema',
		array(
			'label'       => __( 'Asagao Kinema', 'asagao-kinema' ),
			'description' => __( 'Sections for a one-screen independent cinema: the week\'s programme, tickets, membership, the journal and a visit page.', 'asagao-kinema' ),
		)
	);
}
add_action( 'init', 'asagao_kinema_pattern_categories' );

/**
 * The week's programme scrolls sideways on the home page (a film strip): make the strip a named, focusable region so
 * it can be scrolled with the keyboard. Works for the synced programme as stored on any site, old or new.
 *
 * @param string $html  Rendered block.
 * @param array  $block Parsed block.
 * @return string
 */
function asagao_kinema_strip_region( $html, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( ! preg_match( '/(^|\s)ak-prog(\s|$)/', $class ) || false !== strpos( $html, 'data-ak-strip' ) ) {
		return $html;
	}
	return preg_replace(
		'/<div class="([^"]*\bak-prog\b[^"]*)"/',
		'<div class="$1" data-ak-strip role="region" tabindex="0" aria-label="' . esc_attr__( 'This week\'s programme, Monday to Sunday', 'asagao-kinema' ) . '"',
		$html,
		1
	);
}
add_filter( 'render_block_core/group', 'asagao_kinema_strip_region', 10, 2 );
