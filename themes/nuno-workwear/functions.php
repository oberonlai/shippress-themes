<?php
/**
 * Nuno Workwear — functions and definitions.
 *
 * @package nuno-workwear
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'NUNO_WORKWEAR_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function nuno_workwear_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( array( 'style.css', 'assets/sp-scroll.css' ) );
}
add_action( 'after_setup_theme', 'nuno_workwear_setup' );

/**
 * Front-end styles and the scroll-effects script (in the head, not deferred, so the hidden states are set before the
 * first paint).
 */
function nuno_workwear_enqueue() {
	wp_enqueue_style( 'nuno-workwear-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), NUNO_WORKWEAR_VERSION );
	wp_enqueue_style( 'nuno-workwear-style', get_stylesheet_uri(), array( 'nuno-workwear-sp-scroll' ), NUNO_WORKWEAR_VERSION );
	wp_enqueue_script( 'nuno-workwear-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), NUNO_WORKWEAR_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'nuno_workwear_enqueue' );

/**
 * Pattern category.
 */
function nuno_workwear_pattern_categories() {
	register_block_pattern_category(
		'nuno-workwear',
		array(
			'label'       => __( 'Nuno Workwear', 'nuno-workwear' ),
			'description' => __( 'Sections for a workwear shop: the giant two-line hero over a half-height photograph, the trade card mosaic on dashed guides, ink bands, fit rows, the workshop price list, crew stories and the order steps.', 'nuno-workwear' ),
		)
	);
}
add_action( 'init', 'nuno_workwear_pattern_categories' );

/**
 * Re-add per-cell data-label attributes to list tables at render time
 * (core/table strips them on save, which made the blocks invalid).
 */
function nuno_workwear_table_labels( $content, $block ) {
	if ( false === strpos( $content, 'nw-list--' ) ) {
		return $content;
	}
	return nuno_workwear_label_cells( $content );
}

function nuno_workwear_label_cells( $html ) {
	if ( ! preg_match( '#<thead>.*?</thead>#s', $html, $head ) ) {
		return $html;
	}
	preg_match_all( '#<th[^>]*>(.*?)</th>#s', $head[0], $th );
	$labels = array_map( 'wp_strip_all_tags', $th[1] );
	return preg_replace_callback(
		'#<tbody>.*?</tbody>#s',
		static function ( $body ) use ( $labels ) {
			return preg_replace_callback(
				'#<tr>(.*?)</tr>#s',
				static function ( $row ) use ( $labels ) {
					$i = 0;
					$cells = preg_replace_callback(
						'#<td(?![^>]*data-label)([^>]*)>#',
						static function ( $m ) use ( $labels, &$i ) {
							$l = isset( $labels[ $i ] ) ? $labels[ $i ] : '';
							$i++;
							return '<td data-label="' . esc_attr( $l ) . '"' . $m[1] . '>';
						},
						$row[1]
					);
					return '<tr>' . $cells . '</tr>';
				},
				$body[0]
			);
		},
		$html
	);
}
add_filter( 'render_block_core/table', 'nuno_workwear_table_labels', 10, 2 );
