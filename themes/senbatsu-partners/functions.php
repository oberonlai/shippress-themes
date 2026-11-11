<?php
/**
 * Senbatsu Partners — functions and definitions.
 *
 * @package senbatsu-partners
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'SENBATSU_PARTNERS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function senbatsu_partners_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'senbatsu_partners_setup' );

/**
 * Front-end styles and the small scroll-effects script (loaded in the head, not deferred, so the hidden states
 * are set before the first paint).
 */
function senbatsu_partners_enqueue() {
	wp_enqueue_style( 'senbatsu-partners-style', get_stylesheet_uri(), array(), SENBATSU_PARTNERS_VERSION );
	wp_enqueue_style( 'senbatsu-partners-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), SENBATSU_PARTNERS_VERSION );
	wp_enqueue_script( 'senbatsu-partners-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SENBATSU_PARTNERS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'senbatsu_partners_enqueue' );

/**
 * Pattern category.
 */
function senbatsu_partners_pattern_categories() {
	register_block_pattern_category(
		'senbatsu-partners',
		array(
			'label'       => __( 'Senbatsu Partners', 'senbatsu-partners' ),
			'description' => __( 'Sections for a retained executive search landing page: the diagonal-seam first screen, hairline-framed section openers, label-above seat tiles, fee table and the grey-framed next-step holder.', 'senbatsu-partners' ),
		)
	);
}
add_action( 'init', 'senbatsu_partners_pattern_categories' );

/**
 * URL of a theme image (assets/images/<file>).
 *
 * @param string $file File name.
 * @return string Escaped URL.
 */
function senbatsu_partners_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * A thin line icon (inline SVG, 56 px, 1.5 px stroke): 'brief', 'shortlist' or 'offer'.
 *
 * @param string $name Icon name.
 * @return string Block markup (HTML block with the svg).
 */
function senbatsu_partners_icon( $name ) {
	$paths = array(
		'brief'     => '<path d="M14 6h20l8 8v36H14z"/><path d="M34 6v8h8"/><path d="M20 24h16M20 31h16M20 38h10"/><path d="M20 45h18" stroke-width="2.5"/>',
		'shortlist' => '<rect x="10" y="8" width="36" height="14" rx="1"/><rect x="10" y="24" width="36" height="14" rx="1"/><rect x="10" y="40" width="36" height="14" rx="1"/><path d="M16 15h14M16 31h14M16 47h14"/>',
		'offer'     => '<circle cx="22" cy="28" r="14"/><circle cx="34" cy="28" r="14"/><path d="M28 21v14M21 28h14" stroke-width="1.5"/>',
	);
	$d     = isset( $paths[ $name ] ) ? $paths[ $name ] : '';
	return '<!-- wp:html -->' . "\n" . '<svg class="sb-icon" viewBox="0 0 56 56" width="56" height="56" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">' . $d . '</svg>' . "\n" . '<!-- /wp:html -->';
}
