<?php
/**
 * Kanjo College — block markup helpers for the inner-page patterns.
 *
 * Each function returns serialized block markup (strings), so the page patterns stay short and the layout of the
 * window head, the portrait paper cards and the ledger sections is defined once.
 *
 * @package kanjo-college
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * URL of a theme photograph.
 *
 * @param int $n Photo number (1–18).
 * @return string
 */
function kanjo_college_photo( $n ) {
	return esc_url( get_theme_file_uri( sprintf( 'assets/images/p%02d.webp', (int) $n ) ) );
}

/**
 * A paragraph block.
 *
 * @param string $text  Text (may hold inline HTML such as <br>).
 * @param string $class Extra class.
 * @return string
 */
function kanjo_college_p( $text, $class = '' ) {
	$attr = $class ? ' {"className":"' . $class . '"}' : '';
	$cls  = $class ? ' class="' . $class . '"' : '';
	return "<!-- wp:paragraph{$attr} -->\n<p{$cls}>" . $text . "</p>\n<!-- /wp:paragraph -->\n\n";
}

/**
 * A heading block.
 *
 * @param string $text  Heading text.
 * @param int    $level 2 or 3.
 * @param string $class Extra class.
 * @return string
 */
function kanjo_college_h( $text, $level = 2, $class = '' ) {
	$a = array();
	if ( 2 !== $level ) {
		$a[] = '"level":' . (int) $level;
	}
	if ( $class ) {
		$a[] = '"className":"' . $class . '"';
	}
	$attr = $a ? ' {' . implode( ',', $a ) . '}' : '';
	$cls  = 'wp-block-heading' . ( $class ? ' ' . $class : '' );
	return "<!-- wp:heading{$attr} -->\n<h{$level} class=\"{$cls}\">" . esc_html( $text ) . "</h{$level}>\n<!-- /wp:heading -->\n\n";
}

/**
 * A bullet list block.
 *
 * @param string[] $items Items.
 * @param string   $class Extra class.
 * @return string
 */
function kanjo_college_list( array $items, $class = 'kc-bullets' ) {
	$out = '<!-- wp:list {"className":"' . $class . '"} -->' . "\n" . '<ul class="wp-block-list ' . $class . '">';
	foreach ( $items as $i ) {
		$out .= "<!-- wp:list-item -->\n<li>" . esc_html( $i ) . "</li>\n<!-- /wp:list-item -->";
	}
	return $out . "</ul>\n<!-- /wp:list -->\n\n";
}

/**
 * A plain group block.
 *
 * @param string $inner Block markup inside.
 * @param string $class Class names.
 * @param string $tag   div, section or main.
 * @return string
 */
function kanjo_college_group( $inner, $class = '', $tag = 'div' ) {
	$a = array();
	if ( 'div' !== $tag ) {
		$a[] = '"tagName":"' . $tag . '"';
	}
	if ( $class ) {
		$a[] = '"className":"' . $class . '"';
	}
	$a[]  = '"layout":{"type":"default"}';
	$cls  = 'wp-block-group' . ( $class ? ' ' . $class : '' );
	return '<!-- wp:group {' . implode( ',', $a ) . "} -->\n<{$tag} class=\"{$cls}\">" . $inner . "</{$tag}>\n<!-- /wp:group -->\n\n";
}

/**
 * A full-width section holding a 1280 px inner column.
 *
 * @param string $inner Markup inside the column.
 * @param string $class Section classes (after kc-sec).
 * @param string $id    Optional anchor.
 * @return string
 */
function kanjo_college_sec( $inner, $class = '', $id = '' ) {
	$cls = 'kc-sec' . ( $class ? ' ' . $class : '' );
	$idc = $id ? ' id="' . $id . '"' : '';
	return '<!-- wp:group {"tagName":"section","align":"full","className":"' . $cls . '","layout":{"type":"default"}} -->' . "\n<section{$idc} class=\"wp-block-group alignfull {$cls}\">" . kanjo_college_group( $inner, 'kc-in' ) . "</section>\n<!-- /wp:group -->\n\n";
}

/**
 * Chip + H2 (+ lead) section head with the heading rise.
 *
 * @param string $chip Chip text.
 * @param string $h2   Heading.
 * @param string $lead Optional lead paragraph.
 * @return string
 */
function kanjo_college_sechead( $chip, $h2, $lead = '' ) {
	$in  = kanjo_college_p( esc_html( $chip ), 'kc-chip sp-reveal sp-reveal--up' );
	$in .= kanjo_college_h( $h2, 2, 'sp-reveal sp-reveal--up' );
	if ( $lead ) {
		$in .= kanjo_college_p( esc_html( $lead ), 'kc-lead' );
	}
	return kanjo_college_group( $in, 'kc-head' );
}

/**
 * Text link button row.
 *
 * @param string $label Link text.
 * @param string $href  Link.
 * @param string $class Extra classes on the buttons wrapper.
 * @return string
 */
