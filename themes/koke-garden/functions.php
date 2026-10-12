<?php
/**
 * Koke Garden — functions and definitions.
 *
 * @package koke-garden
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/projects.php';

define( 'KOKE_GARDEN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function koke_garden_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'koke_garden_setup' );

/**
 * Front-end styles, and the small menu script: it moves the synced studio details into the full-screen menu and keeps
 * the Menu button's aria-expanded in step with it. The menu itself is the core Navigation overlay (focus trap, Escape
 * closes, focus returns to the button).
 */
function koke_garden_enqueue() {
	wp_enqueue_style( 'koke-garden-style', get_stylesheet_uri(), array(), KOKE_GARDEN_VERSION );
	wp_enqueue_script(
		'koke-garden-menu',
		get_theme_file_uri( 'assets/js/menu.js' ),
		array(),
		KOKE_GARDEN_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'koke_garden_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function koke_garden_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'koke-garden' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline underline', 'koke-garden' ),
			'outline'   => __( 'Moss ink outline button', 'koke-garden' ),
		),
		'core/list'      => array(
			'stones' => __( 'Stone-dot list (hairline rows)', 'koke-garden' ),
		),
		'core/separator' => array(
			'raked' => __( 'Raked gravel band', 'koke-garden' ),
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
add_action( 'init', 'koke_garden_block_styles' );

/**
 * Pattern category.
 */
function koke_garden_pattern_categories() {
	register_block_pattern_category(
		'koke-garden',
		array(
			'label'       => __( 'Koke Garden', 'koke-garden' ),
			'description' => __( 'Quiet sections for a small garden design studio: the statement over a garden photo, the project mosaic with plan sketches, the seasonal care calendar and plans, the approach, the team, journal and contact.', 'koke-garden' ),
		)
	);
}
add_action( 'init', 'koke_garden_pattern_categories' );
