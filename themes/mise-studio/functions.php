<?php
/**
 * Mise Studio: functions and definitions.
 *
 * @package mise-studio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'MISE_STUDIO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function mise_studio_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'mise_studio_setup' );

/**
 * Front-end styles and scripts. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before the first
 * paint; without it every sp-* element stays visible. hero-fade.js only drives the hero photo cross-fade and its chevrons.
 */
function mise_studio_enqueue() {
	wp_enqueue_style( 'mise-studio-style', get_stylesheet_uri(), array(), MISE_STUDIO_VERSION );
	wp_enqueue_style( 'mise-studio-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), MISE_STUDIO_VERSION );
	wp_enqueue_script( 'mise-studio-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), MISE_STUDIO_VERSION, false );
	if ( is_front_page() ) {
		wp_enqueue_script( 'mise-studio-hero-fade', get_theme_file_uri( 'assets/js/hero-fade.js' ), array(), MISE_STUDIO_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	}
}
add_action( 'wp_enqueue_scripts', 'mise_studio_enqueue' );

/**
 * The home page photographs sit in closed accordion sheets and under the fold: load them all up front so none stays blank.
 *
 * @param bool $default Whether lazy loading is on.
 * @return bool
 */
function mise_studio_lazy_loading( $default ) {
	return ( is_front_page() || is_page() ) ? false : $default;
}
add_filter( 'wp_lazy_loading_enabled', 'mise_studio_lazy_loading' );

/**
 * Pattern category.
 */
function mise_studio_pattern_categories() {
	register_block_pattern_category(
		'mise-studio',
		array(
			'label'       => __( 'Mise Studio', 'mise-studio' ),
			'description' => __( 'Sections for a commercial kitchen design studio: the framed-window hero with a hairline outline, ring-titled white sheets, the grey-bar room accordion, a parallax service band, the site-test masonry, dated process rows, fees, kitchens and the visit waitlist.', 'mise-studio' ),
		)
	);
}
add_action( 'init', 'mise_studio_pattern_categories' );
