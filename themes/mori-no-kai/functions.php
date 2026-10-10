<?php
/**
 * Mori no Kai — functions and definitions.
 *
 * @package mori-no-kai
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';

define( 'MORI_NO_KAI_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function mori_no_kai_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'mori_no_kai_setup' );

/**
 * Front-end styles.
 */
function mori_no_kai_enqueue() {
	wp_enqueue_style( 'mori-no-kai-style', get_stylesheet_uri(), array(), MORI_NO_KAI_VERSION );
}
add_action( 'wp_enqueue_scripts', 'mori_no_kai_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function mori_no_kai_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label'   => __( 'Label (field-note capitals with a rule)', 'mori-no-kai' ),
			'lead'    => __( 'Lead paragraph (light serif)', 'mori-no-kai' ),
			'numeral' => __( 'Numeral (large, light)', 'mori-no-kai' ),
			'fine'    => __( 'Fine print', 'mori-no-kai' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with arrow', 'mori-no-kai' ),
		),
		'core/separator' => array(
			'ring' => __( 'Ring (a growth ring between rules)', 'mori-no-kai' ),
		),
		'core/list'      => array(
			'ruled'    => __( 'Ruled (hairlines, open dots)', 'mori-no-kai' ),
			'timeline' => __( 'Timeline (bold year first)', 'mori-no-kai' ),
		),
		'core/table'     => array(
			'ledger' => __( 'Ledger (hairlines, figures on the right)', 'mori-no-kai' ),
		),
		'core/quote'     => array(
			'plain' => __( 'Plain (no rule)', 'mori-no-kai' ),
		),
		'core/details'   => array(
			'faq' => __( 'FAQ (ruled, plus sign)', 'mori-no-kai' ),
		),
		'core/image'     => array(
			'frame' => __( 'Frame (washi border)', 'mori-no-kai' ),
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
add_action( 'init', 'mori_no_kai_block_styles' );

/**
 * Pattern category.
 */
function mori_no_kai_pattern_categories() {
	register_block_pattern_category(
		'mori-no-kai',
		array(
			'label'       => __( 'Mori no Kai', 'mori-no-kai' ),
			'description' => __( 'Quiet sections for a forest-conservation nonprofit: a misty hero, programmes, impact numbers, volunteer work days and sign-up, giving tiers, the people, news and the newsletter.', 'mori-no-kai' ),
		)
	);
}
add_action( 'init', 'mori_no_kai_pattern_categories' );
