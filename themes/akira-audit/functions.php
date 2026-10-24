<?php
/**
 * Akira Audit — functions and definitions.
 *
 * @package akira-audit
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'AKIRA_AUDIT_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function akira_audit_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'akira_audit_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head, not deferred, so html.sp-js is set before
 * the first paint (the hidden reveal states only exist under html.sp-js).
 */
function akira_audit_enqueue() {
	wp_enqueue_style( 'akira-audit-style', get_stylesheet_uri(), array(), AKIRA_AUDIT_VERSION );
	wp_enqueue_style( 'akira-audit-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'akira-audit-style' ), AKIRA_AUDIT_VERSION );
	wp_enqueue_script( 'akira-audit-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), AKIRA_AUDIT_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'akira_audit_enqueue' );

/**
 * Pattern category.
 */
function akira_audit_pattern_categories() {
	register_block_pattern_category(
		'akira-audit',
		array(
			'label'       => __( 'Akira Audit', 'akira-audit' ),
			'description' => __( 'Sections for an audit firm: the stock-count hero with a boxed verb and outline watermark, the scope circle with link rows, alternating engagement chapters in crop-mark frames, the ink service band, the overlapping case pair, the fee list, the people rows and the contact band.', 'akira-audit' ),
		)
	);
}
add_action( 'init', 'akira_audit_pattern_categories' );

/**
 * URL of a theme photograph (patterns use it so the markup stays valid wherever the theme sits).
 *
 * @param string $file File name inside assets/images/.
 * @return string
 */
function akira_audit_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * The tick-mark circle drawn over the scope photograph: a ring of 60 ticks (every 5th longer), a cross-hair with a gap
 * in the middle and a small plus. One inline SVG, decorative.
 *
 * @return string SVG markup.
 */
function akira_audit_scope_svg() {
	$s    = 476;
	$c    = $s / 2;
	$r    = $c - 3;
	$out  = '<svg class="aa-scope__svg" viewBox="0 0 ' . $s . ' ' . $s . '" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#25222B" stroke-width="1">';
	for ( $i = 0; $i < 60; $i++ ) {
		$a   = deg2rad( $i * 6 - 90 );
		$len = 0 === $i % 5 ? 14 : 7;
		$x1  = round( $c + $r * cos( $a ), 2 );
		$y1  = round( $c + $r * sin( $a ), 2 );
		$x2  = round( $c + ( $r - $len ) * cos( $a ), 2 );
		$y2  = round( $c + ( $r - $len ) * sin( $a ), 2 );
		$col = 0 === $i ? ' stroke="#6E6272" stroke-width="3"' : '';
		$out .= '<line x1="' . $x1 . '" y1="' . $y1 . '" x2="' . $x2 . '" y2="' . $y2 . '"' . $col . '/>';
	}
	$out .= '<line x1="0" y1="' . $c . '" x2="' . ( $c - 12 ) . '" y2="' . $c . '"/><line x1="' . ( $c + 12 ) . '" y1="' . $c . '" x2="' . $s . '" y2="' . $c . '"/>';
	$out .= '<line x1="' . $c . '" y1="0" x2="' . $c . '" y2="' . ( $c - 12 ) . '"/><line x1="' . $c . '" y1="' . ( $c + 12 ) . '" x2="' . $c . '" y2="' . $s . '"/>';
	$out .= '<path d="M' . ( $c - 8 ) . ' ' . $c . 'h16M' . $c . ' ' . ( $c - 8 ) . 'v16"/></svg>';
	return $out;
}

/**
 * Echo one theme string, escaped.
 *
 * @param string $key String key (see inc/i18n/en.php).
 */
function akira_audit_e( $key ) {
	echo esc_html( akira_audit_t( $key ) );
}

/**
 * File name of a numbered photograph.
 *
 * @param string $id Photo id: h01 … h12, p13 … p16.
 * @return string
 */
function akira_audit_photo( $id ) {
	$files = array(
		'h01' => 'h01-hero-stock-count.webp',
		'h02' => 'h02-scope-count-sheet.webp',
		'h03' => 'h03-appointment.webp',
		'h04' => 'h04-testing-invoices.webp',
		'h05' => 'h05-findings-meeting.webp',
		'h06' => 'h06-signing.webp',
		'h07' => 'h07-service-company.webp',
		'h08' => 'h08-service-charity.webp',
		'h09' => 'h09-service-grant.webp',
		'h10' => 'h10-case-a-timber.webp',
		'h11' => 'h11-case-b-workshop.webp',
		'h12' => 'h12-partners.webp',
	);
	return isset( $files[ $id ] ) ? $files[ $id ] : '';
}

/**
 * Markup of an image block for a numbered photograph.
 *
 * @param string $id    Photo id.
 * @param string $class Extra class names for the figure.
 * @return string Block markup (escaped).
 */
function akira_audit_figure( $id, $class = '' ) {
	$cls   = trim( 'wp-block-image size-full ' . $class );
	$attrs = $class ? ',"className":"' . esc_attr( $class ) . '"' : '';
	return '<!-- wp:image {"sizeSlug":"full","linkDestination":"none"' . $attrs . '} -->' . "\n"
		. '<figure class="' . esc_attr( $cls ) . '"><img src="' . akira_audit_img( akira_audit_photo( $id ) ) . '" alt="' . esc_attr( akira_audit_t( 'alt_' . $id ) ) . '"/></figure>' . "\n"
		. '<!-- /wp:image -->';
}

/**
 * A price string with the words around the figure ("from £1,450") wrapped in a small accent span.
 *
 * @param string $price Price text.
 * @return string Escaped markup.
 */
function akira_audit_price( $price ) {
	if ( ! preg_match( '/^(.*?)(£[\d,.]+[a-z]?)(.*)$/u', $price, $m ) ) {
		return esc_html( $price );
	}
	$pre  = '' === trim( $m[1] ) ? '' : '<span class="aa-from">' . esc_html( trim( $m[1] ) ) . '</span> ';
	$post = '' === trim( $m[3] ) ? '' : ' <span class="aa-from">' . esc_html( trim( $m[3] ) ) . '</span>';
	return $pre . esc_html( $m[2] ) . $post;
}
