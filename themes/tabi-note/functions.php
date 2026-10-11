<?php
/**
 * Tabi Note — functions and definitions.
 *
 * @package tabi-note
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'TABI_NOTE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function tabi_note_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'tabi_note_setup' );

/**
 * Front-end styles and the menu script (keeps the phone menu button's aria-expanded in step with the overlay).
 */
function tabi_note_enqueue() {
	wp_enqueue_style( 'tabi-note-style', get_stylesheet_uri(), array(), TABI_NOTE_VERSION );
	wp_enqueue_script(
		'tabi-note-menu',
		get_theme_file_uri( 'assets/js/menu.js' ),
		array(),
		TABI_NOTE_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'tabi_note_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function tabi_note_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small spaced capitals)', 'tabi-note' ),
			'lead'  => __( 'Lead paragraph', 'tabi-note' ),
		),
		'core/separator' => array(
			'hairline' => __( 'Hairline (a fine sea-mist rule)', 'tabi-note' ),
		),
		'core/button'    => array(
			'quiet' => __( 'Quiet (outline)', 'tabi-note' ),
		),
		'core/group'     => array(
			'card' => __( 'Paper card', 'tabi-note' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairlines between items)', 'tabi-note' ),
		),
		'core/details'   => array(
			'faq' => __( 'Question', 'tabi-note' ),
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
add_action( 'init', 'tabi_note_block_styles' );

/**
 * Pattern category.
 */
function tabi_note_pattern_categories() {
	register_block_pattern_category(
		'tabi-note',
		array(
			'label'       => __( 'Tabi Note', 'tabi-note' ),
			'description' => __( 'Quiet sections for a small walking-tour agency: the stamped route map, the journeys with prices, a day-by-day itinerary, the guides, the journal and the enquiry form.', 'tabi-note' ),
		)
	);
}
add_action( 'init', 'tabi_note_pattern_categories' );
