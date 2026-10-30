<?php
/**
 * Kikin Advisors: small helpers that print the block markup shared by the patterns (illustration, outline circle badge,
 * vertical headline, ruled list rows, pill button). Everything is plain core blocks; the look lives in style.css.
 *
 * @package kikin-advisors
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * URL of a theme image.
 *
 * @param string $file File name in assets/images.
 * @return string
 */
function kikin_advisors_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * Escaped theme string.
 *
 * @param string $key String key.
 * @return string
 */
function kikin_advisors_e( $key ) {
	return esc_html( kikin_advisors_t( $key ) );
}

/**
 * An illustration as an image block (width and height from the file, so the box is reserved before it loads).
 *
 * @param string $file  File name in assets/images.
 * @param string $alt   Alt text.
 * @param string $class Extra class names on the figure.
 * @return string Block markup.
 */
function kikin_advisors_figure( $file, $alt, $class = '' ) {
	$size  = getimagesize( get_theme_file_path( 'assets/images/' . $file ) );
	$dims  = $size ? ' width="' . (int) $size[0] . '" height="' . (int) $size[1] . '"' : '';
	$class = trim( $class );
	$attrs = array( 'sizeSlug' => 'full', 'linkDestination' => 'none' );
	if ( $size ) {
		$attrs['width']  = (int) $size[0];
		$attrs['height'] = (int) $size[1];
	}
	if ( '' !== $class ) {
		$attrs['className'] = $class;
	}
	return '<!-- wp:image ' . wp_json_encode( $attrs ) . ' -->' . "\n"
		. '<figure class="wp-block-image size-full' . ( '' !== $class ? ' ' . esc_attr( $class ) : '' ) . '"><img src="' . kikin_advisors_img( $file ) . '" alt="' . esc_attr( $alt ) . '"' . $dims . '/></figure>' . "\n"
		. '<!-- /wp:image -->';
}

/**
 * The outline circle badge (T2): EN caps on two lines plus a small sub-label.
 *
 * @param string $caps Caps text, "|" = line break.
 * @param string $sub  Sub-label.
 * @return string Block markup.
 */
function kikin_advisors_badge( $caps, $sub ) {
	$lines = implode( '<br>', array_map( 'esc_html', explode( '|', $caps ) ) );
	return '<!-- wp:group {"className":"kk-badge","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group kk-badge"><!-- wp:paragraph {"className":"kk-badge__en"} -->' . "\n"
		. '<p class="kk-badge__en">' . $lines . '</p>' . "\n"
		. '<!-- /wp:paragraph -->' . "\n\n"
		. '<!-- wp:paragraph {"className":"kk-badge__sub"} -->' . "\n"
		. '<p class="kk-badge__sub">' . esc_html( $sub ) . '</p>' . "\n"
		. '<!-- /wp:paragraph --></div>' . "\n"
		. '<!-- /wp:group -->';
}

/**
 * The section heading (vertical at >= 1024 px, two columns).
 *
 * @param string $text "|" separates the two columns.
 * @return string Block markup.
 */
function kikin_advisors_vhead( $text ) {
	$lines = implode( '<br>', array_map( 'esc_html', explode( '|', $text ) ) );
	return '<!-- wp:heading {"className":"kk-vhead"} -->' . "\n"
		. '<h2 class="wp-block-heading kk-vhead">' . $lines . '</h2>' . "\n"
		. '<!-- /wp:heading -->';
}

/**
 * One ruled list row: bold name, then a one-line description.
 *
 * @param string $head Row name.
 * @param string $desc Row text.
 * @return string Block markup.
 */
function kikin_advisors_row( $head, $desc ) {
	return '<!-- wp:group {"className":"kk-row","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group kk-row"><!-- wp:paragraph {"className":"kk-row__h"} -->' . "\n"
		. '<p class="kk-row__h">' . esc_html( $head ) . '</p>' . "\n"
		. '<!-- /wp:paragraph -->' . "\n\n"
		. '<!-- wp:paragraph {"className":"kk-row__d"} -->' . "\n"
		. '<p class="kk-row__d">' . esc_html( $desc ) . '</p>' . "\n"
		. '<!-- /wp:paragraph --></div>' . "\n"
		. '<!-- /wp:group -->';
}

