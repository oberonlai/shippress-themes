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
			'text-link' => __( 'Text link with a lilac underline', 'asagao-kinema' ),
			'outline'   => __( 'Hairline outline button', 'asagao-kinema' ),
		),
		'core/table'     => array(
			'prices' => __( 'Prices (amounts on the right, hairlines)', 'asagao-kinema' ),
		),
		'core/separator' => array(
			'reel' => __( 'Film strip (a short perforated rule)', 'asagao-kinema' ),
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
