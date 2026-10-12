<?php
/**
 * Amane Wagashi — functions and definitions.
 *
 * @package amane-wagashi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'AMANE_WAGASHI_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function amane_wagashi_setup() {
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
add_action( 'after_setup_theme', 'amane_wagashi_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active. The only script is the small tray helper
 * (assets/js/tray.js), loaded only on pages that show the seasonal tray (see amane_wagashi_tray_attrs()).
 */
function amane_wagashi_enqueue() {
	wp_enqueue_style( 'amane-wagashi-style', get_stylesheet_uri(), array(), AMANE_WAGASHI_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'amane-wagashi-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'amane-wagashi-style' ), AMANE_WAGASHI_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'amane_wagashi_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function amane_wagashi_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'amane_wagashi_editor_shop_styles' );

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
function amane_wagashi_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'amane_wagashi_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function amane_wagashi_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Small label (spaced capitals)', 'amane-wagashi' ),
			'lead'  => __( 'Lead paragraph', 'amane-wagashi' ),
			'fine'  => __( 'Fine print', 'amane-wagashi' ),
		),
		'core/group'     => array(
			'sheet' => __( 'Rice-paper panel', 'amane-wagashi' ),
		),
		'core/separator' => array(
			'pick' => __( 'Sweet pick (hairline with a tapered end)', 'amane-wagashi' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Underlined link with an arrow', 'amane-wagashi' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled rows', 'amane-wagashi' ),
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
add_action( 'init', 'amane_wagashi_block_styles' );

/**
 * Pattern category.
 */
function amane_wagashi_pattern_categories() {
	register_block_pattern_category(
		'amane-wagashi',
		array(
			'label'       => __( 'Amane Wagashi', 'amane-wagashi' ),
			'description' => __( 'Quiet sections for a small wagashi house: the seasonal tray, boxes to order, pre-orders, the seasonal calendar, the kitchen, the journal and the atelier card.', 'amane-wagashi' ),
		)
	);
}
add_action( 'init', 'amane_wagashi_pattern_categories' );


/**
 * The keeping line. Its single source is each product's "Keeps" attribute (Product data > Attributes, e.g. Best within
 * two days · keep cool); it is printed under the price in the grid and on the product page. Products without it show
 * nothing. Without WooCommerce this filter never runs.
 *
 * @param string $content Rendered price block.
 * @param array  $block   Parsed block.
 * @return string
 */
function amane_wagashi_keeps_line( $content, $block ) {
	if ( ! function_exists( 'wc_get_product' ) || '' === trim( $content ) ) {
		return $content;
	}
	$product = wc_get_product( get_the_ID() );
	if ( ! $product ) {
		return $content;
	}
	$keeps = trim( (string) $product->get_attribute( 'Keeps' ) );
	if ( '' === $keeps ) {
		return $content;
	}
	return $content . '<p class="am-keeps">' . esc_html( $keeps ) . '</p>';
}
add_filter( 'render_block_woocommerce/product-price', 'amane_wagashi_keeps_line', 10, 2 );

/**
 * The season of the site's own calendar: month (1-12) and day, read in the WordPress timezone (Settings > General),
 * never the visitor's clock.
 *
 * @return array{month: int, day: int}
 */
function amane_wagashi_today() {
	$now = new DateTimeImmutable( 'now', wp_timezone() );
	return array(
		'month' => (int) $now->format( 'n' ),
		'day'   => (int) $now->format( 'j' ),
	);
}

/**
 * The season words for each month: the old-calendar season and the month's motif (its sweet on the tray).
 *
 * @param int $month 1-12.
 * @return array{0: string, 1: string}
 */
function amane_wagashi_season_words( $month ) {
	$words = array(
		1  => array( __( 'Deep winter', 'amane-wagashi' ), __( 'Month of the camellia', 'amane-wagashi' ) ),
		2  => array( __( 'Late winter', 'amane-wagashi' ), __( 'Month of the plum', 'amane-wagashi' ) ),
		3  => array( __( 'Early spring', 'amane-wagashi' ), __( 'Month of the cherry blossom', 'amane-wagashi' ) ),
		4  => array( __( 'High spring', 'amane-wagashi' ), __( 'Month of blossom viewing', 'amane-wagashi' ) ),
		5  => array( __( 'Early summer', 'amane-wagashi' ), __( 'Month of the oak leaf', 'amane-wagashi' ) ),
		6  => array( __( 'Rainy season', 'amane-wagashi' ), __( 'Month of the hydrangea', 'amane-wagashi' ) ),
		7  => array( __( 'High summer', 'amane-wagashi' ), __( 'Month of cool water', 'amane-wagashi' ) ),
		8  => array( __( 'Late summer', 'amane-wagashi' ), __( 'Month of the clear stream', 'amane-wagashi' ) ),
		9  => array( __( 'Early autumn', 'amane-wagashi' ), __( 'Month of the moon', 'amane-wagashi' ) ),
		10 => array( __( 'Late autumn', 'amane-wagashi' ), __( 'Month of the chestnut', 'amane-wagashi' ) ),
		11 => array( __( 'Deep autumn', 'amane-wagashi' ), __( 'Month of the persimmon', 'amane-wagashi' ) ),
		12 => array( __( 'Early winter', 'amane-wagashi' ), __( 'Month of the yuzu', 'amane-wagashi' ) ),
	);
	return isset( $words[ $month ] ) ? $words[ $month ] : $words[1];
}

/**
 * Block binding source for the masthead dateline (WordPress 6.5+): key "season" gives "Late autumn · Month of the
 * chestnut", key "date" gives the site's date, e.g. "Monday 12 October". Both use the site's timezone.
 */
function amane_wagashi_register_season_source() {
	if ( ! function_exists( 'register_block_bindings_source' ) ) {
		return;
	}
	register_block_bindings_source(
		'amane-wagashi/season',
		array(
			'label'              => __( 'Season of the site calendar (Amane Wagashi)', 'amane-wagashi' ),
			'get_value_callback' => 'amane_wagashi_season_value',
		)
	);
}
add_action( 'init', 'amane_wagashi_register_season_source' );

/**
 * Value of a bound dateline paragraph.
 *
 * @param array $args Binding args (key: season or date).
 * @return string|null
 */
function amane_wagashi_season_value( $args ) {
	$key   = isset( $args['key'] ) ? (string) $args['key'] : 'season';
	$today = amane_wagashi_today();
	if ( 'date' === $key ) {
		return esc_html( wp_date( 'l j F', null, wp_timezone() ) );
	}
	list( $season, $motif ) = amane_wagashi_season_words( $today['month'] );
	return esc_html( $season . ' · ' . $motif );
}

/**
 * The seasonal tray: the scrolling track becomes a focusable, labelled region (so arrow keys scroll it), this month's
 * card (by the site's timezone) is marked "In season now", and the small tray helper script is loaded.
 *
 * @param string $content Rendered group block.
 * @param array  $block   Parsed block.
 * @return string
 */
function amane_wagashi_tray_attrs( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( false !== strpos( $class, 'am-tray__track' ) ) {
		wp_enqueue_script( 'amane-wagashi-tray', get_theme_file_uri( 'assets/js/tray.js' ), array(), AMANE_WAGASHI_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
		return preg_replace( '/^<div /', '<div tabindex="0" role="region" aria-label="' . esc_attr__( 'Seasonal tray, twelve months (scrolls sideways)', 'amane-wagashi' ) . '" ', ltrim( $content ), 1 );
	}
	$today = amane_wagashi_today();
	$now   = sprintf( 'am-tray__item--m%02d', $today['month'] );
	if ( false !== strpos( $class, $now ) ) {
		$content = preg_replace( '/class="wp-block-group am-tray__item /', 'aria-current="date" class="wp-block-group is-now am-tray__item ', $content, 1 );
		$content = preg_replace( '/(<p class="am-tray__month">)/', '<p class="am-tray__now">' . esc_html__( 'In season now', 'amane-wagashi' ) . '</p>$1', $content, 1 );
	}
	return $content;
}
add_filter( 'render_block_core/group', 'amane_wagashi_tray_attrs', 10, 2 );

/**
 * Without JavaScript the core mobile menu cannot open, so on small screens the menu is shown as a plain list instead.
 */
function amane_wagashi_noscript_menu() {
	echo '<noscript><style>@media (max-width:599px){.am-nav .wp-block-navigation__responsive-container-open{display:none!important}.am-nav .wp-block-navigation__responsive-container{display:block!important;position:static!important;background:none!important}.am-nav .wp-block-navigation__container{flex-direction:row!important;flex-wrap:wrap;justify-content:center;gap:.5rem 1rem!important}}</style></noscript>' . "\n";
}
add_action( 'wp_head', 'amane_wagashi_noscript_menu' );
