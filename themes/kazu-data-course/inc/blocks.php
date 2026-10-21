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
			$tb .= '<td>' . esc_html( $c ) . '</td>';
		}
		$tb .= '</tr>';
	}
	return "<!-- wp:table " . kz_json( array( 'hasFixedLayout' => false, 'className' => $class ) ) . " -->\n<figure class=\"wp-block-table $class\"><table><thead><tr>$th</tr></thead><tbody>$tb</tbody></table></figure>\n<!-- /wp:table -->\n\n";
}

/** Section opener: eyebrow + heading. */
function kz_open( $eyebrow_key, $title_key, $title_class = 'kz-h2' ) {
	return kz_p( 'kz-eyebrow', esc_html( kazu_t( $eyebrow_key ) ) ) . kz_h( 2, $title_class, esc_html( kazu_t( $title_key ) ) );
}

/**
 * Where the Buy buttons go. With WooCommerce and a published product (the first one, or the one the
 * `kazu_data_course_product_id` filter names) the button adds it to the cart and lands on checkout; otherwise it goes to
 * the price page, so the theme still works without the plugin.
 */
function kazu_buy_url() {
	$url = '/pricing/';
	if ( function_exists( 'wc_get_checkout_url' ) ) {
		$id = (int) apply_filters( 'kazu_data_course_product_id', 0 );
		if ( ! $id ) {
			$ids = get_posts( array( 'post_type' => 'product', 'post_status' => 'publish', 'numberposts' => 1, 'fields' => 'ids', 'orderby' => 'menu_order date', 'order' => 'ASC' ) );
			$id  = $ids ? (int) $ids[0] : 0;
		}
		if ( $id ) {
			$url = add_query_arg( 'add-to-cart', $id, wc_get_checkout_url() );
		}
	}
	return apply_filters( 'kazu_data_course_buy_url', $url );
}

/**
 * Inner-page copy: the English sentence is its own key; a language file may translate it under 'x' + md5 prefix.
 *
 * @param string $en English text.
 * @return string
 */
function kazu_x( $en ) {
	$t = kazu_t( 'x' . substr( md5( $en ), 0, 8 ) );
	return '' !== $t ? $t : $en;
}

/** Escaped inner-page copy. */
function kz_x( $en ) {
	return esc_html( kazu_x( $en ) );
}

/** Image with literal alt text. */
function kz_imgx( $file, $alt, $class = '' ) {
	$a = array( 'sizeSlug' => 'full', 'linkDestination' => 'none' );
	if ( $class ) {
		$a['className'] = $class;
	}
	return "<!-- wp:image " . kz_json( $a ) . " -->\n<figure class=\"wp-block-image size-full" . ( $class ? " $class" : '' ) . "\"><img src=\"" . esc_url( get_theme_file_uri( 'assets/images/' . $file ) ) . "\" alt=\"" . esc_attr( kazu_x( $alt ) ) . "\"/></figure>\n<!-- /wp:image -->\n\n";
}

/** T2 framed window: one photo (radius 8) with the name set on its right edge. $ratio: 34, 45 or 32. */
function kz_win( $file, $alt, $name, $ratio = '34', $class = '' ) {
	return kz_g( 'kz-frame kz-win ' . $class, kz_imgx( $file, $alt, 'kz-photo kz-photo--' . $ratio ) . ( $name ? kz_p( 'kz-vname kz-vname--s', kz_x( $name ) ) : '' ) );
}

/** T3 card: pill riding the top edge, then the inner markup. */
function kz_card( $pill, $inner, $class = '' ) {
	return kz_g( 'kz-card ' . $class, kz_p( 'kz-pill', kz_x( $pill ) ) . $inner );
}

/** Page subline (sits under the template's flush-left page title). */
function kz_sub( $en ) {
	return kz_p( 'kz-subline kz-subline--page', kz_x( $en ) );
}

/** Plain paragraph with copy. */
function kz_t( $en, $class = 'kz-text' ) {
	return kz_p( $class, kz_x( $en ) );
}

/** List block from plain strings. */
function kz_list( $class, array $items ) {
	$li = '';
	foreach ( $items as $i ) {
		$li .= "<!-- wp:list-item -->\n<li>" . kz_x( $i ) . "</li>\n<!-- /wp:list-item -->";
	}
	return "<!-- wp:list " . kz_json( array( 'className' => $class ) ) . " -->\n<ul class=\"wp-block-list $class\">$li</ul>\n<!-- /wp:list -->\n\n";
}
