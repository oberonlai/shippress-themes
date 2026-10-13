<?php
/**
 * Kenban Piano School — functions and definitions.
 *
 * @package kenban-piano
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'KENBAN_PIANO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function kenban_piano_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'kenban_piano_setup' );

/**
 * Front-end styles.
 */
function kenban_piano_enqueue() {
	wp_enqueue_style( 'kenban-piano-style', get_stylesheet_uri(), array(), KENBAN_PIANO_VERSION );
}
add_action( 'wp_enqueue_scripts', 'kenban_piano_enqueue' );

/**
 * Today's column in the weekly lesson timetable, read in the site's own timezone (Settings > General), never the
 * visitor's clock: the matching day group gets the class is-today (a small brass bar) and aria-current="date".
 * The enquiry script loads only on the page that holds the form.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function kenban_piano_group( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false !== strpos( $class, 'kb-day--' ) ) {
		$today = strtolower( ( new DateTimeImmutable( 'now', wp_timezone() ) )->format( 'D' ) );
		if ( false !== strpos( ' ' . $class . ' ', ' kb-day--' . $today . ' ' ) ) {
			$tags = new WP_HTML_Tag_Processor( $content );
			if ( $tags->next_tag() ) {
				$tags->add_class( 'is-today' );
				$tags->set_attribute( 'aria-current', 'date' );
				$content = $tags->get_updated_html();
			}
		}
	}
	if ( false !== strpos( $class, 'kb-contact' ) ) {
		wp_enqueue_script( 'kenban-piano-enquiry', get_theme_file_uri( 'assets/js/enquiry.js' ), array(), KENBAN_PIANO_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	}
	return $content;
}
add_filter( 'render_block_core/group', 'kenban_piano_group', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kenban_piano_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'kenban-piano' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline underline', 'kenban-piano' ),
			'outline'   => __( 'Ebony outline button', 'kenban-piano' ),
		),
		'core/list'      => array(
			'staff-list' => __( 'Ruled rows (staff lines)', 'kenban-piano' ),
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
add_action( 'init', 'kenban_piano_block_styles' );

/**
 * Pattern category.
 */
function kenban_piano_pattern_categories() {
	register_block_pattern_category(
		'kenban-piano',
		array(
			'label'       => __( 'Kenban Piano School', 'kenban-piano' ),
			'description' => __( 'Quiet, type-led sections for a small piano school: the tempo word, lessons and fees, the weekly timetable, teachers, recitals and the trial-lesson enquiry.', 'kenban-piano' ),
		)
	);
}
add_action( 'init', 'kenban_piano_pattern_categories' );