/**
 * A pill button (the CTA is always "Request a briefing").
 *
 * @param string $label Button text.
 * @param string $url   Link.
 * @param string $class Style class: kk-pill--deep, kk-pill--yellow or kk-pill--outline.
 * @param string $wrap  Class on the buttons wrapper.
 * @return string Block markup.
 */
function kikin_advisors_pill( $label, $url, $class = 'kk-pill--deep', $wrap = '' ) {
	return '<!-- wp:buttons {"className":"' . esc_attr( $wrap ) . '"} -->' . "\n"
		. '<div class="wp-block-buttons ' . esc_attr( $wrap ) . '"><!-- wp:button {"className":"kk-pill ' . esc_attr( $class ) . '"} -->' . "\n"
		. '<div class="wp-block-button kk-pill ' . esc_attr( $class ) . '"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></div>' . "\n"
		. '<!-- /wp:button --></div>' . "\n"
		. '<!-- /wp:buttons -->';
}

/**
 * The round-thumb card of the notched panels.
 *
 * @param string $file  Image.
 * @param string $alt   Alt text.
 * @param string $label Small caps label.
 * @param string $title Card title.
 * @param string $desc  Description.
 * @param string $link  Optional "Read →" link text ('' for none).
 * @return string Block markup.
 */
function kikin_advisors_card( $file, $alt, $label, $title, $desc, $link = '' ) {
	$more = '' === $link ? '' : "\n\n" . '<!-- wp:paragraph {"className":"kk-card__more"} -->' . "\n" . '<p class="kk-card__more"><a href="/stories/">' . esc_html( $link ) . '</a></p>' . "\n" . '<!-- /wp:paragraph -->';
	return '<!-- wp:group {"className":"kk-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group kk-card sp-reveal sp-reveal--up">' . kikin_advisors_figure( $file, $alt, 'kk-thumb' ) . "\n\n"
		. '<!-- wp:paragraph {"className":"kk-card__label"} -->' . "\n" . '<p class="kk-card__label">' . esc_html( $label ) . '</p>' . "\n" . '<!-- /wp:paragraph -->' . "\n\n"
		. '<!-- wp:heading {"level":3,"className":"kk-card__title"} -->' . "\n" . '<h3 class="wp-block-heading kk-card__title">' . esc_html( $title ) . '</h3>' . "\n" . '<!-- /wp:heading -->' . "\n\n"
		. '<!-- wp:paragraph {"className":"kk-card__desc"} -->' . "\n" . '<p class="kk-card__desc">' . esc_html( $desc ) . '</p>' . "\n" . '<!-- /wp:paragraph -->' . $more . '</div>' . "\n"
		. '<!-- /wp:group -->';
}

/**
 * The inline SVG line icon that sits on the top border of a notched panel.
 *
 * @param string $type 'calendar' or 'speech'.
 * @return string Block markup (core/html).
 */
function kikin_advisors_chip( $type ) {
	$d = 'calendar' === $type
		? '<rect x="6" y="9" width="28" height="25" rx="2"/><path d="M6 16h28M13 5v7M27 5v7M13 23h4M23 23h4M13 29h4"/>'
		: '<path d="M6 8h28v20H21l-7 6v-6H6z"/><path d="M13 16h14M13 21h9"/>';
	return '<!-- wp:html -->' . "\n"
		. '<span class="kk-panel__chip" aria-hidden="true"><svg viewBox="0 0 40 40" width="40" height="40" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" focusable="false">' . $d . '</svg></span>' . "\n"
		. '<!-- /wp:html -->';
}

/**
 * The inner-page head (T1): full-bleed ground with the line-art skyline strip K14 and one ink label bar.
 *
 * @param string $title Block markup of the title (the bar): a heading level 1, post-title or paragraph carrying class kk-bar.
 * @return string Block markup.
 */
function kikin_advisors_ihead( $title ) {
	return '<!-- wp:group {"align":"full","className":"kk-ihead","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group alignfull kk-ihead">' . kikin_advisors_figure( 'k14.webp', kikin_advisors_t( 'alt_k14' ), 'kk-ihead__strip' ) . "\n\n"
		. $title . '</div>' . "\n"
		. '<!-- /wp:group -->';
}
