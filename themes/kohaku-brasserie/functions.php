<?php
/**
 * Kohaku Brasserie: functions and definitions.
 *
 * @package kohaku-brasserie
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'KOHAKU_BRASSERIE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kohaku_brasserie_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kohaku_brasserie_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before
 * the first paint; without it every sp-* element stays visible.
 */
function kohaku_brasserie_enqueue() {
	wp_enqueue_style( 'kohaku-brasserie-style', get_stylesheet_uri(), array(), KOHAKU_BRASSERIE_VERSION );
	wp_enqueue_style( 'kohaku-brasserie-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KOHAKU_BRASSERIE_VERSION );
	wp_enqueue_script( 'kohaku-brasserie-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KOHAKU_BRASSERIE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kohaku_brasserie_enqueue' );

/**
 * Pattern category.
 */
function kohaku_brasserie_pattern_categories() {
	register_block_pattern_category(
		'kohaku-brasserie',
		array(
			'label'       => __( 'Kohaku Brasserie', 'kohaku-brasserie' ),
			'description' => __( 'Sections for a city brasserie: the service-day hero, the night band, the plate-rim ellipse, the pinned letterbox day, the afternoon, the price ledger, the notes ledger and the booking band.', 'kohaku-brasserie' ),
		)
	);
}
add_action( 'init', 'kohaku_brasserie_pattern_categories' );

/**
 * Marks the navigation link that points at the current page (aria-current + current-menu-item), so the dot under the
 * current item shows for the custom links the demo menu uses.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function kohaku_brasserie_nav_current( $content, $block ) {
	$url = isset( $block['attrs']['url'] ) ? (string) $block['attrs']['url'] : '';
	if ( '' === $url || false !== strpos( $content, 'aria-current' ) ) {
		return $content;
	}
	$link = trailingslashit( (string) wp_parse_url( $url, PHP_URL_PATH ) );
	$cur  = isset( $_SERVER['REQUEST_URI'] ) ? trailingslashit( (string) wp_parse_url( esc_url_raw( wp_unslash( $_SERVER['REQUEST_URI'] ) ), PHP_URL_PATH ) ) : '';
	if ( '' === $cur || $link !== $cur ) {
		return $content;
	}
	$content = preg_replace( '/class="wp-block-navigation-item /', 'class="wp-block-navigation-item current-menu-item ', $content, 1 );
	return preg_replace( '/<a class="wp-block-navigation-item__content"/', '<a class="wp-block-navigation-item__content" aria-current="page"', $content, 1 );
}
add_filter( 'render_block_core/navigation-link', 'kohaku_brasserie_nav_current', 10, 2 );
