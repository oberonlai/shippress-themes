<?php
/**
 * Menya Kaen — functions and definitions.
 *
 * @package menya-kaen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/shop-info.php';

define( 'MENYA_KAEN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function menya_kaen_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'menya_kaen_setup' );

/**
 * Front-end styles and two small scripts: the menu button's aria-expanded state (assets/js/menu.js) and the footer
 * ticker's pause button (assets/js/ticker.js).
 */
function menya_kaen_enqueue() {
	wp_enqueue_style( 'menya-kaen-style', get_stylesheet_uri(), array(), MENYA_KAEN_VERSION );
	foreach ( array( 'menu', 'ticker' ) as $script ) {
		wp_enqueue_script(
			'menya-kaen-' . $script,
			get_theme_file_uri( 'assets/js/' . $script . '.js' ),
			array(),
			MENYA_KAEN_VERSION,
			array(
				'in_footer' => true,
				'strategy'  => 'defer',
			)
		);
	}
}
add_action( 'wp_enqueue_scripts', 'menya_kaen_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function menya_kaen_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small capitals with a red tab)', 'menya-kaen' ),
			'lead'  => __( 'Lead paragraph', 'menya-kaen' ),
		),
		'core/heading'   => array(
			'outline' => __( 'Outlined letters', 'menya-kaen' ),
		),
		'core/separator' => array(
			'tear' => __( 'Ticket tear line', 'menya-kaen' ),
		),
		'core/button'    => array(
			'ticket'    => __( 'Ticket machine button', 'menya-kaen' ),
			'text-link' => __( 'Text link with an arrow', 'menya-kaen' ),
		),
		'core/group'     => array(
			'ticket-card' => __( 'Ticket stub card', 'menya-kaen' ),
		),
		'core/list'      => array(
			'route' => __( 'Route with stops', 'menya-kaen' ),
			'steps' => __( 'Steps (big numbers)', 'menya-kaen' ),
			'dash'  => __( 'Dash list (red dashes)', 'menya-kaen' ),
		),
		'core/details'   => array(
			'faq' => __( 'Question (plus sign)', 'menya-kaen' ),
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
add_action( 'init', 'menya_kaen_block_styles' );

/**
 * Pattern category.
 */
function menya_kaen_pattern_categories() {
	register_block_pattern_category(
		'menya-kaen',
		array(
			'label'       => __( 'Menya Kaen', 'menya-kaen' ),
			'description' => __( 'Loud sections for a ramen shop: oversized type, the ticket machine, bowls, toppings, the walk from the station, house rules, news, the newsletter and contact.', 'menya-kaen' ),
		)
	);
}
add_action( 'init', 'menya_kaen_pattern_categories' );
