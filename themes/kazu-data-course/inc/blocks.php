<?php
/**
 * Kazu Data Course: small helpers that print core block markup for the patterns (so the copy stays in inc/i18n).
 *
 * @package kazu-data-course
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** JSON for a block comment. */
function kz_json( array $a ) {
	return wp_json_encode( $a, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
}

/** Group. $inner is block markup. */
function kz_g( $class, $inner, $tag = 'div', $align = '' ) {
	$a = array( 'className' => $class, 'layout' => array( 'type' => 'default' ) );
	if ( 'div' !== $tag ) {
		$a['tagName'] = $tag;
	}
	if ( $align ) {
		$a['align'] = $align;
	}
	return "<!-- wp:group " . kz_json( $a ) . " -->\n<$tag class=\"wp-block-group" . ( $align ? " align$align" : '' ) . " $class\">$inner</$tag>\n<!-- /wp:group -->\n\n";
}

/** Paragraph; $html is already escaped HTML. */
function kz_p( $class, $html ) {
	return "<!-- wp:paragraph " . kz_json( array( 'className' => $class ) ) . " -->\n<p class=\"$class\">$html</p>\n<!-- /wp:paragraph -->\n\n";
}

/** Heading. */
function kz_h( $level, $class, $html ) {
	$a = array( 'className' => $class );
	if ( 2 !== $level ) {
		$a['level'] = $level;
	}
	return "<!-- wp:heading " . kz_json( $a ) . " -->\n<h$level class=\"wp-block-heading $class\">$html</h$level>\n<!-- /wp:heading -->\n\n";
}

/** Image from assets/images, alt from an i18n key. */
function kz_img( $file, $alt_key, $class = '' ) {
	$a = array( 'sizeSlug' => 'full', 'linkDestination' => 'none' );
	if ( $class ) {
		$a['className'] = $class;
	}
	return "<!-- wp:image " . kz_json( $a ) . " -->\n<figure class=\"wp-block-image size-full" . ( $class ? " $class" : '' ) . "\"><img src=\"" . esc_url( get_theme_file_uri( 'assets/images/' . $file ) ) . "\" alt=\"" . esc_attr( kazu_t( $alt_key ) ) . "\"/></figure>\n<!-- /wp:image -->\n\n";
}

/** One or more buttons. $buttons: list of array( label, href, extra class ). */
function kz_btns( $class, array $buttons ) {
	$inner = '';
	foreach ( $buttons as $b ) {
		$c      = isset( $b[2] ) ? $b[2] : '';
		$inner .= "<!-- wp:button " . kz_json( array( 'className' => $c ) ) . " -->\n<div class=\"wp-block-button $c\"><a class=\"wp-block-button__link wp-element-button\" href=\"" . esc_url( $b[1] ) . "\">" . esc_html( $b[0] ) . "</a></div>\n<!-- /wp:button -->\n\n";
	}
	return "<!-- wp:buttons " . kz_json( array( 'className' => $class, 'layout' => array( 'type' => 'flex' ) ) ) . " -->\n<div class=\"wp-block-buttons $class\">$inner</div>\n<!-- /wp:buttons -->\n\n";
}

/** Details (question and answer). */
function kz_details( $q, $a ) {
	return "<!-- wp:details -->\n<details class=\"wp-block-details\"><summary>" . esc_html( $q ) . "</summary><!-- wp:paragraph -->\n<p>" . esc_html( $a ) . "</p>\n<!-- /wp:paragraph --></details>\n<!-- /wp:details -->\n\n";
}

/** Table with a head row. */
function kz_table( $class, array $head, array $rows ) {
	$th = '';
	foreach ( $head as $h ) {
		$th .= '<th>' . esc_html( $h ) . '</th>';
	}
	$tb = '';
	foreach ( $rows as $r ) {
		$tb .= '<tr>';
		foreach ( $r as $i => $c ) {
			$tb .= '<td' . ( count( $r ) - 1 === $i ? ' class="kz-price"' : '' ) . '>' . esc_html( $c ) . '</td>';
		}
		$tb .= '</tr>';
	}
	return "<!-- wp:table " . kz_json( array( 'className' => $class ) ) . " -->\n<figure class=\"wp-block-table $class\"><table class=\"has-fixed-layout\"><thead><tr>$th</tr></thead><tbody>$tb</tbody></table></figure>\n<!-- /wp:table -->\n\n";
}

/** Section opener: eyebrow + heading. */
function kz_open( $eyebrow_key, $title_key, $title_class = 'kz-h2' ) {
	return kz_p( 'kz-eyebrow', esc_html( kazu_t( $eyebrow_key ) ) ) . kz_h( 2, $title_class, esc_html( kazu_t( $title_key ) ) );
}
