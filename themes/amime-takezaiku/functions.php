<?php
/**
 * Amime Takezaiku — functions and definitions.
 *
 * @package amime-takezaiku
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'URUSHI_NURI_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function amime_takezaiku_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'amime_takezaiku_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active. No script is needed: the sideways strips are plain CSS scroll-snap rows.
 */
function amime_takezaiku_enqueue() {
	wp_enqueue_style( 'amime-takezaiku-style', get_stylesheet_uri(), array(), URUSHI_NURI_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'amime-takezaiku-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'amime-takezaiku-style' ), URUSHI_NURI_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'amime_takezaiku_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function amime_takezaiku_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'amime_takezaiku_editor_shop_styles' );

/**
 * With WooCommerce active, the account link and the mini cart sit beside the menu button in the header (Block Hooks
 * API). WooCommerce does this itself only on some installs; this adds them otherwise, never twice. Without
 * WooCommerce: nothing.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function amime_takezaiku_header_shop_blocks( $hooked, $position, $anchor, $context ) {
	if ( 'after' !== $position || 'core/navigation' !== $anchor || ! class_exists( 'WooCommerce' ) ) {
		return $hooked;
	}
	if ( ! ( $context instanceof WP_Block_Template ) || 'wp_template_part' !== $context->type || 'header' !== $context->slug ) {
		return $hooked;
	}
	foreach ( array( 'woocommerce/customer-account', 'woocommerce/mini-cart' ) as $block ) {
		if ( ! in_array( $block, $hooked, true ) && WP_Block_Type_Registry::get_instance()->is_registered( $block ) && false === strpos( (string) $context->content, 'wp:' . $block ) ) {
			$hooked[] = $block;
		}
	}
	return $hooked;
}
add_filter( 'hooked_block_types', 'amime_takezaiku_header_shop_blocks', 20, 4 );

/**
 * The shop buttons in the header and the patterns (class tk-book) are written with a site-relative
 * link ("/shop/"), because template parts are not run through the demo importer. On the page they point at this site's
 * page with that path (its permalink, so a site in a sub-folder or with other permalink settings still works), or at
 * home_url( path ) when there is none. A full URL typed in the editor is left alone.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function amime_takezaiku_book_link( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false === strpos( $class, 'tk-book' ) ) {
		return $content;
	}
	return preg_replace_callback(
		'#href="(/[^"/][^"]*|/)"#',
		function ( $m ) {
			$raw   = html_entity_decode( $m[1] );
			$path  = (string) wp_parse_url( $raw, PHP_URL_PATH );
			$rest  = substr( $raw, strlen( $path ) );
			$page  = '' !== trim( $path, '/' ) ? get_page_by_path( trim( $path, '/' ) ) : null;
			$url   = ( $page && 'publish' === $page->post_status ) ? get_permalink( $page ) . $rest : home_url( $raw );
			return 'href="' . esc_url( $url ) . '"';
		},
		$content,
		1
	);
}
add_filter( 'render_block_core/button', 'amime_takezaiku_book_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function amime_takezaiku_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'amime-takezaiku' ),
		),
		'core/button'    => array(
			'text-link'     => __( 'Text link with a kariyasu underline', 'amime-takezaiku' ),
			'outline-light' => __( 'Pale pill button (on kariyasu)', 'amime-takezaiku' ),
		),
		'core/separator' => array(
			'tone' => __( 'Short kariyasu line', 'amime-takezaiku' ),
		),
		'core/list'      => array(
			'rule-list' => __( 'Hairline rows', 'amime-takezaiku' ),
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
add_action( 'init', 'amime_takezaiku_block_styles' );

/**
 * Pattern category.
 */
function amime_takezaiku_pattern_categories() {
	register_block_pattern_category(
		'amime-takezaiku',
		array(
			'label'       => __( 'Amime Takezaiku', 'amime-takezaiku' ),
			'description' => __( 'Sections for a bamboo basket workshop: the text-left, art-right hero with the cut-out basket, the synced workshop board strip, the five steps on one bamboo strip, the sideways basket shelf, the grove band and the workshop notes.', 'amime-takezaiku' ),
		)
	);
}
add_action( 'init', 'amime_takezaiku_pattern_categories' );
