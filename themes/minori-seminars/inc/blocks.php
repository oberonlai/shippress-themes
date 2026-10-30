<?php
/**
 * Minori Seminars: small helpers that print the block markup shared by the patterns (image, two-tone label,
 * outline button, arrow square). Everything is plain core blocks; the look lives in style.css.
 *
 * @package minori-seminars
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
function minori_seminars_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * Escaped theme string.
 *
 * @param string $key String key.
 * @return string
 */
function minori_seminars_e( $key ) {
	return esc_html( minori_seminars_t( $key ) );
}

/**
 * A photo as an image block (width and height from the file, so the box is reserved before it loads).
 *
 * @param string $file  File name in assets/images.
 * @param string $alt   Alt text.
 * @param string $class Extra class names on the figure.
 * @param bool   $eager First-screen image: no lazy loading.
 * @return string Block markup.
 */
function minori_seminars_figure( $file, $alt, $class = '', $eager = false ) {
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
		. '<figure class="wp-block-image size-full' . ( '' !== $class ? ' ' . esc_attr( $class ) : '' ) . '"><img src="' . minori_seminars_img( $file ) . '" alt="' . esc_attr( $alt ) . '"' . $dims . ( $eager ? ' fetchpriority="high"' : '' ) . '/></figure>' . "\n"
		. '<!-- /wp:image -->';
}

/**
 * The two-tone rule label (T3): a 100x2 plum | brick rule, then the Latin caps word.
 *
 * @param string $word Caps word.
 * @return string Block markup.
 */
function minori_seminars_label( $word ) {
	return '<!-- wp:paragraph {"className":"ms-label"} -->' . "\n"
		. '<p class="ms-label">' . esc_html( $word ) . '</p>' . "\n"
		. '<!-- /wp:paragraph -->';
}

/**
 * The outline serif button with the long arrow (T3).
 *
 * @param string $label Button text.
 * @param string $url   Link.
 * @param string $wrap  Class on the buttons wrapper.
 * @return string Block markup.
 */
function minori_seminars_btn( $label, $url, $wrap = '' ) {
	$wrap = trim( 'ms-btns ' . $wrap );
	return '<!-- wp:buttons {"className":"' . esc_attr( $wrap ) . '"} -->' . "\n"
		. '<div class="wp-block-buttons ' . esc_attr( $wrap ) . '"><!-- wp:button {"className":"ms-btn"} -->' . "\n"
		. '<div class="wp-block-button ms-btn"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></div>' . "\n"
		. '<!-- /wp:button --></div>' . "\n"
		. '<!-- /wp:buttons -->';
}

/**
 * A paragraph block with a class.
 *
 * @param string $text  Escaped-by-caller inline HTML.
 * @param string $class Class names.
 * @return string Block markup.
 */
function minori_seminars_p( $text, $class = '' ) {
	$attr = '' === $class ? '' : ' ' . wp_json_encode( array( 'className' => $class ) );
	$cls  = '' === $class ? '' : ' class="' . esc_attr( $class ) . '"';
	return '<!-- wp:paragraph' . $attr . ' -->' . "\n" . '<p' . $cls . '>' . $text . '</p>' . "\n" . '<!-- /wp:paragraph -->';
}

/**
 * The 40x46 black arrow square flush at a card's bottom-right.
 *
 * @param string $url   Link.
 * @param string $label Accessible name.
 * @return string Block markup.
 */
function minori_seminars_square( $url, $label ) {
	return '<!-- wp:html -->' . "\n"
		. '<a class="ms-sq" href="' . esc_url( $url ) . '" aria-label="' . esc_attr( $label ) . '"><svg viewBox="0 0 24 12" width="24" height="12" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M0 6h22M17 1l5 5-5 5"/></svg></a>' . "\n"
		. '<!-- /wp:html -->';
}

/**
 * Prev/next arrow squares (30x30) for a snap strip.
 *
 * @param string $selector CSS selector of the strip.
 * @param string $class    Extra class names.
 * @return string Block markup.
 */
function minori_seminars_arrows( $selector, $class = '' ) {
	$svg = '<svg viewBox="0 0 16 10" width="16" height="10" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M0 5h14M10 1l4 4-4 4"/></svg>';
	return '<!-- wp:html -->' . "\n"
		. '<div class="ms-arrows ' . esc_attr( $class ) . '"><button type="button" class="ms-arrow ms-arrow--prev" data-ms-strip="' . esc_attr( $selector ) . '" data-dir="prev" aria-label="Previous">' . $svg . '</button><button type="button" class="ms-arrow ms-arrow--next" data-ms-strip="' . esc_attr( $selector ) . '" data-dir="next" aria-label="Next">' . $svg . '</button></div>' . "\n"
		. '<!-- /wp:html -->';
}