function kanjo_college_link( $label, $href, $class = '' ) {
	$a   = $class ? ' {"className":"' . $class . '"}' : '';
	$cls = 'wp-block-buttons' . ( $class ? ' ' . $class : '' );
	return "<!-- wp:buttons{$a} -->\n<div class=\"{$cls}\"><!-- wp:button {\"className\":\"is-style-text-link\"} -->\n<div class=\"wp-block-button is-style-text-link\"><a class=\"wp-block-button__link wp-element-button\" href=\"" . esc_url( $href ) . '">' . esc_html( $label ) . "</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->\n\n";
}

/**
 * Inner-page head (T1): chip, H1, lead on the left; on the right a 420×300 rounded photograph window with the
 * vertical caption, the index numeral and two outline stickers.
 *
 * @param array $o chip, title, lead, photo (int), alt, cap, idx.
 * @return string
 */
function kanjo_college_head( array $o ) {
	$text  = kanjo_college_p( esc_html( $o['chip'] ), 'kc-chip' );
	$text .= '<!-- wp:heading {"level":1,"className":"kc-h1 kc-h1--page"} -->' . "\n" . '<h1 class="wp-block-heading kc-h1 kc-h1--page">' . esc_html( $o['title'] ) . "</h1>\n<!-- /wp:heading -->\n\n";
	$text .= kanjo_college_p( esc_html( $o['lead'] ), 'kc-lead' );

	$win  = '<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-win__img"} -->' . "\n";
	$win .= '<figure class="wp-block-image size-full kc-win__img"><img src="' . kanjo_college_photo( $o['photo'] ) . '" alt="' . esc_attr( $o['alt'] ) . "\"/></figure>\n<!-- /wp:image -->\n\n";
	$win .= kanjo_college_p( esc_html( $o['cap'] ), 'kc-win__cap' );
	$win .= kanjo_college_p( esc_html( $o['idx'] ), 'kc-win__idx' );
	$win .= "<!-- wp:html -->\n" . '<span class="kc-stk kc-stk--a" aria-hidden="true"></span><span class="kc-stk kc-stk--c" aria-hidden="true"></span>' . "\n<!-- /wp:html -->\n\n";

	$in  = '<!-- wp:group {"align":"wide","className":"kc-ph__in","layout":{"type":"default"}} -->' . "\n";
	$in .= '<div class="wp-block-group alignwide kc-ph__in">' . kanjo_college_group( $text, 'kc-ph__text' ) . kanjo_college_group( $win, 'kc-win kc-win--sm' ) . "</div>\n<!-- /wp:group -->\n\n";

	return '<!-- wp:group {"tagName":"section","align":"full","className":"kc-ph","layout":{"type":"default"}} -->' . "\n" . '<section class="wp-block-group alignfull kc-ph">' . $in . "</section>\n<!-- /wp:group -->\n\n";
}

/**
 * One portrait paper card (T2): tinted top band with line-art, photo, overlapping pill label.
 *
 * @param array $c n (1–4 tint), photo, alt, title, sub, note, note_class.
 * @return string
 */
function kanjo_college_card( array $c ) {
	$n    = (int) $c['n'];
	$nc   = isset( $c['note_class'] ) ? $c['note_class'] : 'kc-card__note';
	$pill = kanjo_college_h( $c['title'], 3 ) . kanjo_college_p( esc_html( $c['sub'] ), 'kc-pill__sub' );
	$photo  = '<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-card__photo"} -->' . "\n";
	$photo .= '<figure class="wp-block-image size-full kc-card__photo"><img src="' . kanjo_college_photo( $c['photo'] ) . '" alt="' . esc_attr( $c['alt'] ) . "\"/></figure>\n<!-- /wp:image -->\n\n";
	$in     = kanjo_college_group( $photo . kanjo_college_group( $pill, 'kc-pill' ), 'kc-card__in' );
	if ( ! empty( $c['note'] ) ) {
		$in .= kanjo_college_p( esc_html( $c['note'] ), $nc );
	}
	return kanjo_college_group( $in, 'kc-card kc-card--' . $n . ' sp-reveal sp-reveal--up' );
}

/**
 * A row of paper cards.
 *
 * @param array[] $cards Card definitions.
 * @param string  $mod   Extra class on the row (kc-cards--stories, kc-cards--three, kc-cards--two).
 * @return string
 */
function kanjo_college_cards( array $cards, $mod = '' ) {
	$out = '';
	foreach ( $cards as $c ) {
		$out .= kanjo_college_card( $c );
	}
	return kanjo_college_group( $out, 'kc-cards' . ( $mod ? ' ' . $mod : '' ) . ' sp-stagger' );
}

/**
 * A ruled table block.
 *
 * @param string[]   $head Column headings.
 * @param string[][] $rows Row cells (plain text).
 * @param string     $mod  Extra class (kc-table--text for tables whose last column is text, not a price).
 * @return string
 */
