<?php
/**
 * Kura Wine: inner pages (Growers, Shipments, The case, Tastings, Visit).
 *
 * Every inner page opens on a short film-photo band with a vertical label (the home page's cover and region titles,
 * carried over), then a scattered text block and hairline fact rows. The words live in inc/i18n/<lang>.php under
 * in_<page>_*.
 *
 * @package kura-wine
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Photograph ids per inner page: band, second photo.
 *
 * @return array
 */
function kura_wine_inner_photos() {
	return array(
		'about'     => array( 'K8', 'K4' ),
		'shipments' => array( 'K6', 'K7' ),
		'the-case'  => array( 'K9', 'K2' ),
		'tastings'  => array( 'K12', 'K3' ),
		'visit'     => array( 'K11', 'K5' ),
		'delivery'  => array( 'K10', 'K1' ),
		'club'      => array( 'K5', 'K9' ),
	);
}

/**
 * Block markup for one inner page.
 *
 * @param string $slug about, shipments, the-case, tastings, visit or delivery.
 * @return string
 */
function kura_wine_inner( $slug ) {
	$photos = kura_wine_inner_photos();
	$p      = $photos[ $slug ];
	$k      = 'in_' . str_replace( '-', '_', $slug ) . '_';
	$out    = '';

	$out .= '<!-- wp:group {"tagName":"section","align":"full","className":"kw-band sp-parallax","layout":{"type":"default"}} -->' . "\n";
	$out .= '<section class="wp-block-group alignfull kw-band sp-parallax"><!-- wp:group {"className":"kw-band__bg sp-parallax__layer","layout":{"type":"default"}} -->' . "\n";
	$out .= '<div class="wp-block-group kw-band__bg sp-parallax__layer">' . kura_wine_image( $p[0], 'kw-band__img' ) . '</div>' . "\n<!-- /wp:group -->\n\n";
	$out .= '<!-- wp:group {"className":"kw-wrap kw-band__fg","layout":{"type":"default"}} -->' . "\n" . '<div class="wp-block-group kw-wrap kw-band__fg">';
	$out .= '<!-- wp:paragraph {"className":"kw-band__vt"} -->' . "\n" . '<p class="kw-band__vt">' . esc_html( kura_wine_t( $k . 'label' ) ) . '</p>' . "\n<!-- /wp:paragraph -->\n\n";
	$out .= '<!-- wp:heading {"level":1,"fontSize":"xx-large","className":"kw-band__h1"} -->' . "\n" . '<h1 class="wp-block-heading kw-band__h1 has-xx-large-font-size">' . esc_html( kura_wine_t( $k . 'h1' ) ) . '</h1>' . "\n<!-- /wp:heading --></div>\n<!-- /wp:group --></section>\n<!-- /wp:group -->\n\n";

	$out .= '<!-- wp:group {"tagName":"section","align":"full","className":"kw-sec kw-inner","layout":{"type":"default"}} -->' . "\n";
	$out .= '<section class="wp-block-group alignfull kw-sec kw-inner"><!-- wp:group {"className":"kw-wrap kw-inner__grid","layout":{"type":"default"}} -->' . "\n" . '<div class="wp-block-group kw-wrap kw-inner__grid">';
	$out .= '<!-- wp:group {"className":"kw-inner__head","layout":{"type":"default"}} -->' . "\n" . '<div class="wp-block-group kw-inner__head"><!-- wp:paragraph {"className":"kw-label"} -->' . "\n" . '<p class="kw-label">' . esc_html( kura_wine_t( $k . 'label' ) ) . '</p>' . "\n<!-- /wp:paragraph -->\n\n";
	$out .= '<!-- wp:paragraph {"className":"kw-catch"} -->' . "\n" . '<p class="kw-catch">' . esc_html( kura_wine_t( $k . 'lead' ) ) . '</p>' . "\n<!-- /wp:paragraph --></div>\n<!-- /wp:group -->\n\n";
	$out .= '<!-- wp:group {"className":"kw-inner__text sp-stagger","layout":{"type":"default"}} -->' . "\n" . '<div class="wp-block-group kw-inner__text sp-stagger">';
	for ( $i = 1; $i <= 3; $i++ ) {
		$out .= '<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->' . "\n" . '<p class="sp-reveal sp-reveal--up">' . esc_html( kura_wine_t( $k . 'p' . $i ) ) . '</p>' . "\n<!-- /wp:paragraph -->\n\n";
	}
	$out .= '</div>' . "\n<!-- /wp:group -->\n\n";
	$out .= kura_wine_image( $p[1], 'kw-inner__pic sp-reveal sp-reveal--mask' ) . "\n\n";
	$out .= '<!-- wp:group {"className":"kw-inner__facts sp-stagger","layout":{"type":"default"}} -->' . "\n" . '<div class="wp-block-group kw-inner__facts sp-stagger">';
	for ( $i = 1; $i <= 5; $i++ ) {
		$a = kura_wine_t( $k . 'f' . $i . 'a' );
		if ( '' === $a ) {
			continue;
		}
		$id   = kura_wine_t( $k . 'f' . $i . 'id' );
		$attr = '' === $id ? '' : ' id="' . esc_attr( $id ) . '"';
		$ja   = '' === $id ? '' : ',"anchor":"' . esc_attr( $id ) . '"';
		$out .= '<!-- wp:paragraph {"className":"kw-fact sp-reveal sp-reveal--up"' . $ja . '} -->' . "\n" . '<p' . $attr . ' class="kw-fact sp-reveal sp-reveal--up"><span class="kw-fact__a">' . esc_html( $a ) . '</span><span class="kw-fact__b">' . esc_html( kura_wine_t( $k . 'f' . $i . 'b' ) ) . '</span></p>' . "\n<!-- /wp:paragraph -->\n\n";
	}
	$out .= '</div>' . "\n<!-- /wp:group --></div>\n<!-- /wp:group --></section>\n<!-- /wp:group -->";
	return $out;
}
