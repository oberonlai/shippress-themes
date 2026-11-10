<?php
/**
 * Kantei Valuers: markup builders for the inner pages (photo head, two touching photo panels).
 *
 * Each builder returns block markup; the small files in patterns/inner-*.php call them so the sample pages can pull a
 * head or a panel pair in with <!-- wp:pattern {"slug":"..."} /-->. All words come from inc/i18n/<lang>.php.
 *
 * @package kantei-valuers
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * T1 for an inner page: a shorter full-bleed photograph band with the headline bottom-left over a 20 px rule.
 *
 * @param string $page  Page key (ph_<page>_title, ph_<page>_sub in the strings).
 * @param string $img   Photograph file in assets/images/.
 * @param string $alt   Strings key of its alt text.
 * @return string Block markup.
 */
function kantei_valuers_inner_head( $page, $img, $alt ) {
	$url   = kantei_valuers_img( $img );
	$alt_t = kantei_valuers_a( $alt );
	$lines = '';
	foreach ( explode( '|', kantei_valuers_t( "ph_{$page}_title" ) ) as $n => $line ) {
		$lines .= '<span class="kv-line kv-line--' . ( $n + 1 ) . '">' . esc_html( $line ) . '</span>';
	}
	return '<!-- wp:cover {"url":"' . $url . '","alt":"' . $alt_t . '","dimRatio":0,"isDark":false,"align":"full","tagName":"section","className":"kv-phead sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-cover alignfull is-light kv-phead sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . $alt_t . '" src="' . $url . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"className":"kv-phead__title"} -->
<h1 class="wp-block-heading kv-phead__title">' . $lines . '</h1>
<!-- /wp:heading -->

<!-- wp:separator {"className":"kv-phead__rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity kv-phead__rule"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"kv-phead__sub"} -->
<p class="kv-phead__sub">' . kantei_valuers_e( "ph_{$page}_sub" ) . '</p>
<!-- /wp:paragraph --></div></section>
<!-- /wp:cover -->';
}

/**
 * T2 for an inner page: two full-photograph panels side by side with no gap, half backed by the lead band.
 *
 * @param string $page   Page key (pr_<page>_l / _t for the heading, pa_<page>_<n>_sub / _title / _body / _href).
 * @param array  $photos Two arrays: file and alt key.
 * @return string Block markup.
 */
function kantei_valuers_inner_pair( $page, $photos ) {
	$out = '<!-- wp:group {"align":"full","tagName":"section","className":"kv-lead kv-ins kv-ins--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kv-lead kv-ins kv-ins--inner"><!-- wp:group {"className":"kv-ins__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-ins__head sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kv-label kv-label--light"} -->
<p class="kv-label kv-label--light">' . kantei_valuers_e( "pr_{$page}_l" ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"kv-h2 kv-h2--light"} -->
<h2 class="wp-block-heading kv-h2 kv-h2--light">' . kantei_valuers_e( "pr_{$page}_t" ) . '</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kv-panels","layout":{"type":"default"}} -->
<div class="wp-block-group kv-panels">';
	foreach ( array_values( $photos ) as $k => $ph ) {
		$n    = $k + 1;
		$url  = kantei_valuers_img( $ph[0] );
		$alt  = kantei_valuers_a( $ph[1] );
		$href = esc_attr( kantei_valuers_t( "pa_{$page}_{$n}_href" ) );
		$out .= '<!-- wp:cover {"url":"' . $url . '","alt":"' . $alt . '","dimRatio":0,"isDark":true,"className":"kv-panel kv-panel--' . $n . ' sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-cover is-dark kv-panel kv-panel--' . $n . ' sp-reveal sp-reveal--zoom"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . $alt . '" src="' . $url . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"kv-label kv-label--white"} -->
<p class="kv-label kv-label--white">' . kantei_valuers_e( "pa_{$page}_{$n}_sub" ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kv-panel__title"} -->
<h3 class="wp-block-heading kv-panel__title">' . kantei_valuers_e( "pa_{$page}_{$n}_title" ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kv-panel__text"} -->
<p class="kv-panel__text">' . kantei_valuers_e( "pa_{$page}_{$n}_body" ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kv-circle kv-circle--light"} -->
<p class="kv-circle kv-circle--light"><a href="' . $href . '" aria-label="' . kantei_valuers_a( "pa_{$page}_{$n}_title" ) . '"><span class="kv-circle__ico" aria-hidden="true"></span></a></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

';
	}
	return $out . '</div>
<!-- /wp:group --></section>
<!-- /wp:group -->';
}