function kanjo_college_table( array $head, array $rows, $mod = '' ) {
	$cls = 'kc-table' . ( $mod ? ' ' . $mod : '' );
	$t   = '<thead><tr>';
	foreach ( $head as $h ) {
		$t .= '<th>' . esc_html( $h ) . '</th>';
	}
	$t .= '</tr></thead><tbody>';
	foreach ( $rows as $r ) {
		$t .= '<tr>';
		foreach ( $r as $cell ) {
			$t .= '<td>' . esc_html( $cell ) . '</td>';
		}
		$t .= '</tr>';
	}
	return '<!-- wp:table {"hasFixedLayout":true,"className":"' . $cls . '"} -->' . "\n" . '<figure class="wp-block-table ' . $cls . '"><table class="has-fixed-layout">' . $t . "</tbody></table></figure>\n<!-- /wp:table -->\n\n";
}

/**
 * Full-bleed photograph band that drifts as you scroll (sp-parallax), with a pale rounded card.
 *
 * @param array $o photo, alt, chip, title, text, link_label, link_href.
 * @return string
 */
function kanjo_college_cover( array $o ) {
	$url  = kanjo_college_photo( $o['photo'] );
	$card = kanjo_college_p( esc_html( $o['chip'] ), 'kc-chip' ) . kanjo_college_h( $o['title'], 2 ) . kanjo_college_p( esc_html( $o['text'] ) );
	if ( ! empty( $o['link_label'] ) ) {
		$card .= kanjo_college_link( $o['link_label'], $o['link_href'] );
	}
	$out  = '<!-- wp:cover {"url":"' . $url . '","dimRatio":0,"minHeight":560,"isDark":false,"align":"full","className":"kc-pause sp-parallax","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->' . "\n";
	$out .= '<div class="wp-block-cover alignfull is-light kc-pause sp-parallax" style="padding-top:0;padding-bottom:0;min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_attr( $o['alt'] ) . '" src="' . $url . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container">';
	$out .= kanjo_college_group( $card, 'kc-pause__card' ) . "</div></div>\n<!-- /wp:cover -->\n\n";
	return $out;
}

/**
 * A ruled fact row: label on the left, text on the right (used for years, steps and policies).
 *
 * @param string $label Left cell.
 * @param string $body  Right cell inner markup.
 * @param string $mod   Extra class.
 * @return string
 */
function kanjo_college_ruled( $label, $body, $mod = '' ) {
	return kanjo_college_group( kanjo_college_p( esc_html( $label ), 'kc-ruled__no' ) . kanjo_college_group( $body, 'kc-ruled__body' ), 'kc-ruled sp-reveal sp-reveal--up' . ( $mod ? ' ' . $mod : '' ) );
}

/**
 * The twelve-week row (same five route labels as the route bar), static markup.
 *
 * @return string
 */
function kanjo_college_weeks() {
	$chips = static function ( $from, $to, $mark = array() ) {
		$out = '';
		for ( $w = $from; $w <= $to; $w++ ) {
			$out .= '<b' . ( in_array( $w, $mark, true ) ? ' class="is-key"' : '' ) . '>' . $w . '</b>';
		}
		return $out;
	};
	$out  = "<!-- wp:html -->\n";
	$out .= '<div class="kc-weeks kc-weeks--big sp-reveal sp-reveal--up" role="group" aria-label="The twelve weeks of a term"><div class="kc-weeks__scroll"><div class="kc-weeks__row">';
	$out .= '<div class="kc-wk kc-wk--node"><span class="kc-wk__br">Enrol</span><div class="kc-wk__chips"><i></i></div></div>';
	$out .= '<div class="kc-wk"><span class="kc-wk__br">Weeks 1–4</span><div class="kc-wk__chips">' . $chips( 1, 4 ) . '</div></div>';
	$out .= '<div class="kc-wk"><span class="kc-wk__br">Mock paper</span><div class="kc-wk__chips">' . $chips( 5, 9, array( 6, 9 ) ) . '</div></div>';
	$out .= '<div class="kc-wk"><span class="kc-wk__br">Exam week</span><div class="kc-wk__chips">' . $chips( 10, 12, array( 12 ) ) . '</div></div>';
	$out .= '<div class="kc-wk kc-wk--node"><span class="kc-wk__br">Results</span><div class="kc-wk__chips"><i></i></div></div>';
	$out .= "</div></div></div>\n<!-- /wp:html -->\n\n";
	return $out;
}

/**
 * A custom HTML block.
 *
 * @param string $html Markup.
 * @return string
 */
function kanjo_college_html( $html ) {
	return "<!-- wp:html -->\n" . $html . "\n<!-- /wp:html -->\n\n";
}

/**
 * An image block with a theme photograph.
 *
 * @param int    $n     Photo number.
 * @param string $alt   Alt text.
 * @param string $class Class on the figure.
 * @return string
 */
function kanjo_college_image( $n, $alt, $class ) {
	return '<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"' . $class . '"} -->' . "\n" . '<figure class="wp-block-image size-full ' . $class . '"><img src="' . kanjo_college_photo( $n ) . '" alt="' . esc_attr( $alt ) . "\"/></figure>\n<!-- /wp:image -->\n\n";
}
