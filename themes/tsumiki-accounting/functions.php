<?php
/**
 * Tsumiki Accounting — functions and definitions.
 *
 * @package tsumiki-accounting
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'TSUMIKI_ACCOUNTING_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function tsumiki_accounting_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'tsumiki_accounting_setup' );

/**
 * Front-end styles.
 */
function tsumiki_accounting_enqueue() {
	wp_enqueue_style( 'tsumiki-accounting-style', get_stylesheet_uri(), array(), TSUMIKI_ACCOUNTING_VERSION );
}
add_action( 'wp_enqueue_scripts', 'tsumiki_accounting_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function tsumiki_accounting_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small spaced capitals after three stacked blocks)', 'tsumiki-accounting' ),
			'lead'  => __( 'Lead paragraph', 'tsumiki-accounting' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with a hairline underline', 'tsumiki-accounting' ),
			'fill'      => __( 'Ink navy button', 'tsumiki-accounting' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairlines and square bullets)', 'tsumiki-accounting' ),
		),
		'core/table'     => array(
			'calendar' => __( 'Calendar (dates in tabular figures, hairlines)', 'tsumiki-accounting' ),
		),
		'core/separator' => array(
			'blocks' => __( 'Stacked blocks (a small centred section mark)', 'tsumiki-accounting' ),
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
add_action( 'init', 'tsumiki_accounting_block_styles' );

/**
 * Pattern category.
 */
function tsumiki_accounting_pattern_categories() {
	register_block_pattern_category(
		'tsumiki-accounting',
		array(
			'label'       => __( 'Tsumiki Accounting', 'tsumiki-accounting' ),
			'description' => __( 'Precise sections for a small accounting practice: an editorial masthead, a numbered service index with fees, the method, a tax calendar, the accountants, journal and contact.', 'tsumiki-accounting' ),
		)
	);
}
add_action( 'init', 'tsumiki_accounting_pattern_categories' );
