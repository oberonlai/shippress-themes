<?php
/**
 * Hana Kago — functions and definitions.
 *
 * @package hana-kago
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'HANA_KAGO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hana_kago_setup() {
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
add_action( 'after_setup_theme', 'hana_kago_setup' );

/**
 * Front-end styles and the header script. The shop styles load only while WooCommerce is active.
 */
function hana_kago_enqueue() {
	wp_enqueue_style( 'hana-kago-style', get_stylesheet_uri(), array(), HANA_KAGO_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'hana-kago-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'hana-kago-style' ), HANA_KAGO_VERSION );
	}
	wp_enqueue_script(
		'hana-kago-header',
		get_theme_file_uri( 'assets/js/header.js' ),
		array(),
		HANA_KAGO_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'hana_kago_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function hana_kago_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'hana_kago_editor_shop_styles' );

/**
 * With WooCommerce active, the account link and the mini cart sit after the menu (Block Hooks API). WooCommerce does
 * this itself only on some installs; this adds them otherwise, never twice. Without WooCommerce: nothing.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function hana_kago_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'hana_kago_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hana_kago_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Specimen label (small capitals with a stem)', 'hana-kago' ),
			'lead'  => __( 'Lead paragraph', 'hana-kago' ),
			'fine'  => __( 'Fine print', 'hana-kago' ),
		),
		'core/image'     => array(
			'deckle'  => __( 'Soft paper edge', 'hana-kago' ),
			'mounted' => __( 'Album mount (paper and photo corners)', 'hana-kago' ),
			'oval'    => __( 'Oval frame', 'hana-kago' ),
		),
		'core/group'     => array(
			'paper' => __( 'Pressed paper card (soft edges)', 'hana-kago' ),
			'rise'  => __( 'Soft rise on scroll', 'hana-kago' ),
		),
		'core/separator' => array(
			'stem' => __( 'A stem with one petal', 'hana-kago' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Underlined link with an arrow', 'hana-kago' ),
		),
		'core/list'      => array(
			'petals' => __( 'Petal bullets', 'hana-kago' ),
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
add_action( 'init', 'hana_kago_block_styles' );

/**
 * Pattern category.
 */
function hana_kago_pattern_categories() {
	register_block_pattern_category(
		'hana-kago',
		array(
			'label'       => __( 'Hana Kago', 'hana-kago' ),
			'description' => __( 'Romantic, lush sections for a florist: the flower table, pressed-flower specimen cards, delivery areas, subscription plans, the journal and the Monday stem letter.', 'hana-kago' ),
		)
	);
}
add_action( 'init', 'hana_kago_pattern_categories' );

/**
 * The sample bouquets as the home page and the shop page (without WooCommerce) show them: one list, so both patterns
 * use the same names, notes and prices. With WooCommerce active the shop shows the real products instead.
 *
 * @return array[] Each: image, name, kind, note, price, alt.
 */
function hana_kago_specimens() {
	return array(
		'ranunculus' => array( 'product-ranunculus-bouquet', 'Blush Ranunculus Bouquet', 'Bouquets', 'Coral ranunculus, garden roses and silver-dollar eucalyptus', '$68', 'A bouquet of coral ranunculus and blush roses on pink linen' ),
		'market'     => array( 'product-kraft-market-bouquet', 'Market Bouquet in Kraft', 'Bouquets', 'Whatever the growers brought this morning, tied by hand', '$45', 'Hands wrapping coral tulips and pale roses in kraft paper' ),
		'peony'      => array( 'product-peony-basket', 'Coral Peony Basket', 'Baskets', 'Peonies and sweet peas in a willow basket to keep', '$96', 'Coral peonies and lilac sweet peas in a woven basket' ),
		'pampas'     => array( 'product-pampas-posy', 'Pampas & Strawflower Posy', 'Dried & pressed', 'Dried: no water, no fuss, a year or more', '$52', 'A dried posy of pampas, statice and coral strawflowers tied with twine' ),
		'wreath'     => array( 'product-garden-wreath', 'Garden Door Wreath', 'Wreaths', 'Bay, fern and coral kalanchoe on a hand-bound frame', '$82', 'A green wreath with small coral flowers hanging on a pale wall' ),
		'quince'     => array( 'product-quince-branch-vase', 'Quince Branch & Stoneware Vase', 'Gifts & vases', 'One flowering branch in a hand-thrown vase', '$58', 'A flowering quince branch in a grey stoneware vase' ),
		'pressed'    => array( 'product-pressed-flower-frame', 'Pressed Flower Frame', 'Dried & pressed', 'Last week\'s petals and nettle leaves, under glass', '$74', 'Pressed coral petals and green leaves on handmade paper' ),
		'weekly'     => array( 'product-weekly-stems', 'Weekly Stems, Four Mondays', 'Subscriptions', 'A fresh bunch every Monday for four weeks', '$144', 'Coral spray roses wrapped in blush paper inside a kraft box' ),
		'fortnight'  => array( 'product-fortnightly-box', 'Fortnightly Flower Box, Three Months', 'Subscriptions', 'Six boxes, every other Friday', '$240', 'A kraft flower box holding a paper-wrapped bunch of coral roses' ),
	);
}

/**
 * Block markup of one specimen card (a bouquet on pressed paper) for the patterns.
 *
 * @param string $key    Key in hana_kago_specimens().
 * @param int    $number Number printed on the card ("No. 03").
 * @return string
 */
function hana_kago_specimen_card( $key, $number ) {
	$all = hana_kago_specimens();
	if ( ! isset( $all[ $key ] ) ) {
		return '';
	}
	list( $image, $name, $kind, $note, $price, $alt ) = $all[ $key ];
	$src = esc_url( get_theme_file_uri( 'assets/images/' . $image . '.jpg' ) );
	return '<!-- wp:group {"className":"hk-tile","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tile"><!-- wp:group {"className":"hk-paper hk-specimen","layout":{"type":"default"}} -->
<div class="wp-block-group hk-paper hk-specimen"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-specimen__photo"} -->
<figure class="wp-block-image size-full hk-specimen__photo"><img src="' . $src . '" alt="' . esc_attr( $alt ) . '"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hk-specimen__no"} -->
<p class="hk-specimen__no">No. ' . esc_html( sprintf( '%02d', $number ) ) . ' · ' . esc_html( $kind ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-specimen__name"} -->
<h3 class="wp-block-heading hk-specimen__name"><a href="/shop/">' . esc_html( $name ) . '</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-specimen__note"} -->
<p class="hk-specimen__note">' . esc_html( $note ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-specimen__price"} -->
<p class="hk-specimen__price"><span>' . ( 'Subscriptions' === $kind ? 'Delivered free' : 'Same-day delivery' ) . '</span><strong>' . esc_html( $price ) . '</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->';
}
