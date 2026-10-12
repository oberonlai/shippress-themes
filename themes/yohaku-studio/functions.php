<?php
/**
 * Yohaku Studio — functions and definitions.
 *
 * @package yohaku-studio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'YOHAKU_STUDIO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function yohaku_studio_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'yohaku_studio_setup' );

/**
 * Front-end styles.
 */
function yohaku_studio_enqueue() {
	wp_enqueue_style( 'yohaku-studio-style', get_stylesheet_uri(), array(), YOHAKU_STUDIO_VERSION );
}
add_action( 'wp_enqueue_scripts', 'yohaku_studio_enqueue' );

/**
 * The two small scripts load only where they are needed: the work filter (pills over the project mosaic) and the
 * brief form (composes an email from the fields). Without them every project shows and the brief is sent by email.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function yohaku_studio_scripts( $content, $block ) {
	if ( false !== strpos( $content, 'yh-work--filter' ) ) {
		wp_enqueue_script( 'yohaku-studio-filter', get_theme_file_uri( 'assets/js/filter.js' ), array(), YOHAKU_STUDIO_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	}
	if ( false !== strpos( $content, 'yh-brief' ) ) {
		wp_enqueue_script( 'yohaku-studio-brief', get_theme_file_uri( 'assets/js/brief.js' ), array(), YOHAKU_STUDIO_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	}
	return $content;
}
add_filter( 'render_block_core/group', 'yohaku_studio_scripts', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function yohaku_studio_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'yohaku-studio' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline underline', 'yohaku-studio' ),
			'outline'   => __( 'Ink outline button', 'yohaku-studio' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairline rows)', 'yohaku-studio' ),
		),
		'core/image'     => array(
			'crop' => __( 'Crop marks at the corners', 'yohaku-studio' ),
		),
		'core/separator' => array(
			'crop' => __( 'Registration mark', 'yohaku-studio' ),
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
add_action( 'init', 'yohaku_studio_block_styles' );

/**
 * Pattern category.
 */
function yohaku_studio_pattern_categories() {
	register_block_pattern_category(
		'yohaku-studio',
		array(
			'label'       => __( 'Yohaku Studio', 'yohaku-studio' ),
			'description' => __( 'Quiet sections for a small design studio: the statement, the project mosaic with crop marks, packages and prices, the four-stage process, the team, the brief form, journal and contact.', 'yohaku-studio' ),
		)
	);
}
add_action( 'init', 'yohaku_studio_pattern_categories' );
