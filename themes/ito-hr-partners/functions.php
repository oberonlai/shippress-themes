<?php
/**
 * Ito HR Partners — functions and definitions.
 *
 * @package ito-hr-partners
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'ITO_HR_PARTNERS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function ito_hr_partners_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'ito_hr_partners_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head, not deferred, so html.sp-js is set before
 * the first paint (the hidden reveal states only exist under html.sp-js).
 */
function ito_hr_partners_enqueue() {
	wp_enqueue_style( 'ito-hr-partners-style', get_stylesheet_uri(), array(), ITO_HR_PARTNERS_VERSION );
	wp_enqueue_style( 'ito-hr-partners-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'ito-hr-partners-style' ), ITO_HR_PARTNERS_VERSION );
	wp_enqueue_script( 'ito-hr-partners-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), ITO_HR_PARTNERS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'ito_hr_partners_enqueue' );

/**
 * Pattern category.
 */
function ito_hr_partners_pattern_categories() {
	register_block_pattern_category(
		'ito-hr-partners',
		array(
			'label'       => __( 'Ito HR Partners', 'ito-hr-partners' ),
			'description' => __( 'Sections for an HR and employment-law consultancy: the one-line headline over a photo loop with a fixed-fee pill, the indexed service cards, the staggered photo pair, white approach cards over a blurred photograph, the published fee list, the people band and the contact close.', 'ito-hr-partners' ),
		)
	);
}
add_action( 'init', 'ito_hr_partners_pattern_categories' );

/**
 * URL of a theme photograph (patterns use it so the markup stays valid wherever the theme sits).
 *
 * @param string $file File name inside assets/images/.
 * @return string
 */
function ito_hr_partners_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}
