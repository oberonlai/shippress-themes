<?php
/**
 * Suzuri Shodo — functions and definitions.
 *
 * @package suzuri-shodo
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'SUZURI_SHODO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function suzuri_shodo_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'suzuri_shodo_setup' );

/**
 * Front-end styles.
 */
function suzuri_shodo_enqueue() {
	wp_enqueue_style( 'suzuri-shodo-style', get_stylesheet_uri(), array(), SUZURI_SHODO_VERSION );
}
add_action( 'wp_enqueue_scripts', 'suzuri_shodo_enqueue' );

/**
 * Today's column in the weekly timetable, read in the site's own timezone (Settings > General), never the visitor's
 * clock: the matching day group gets the class is-today (a small seal-red marker) and aria-current="date".
 * The enquiry script loads only on the page that holds the form.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function suzuri_shodo_group( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false !== strpos( $class, 'sz-day--' ) ) {
		$today = strtolower( ( new DateTimeImmutable( 'now', wp_timezone() ) )->format( 'D' ) );
		if ( false !== strpos( ' ' . $class . ' ', ' sz-day--' . $today . ' ' ) ) {
			$tags = new WP_HTML_Tag_Processor( $content );
			if ( $tags->next_tag() ) {
				$tags->add_class( 'is-today' );
				$tags->set_attribute( 'aria-current', 'date' );
				$content = $tags->get_updated_html();
			}
		}
	}
	if ( false !== strpos( $class, 'sz-contact' ) ) {
		wp_enqueue_script( 'suzuri-shodo-enquiry', get_theme_file_uri( 'assets/js/enquiry.js' ), array(), SUZURI_SHODO_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	}
	return $content;
}
add_filter( 'render_block_core/group', 'suzuri_shodo_group', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function suzuri_shodo_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'suzuri-shodo' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline underline', 'suzuri-shodo' ),
			'outline'   => __( 'Sumi outline button', 'suzuri-shodo' ),
		),
		'core/list'      => array(
			'fold-list' => __( 'Folded sheet (hairline rows)', 'suzuri-shodo' ),
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
add_action( 'init', 'suzuri_shodo_block_styles' );

/**
 * Pattern category.
 */
function suzuri_shodo_pattern_categories() {
	register_block_pattern_category(
		'suzuri-shodo',
		array(
			'label'       => __( 'Suzuri Shodo', 'suzuri-shodo' ),
			'description' => __( 'Quiet sections for a small calligraphy school: the hero sheet with vertical type, four chapters, class levels as vertical columns, the weekly timetable, the starter kit, the teacher and the trial-lesson enquiry.', 'suzuri-shodo' ),
		)
	);
}
add_action( 'init', 'suzuri_shodo_pattern_categories' );
