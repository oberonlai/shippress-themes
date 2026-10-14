<?php
/**
 * Kinari Soba — functions and definitions.
 *
 * @package kinari-soba
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'KINARI_SOBA_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function kinari_soba_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'kinari_soba_setup' );

/**
 * Front-end styles.
 */
function kinari_soba_enqueue() {
	wp_enqueue_style( 'kinari-soba-style', get_stylesheet_uri(), array(), KINARI_SOBA_VERSION );
}
add_action( 'wp_enqueue_scripts', 'kinari_soba_enqueue' );

/**
 * Today's row in the week of the synced hours, read in the site's own timezone (Settings > General), never the
 * visitor's clock: the matching day paragraph gets the class is-today (a small husk-green bar) and aria-current="date".
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function kinari_soba_day( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'ks-day--' ) ) {
		return $content;
	}
	$today = strtolower( ( new DateTimeImmutable( 'now', wp_timezone() ) )->format( 'D' ) );
	if ( false !== strpos( ' ' . $class . ' ', ' ks-day--' . $today . ' ' ) ) {
		$tags = new WP_HTML_Tag_Processor( $content );
		if ( $tags->next_tag() ) {
			$tags->add_class( 'is-today' );
			$tags->set_attribute( 'aria-current', 'date' );
			$content = $tags->get_updated_html();
		}
	}
	return $content;
}
add_filter( 'render_block_core/paragraph', 'kinari_soba_day', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kinari_soba_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'kinari-soba' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline underline', 'kinari-soba' ),
			'outline'   => __( 'Ink outline button', 'kinari-soba' ),
		),
		'core/group'     => array(
			'tray' => __( 'Seiro tray (square hairline frame)', 'kinari-soba' ),
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
add_action( 'init', 'kinari_soba_block_styles' );

/**
 * Pattern category.
 */
function kinari_soba_pattern_categories() {
	register_block_pattern_category(
		'kinari-soba',
		array(
			'label'       => __( 'Kinari Soba', 'kinari-soba' ),
			'description' => __( 'Quiet sections for a small soba house: the opening bento, the four seiro trays, today\'s note, the hours, the mill and the visit map.', 'kinari-soba' ),
		)
	);
}
add_action( 'init', 'kinari_soba_pattern_categories' );
