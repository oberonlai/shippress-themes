<?php
/**
 * Wagu Mono — functions and definitions.
 *
 * @package wagu-mono
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'WAGU_MONO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function wagu_mono_setup() {
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
add_action( 'after_setup_theme', 'wagu_mono_setup' );

/**
 * Front-end styles and the chapter script. The shop styles load only while WooCommerce is active.
 */
function wagu_mono_enqueue() {
	wp_enqueue_style( 'wagu-mono-style', get_stylesheet_uri(), array(), WAGU_MONO_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'wagu-mono-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'wagu-mono-style' ), WAGU_MONO_VERSION );
	}
	wp_enqueue_script(
		'wagu-mono-chapters',
		get_theme_file_uri( 'assets/js/chapters.js' ),
		array(),
		WAGU_MONO_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'wagu_mono_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function wagu_mono_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'wagu_mono_editor_shop_styles' );

/**
 * With WooCommerce active, the account link and the mini cart sit under the menu in the side rail (Block Hooks API).
 * WooCommerce does this itself only on some installs; this adds them otherwise, never twice. Without WooCommerce:
 * nothing.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function wagu_mono_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'wagu_mono_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function wagu_mono_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Drawing label (small capitals after a rule)', 'wagu-mono' ),
			'lead'  => __( 'Lead paragraph', 'wagu-mono' ),
			'fine'  => __( 'Fine print', 'wagu-mono' ),
		),
		'core/image'     => array(
			'plate'   => __( 'Drawing plate (paper mount with corner marks)', 'wagu-mono' ),
			'diagram' => __( 'Joint diagram (on drawing paper)', 'wagu-mono' ),
		),
		'core/group'     => array(
			'sheet' => __( 'Drawing sheet (paper with a ruled border)', 'wagu-mono' ),
			'grain' => __( 'Oak grain panel', 'wagu-mono' ),
		),
		'core/separator' => array(
			'joint' => __( 'Rule with a half-lap joint', 'wagu-mono' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Underlined link with an arrow', 'wagu-mono' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled rows (like a parts list)', 'wagu-mono' ),
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
add_action( 'init', 'wagu_mono_block_styles' );

/**
 * Pattern category.
 */
function wagu_mono_pattern_categories() {
	register_block_pattern_category(
		'wagu-mono',
		array(
			'label'       => __( 'Wagu Mono', 'wagu-mono' ),
			'description' => __( 'Crafted, warm sections for a furniture workshop: chapters beside a sticky drawing plate, the pieces, makers, care and repair, and the showroom card.', 'wagu-mono' ),
		)
	);
}
add_action( 'init', 'wagu_mono_pattern_categories' );

/**
 * The pieces as the home page and the shop page (without WooCommerce) show them: one list, so both patterns use the
 * same names, woods and prices. With WooCommerce active the shop shows the real products instead.
 *
 * @return array[] Each: image, name, kind, wood, price, alt.
 */
function wagu_mono_pieces() {
	return array(
		'chair'  => array( 'product-oak-dining-chair', 'Oak Dining Chair', 'Chairs', 'White oak, walnut keys', '$480', 'An oak dining chair with a curved back rail, standing against a beige wall' ),
		'table'  => array( 'product-low-table', 'Low Table', 'Tables', 'White oak, walnut butterfly keys', '$1,180', 'A low oak table with splayed legs and walnut keys at its corners' ),
		'bench'  => array( 'product-long-bench', 'Long Bench', 'Stools & benches', 'White oak, walnut stretcher', '$890', 'A long oak bench with a low walnut stretcher between its legs' ),
		'shelf'  => array( 'product-open-shelf', 'Open Shelf', 'Storage', 'White oak, wedged through-tenons', '$760', 'A four-shelf oak bookcase with dark wedges showing on its side' ),
		'lounge' => array( 'product-cord-lounge-chair', 'Cord Lounge Chair', 'Chairs', 'Walnut, woven paper cord', '$1,250', 'A low walnut lounge chair with a woven paper-cord seat beside a paper lamp' ),
		'stool'  => array( 'product-three-leg-stool', 'Three-Leg Stool', 'Stools & benches', 'Oak seat, walnut rungs', '$240', 'A round oak stool on three turned legs with thin walnut rungs' ),
		'tray'   => array( 'product-walnut-tray', 'Carved Walnut Tray', 'Small things', 'Black walnut, gouge-cut', '$68', 'A gouge-carved walnut tray leaning on an oak shelf' ),
		'study'  => array( 'product-joint-study', 'Wedged Tenon Study', 'Small things', 'White oak offcuts', '$120', 'Close-up of an oak post with a through-tenon locked by a wedge' ),
	);
}

/**
 * Block markup of one piece card (a photograph with a parts-list caption) for the patterns.
 *
 * @param string $key    Key in wagu_mono_pieces().
 * @param int    $number Number printed on the card ("No. 03").
 * @return string
 */
function wagu_mono_piece_card( $key, $number ) {
	$all = wagu_mono_pieces();
	if ( ! isset( $all[ $key ] ) ) {
		return '';
	}
	list( $image, $name, $kind, $wood, $price, $alt ) = $all[ $key ];
	$src = esc_url( get_theme_file_uri( 'assets/images/' . $image . '.jpg' ) );
	return '<!-- wp:group {"className":"wm-piece","layout":{"type":"default"}} -->
<div class="wp-block-group wm-piece"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"wm-piece__photo"} -->
<figure class="wp-block-image size-full wm-piece__photo"><img src="' . $src . '" alt="' . esc_attr( $alt ) . '"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wm-piece__no"} -->
<p class="wm-piece__no">No. ' . esc_html( sprintf( '%02d', $number ) ) . ' · ' . esc_html( $kind ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"wm-piece__name"} -->
<h3 class="wp-block-heading wm-piece__name"><a href="/shop/">' . esc_html( $name ) . '</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wm-piece__meta"} -->
<p class="wm-piece__meta"><span>' . esc_html( $wood ) . '</span><strong>' . esc_html( $price ) . '</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->';
}
