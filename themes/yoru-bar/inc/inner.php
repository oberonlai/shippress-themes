<?php
/**
 * Yoru Bar: building blocks for the inner pages (framed page head, split panel, circle section, tables, form, tiles).
 * Each function returns block markup; the page patterns in patterns/page-*.php put them in order.
 *
 * @package yoru-bar
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * A heading block (h2/h3) with escaped text from the theme strings.
 *
 * @param string $key   String key.
 * @param int    $level Heading level.
 * @param string $class Class names (the editor also gets them in the block attributes).
 * @param string $size  Font size slug ('' for none).
 * @return string
 */
function yoru_bar_h( $key, $level, $class, $size = '' ) {
	$attrs = '{"level":' . (int) $level . ( $size ? ',"fontSize":"' . $size . '"' : '' ) . ',"className":"' . $class . '"}';
	$cls   = 'wp-block-heading ' . $class . ( $size ? ' has-' . $size . '-font-size' : '' );
	return '<!-- wp:heading ' . $attrs . ' -->' . "\n" . '<h' . (int) $level . ' class="' . esc_attr( $cls ) . '">' . esc_html( yoru_bar_t( $key ) ) . '</h' . (int) $level . '>' . "\n" . '<!-- /wp:heading -->';
}

/**
 * A paragraph block from a theme string.
 *
 * @param string $key   String key.
 * @param string $class Class names.
 * @return string
 */
function yoru_bar_p( $key, $class = '' ) {
	$attrs = $class ? ' {"className":"' . $class . '"}' : '';
	$cls   = $class ? ' class="' . esc_attr( $class ) . '"' : '';
	return '<!-- wp:paragraph' . $attrs . ' -->' . "\n" . '<p' . $cls . '>' . esc_html( yoru_bar_t( $key ) ) . '</p>' . "\n" . '<!-- /wp:paragraph -->';
}

/**
 * The framed page head: a full-bleed photograph (parallax) under a dark grade, the moon ring, the page title and a short line.
 *
 * @param string $id  Photo id.
 * @param string $pre Page string prefix (<pre>_title, <pre>_sub).
 * @param string $pos Optional object-position for the photograph.
 * @return string
 */
function yoru_bar_pagehead( $id, $pre, $pos = '' ) {
	$pc    = $pos ? ' yb-pos-' . preg_replace( '/\D+/', '', $pos ) : '';
	return '<!-- wp:group {"tagName":"section","align":"full","className":"yb-pagehead sp-parallax","layout":{"type":"default"}} -->' . "\n"
		. '<section class="wp-block-group alignfull yb-pagehead sp-parallax"><!-- wp:group {"className":"yb-pagehead__media","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group yb-pagehead__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-ph yb-ph--' . strtolower( $id ) . ' yb-pagehead__img sp-parallax__layer' . $pc . '"} -->' . "\n"
		. '<figure class="wp-block-image size-full yb-ph yb-ph--' . strtolower( $id ) . ' yb-pagehead__img sp-parallax__layer' . $pc . '"><img src="' . esc_url( yoru_bar_img( $id ) ) . '" alt="' . esc_attr( yoru_bar_t( 'alt_' . $id ) ) . '"/></figure>' . "\n"
		. '<!-- /wp:image --></div>' . "\n" . '<!-- /wp:group -->' . "\n\n"
		. '<!-- wp:group {"className":"yb-pagehead__fg","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group yb-pagehead__fg"><!-- wp:html -->' . "\n"
		. yoru_bar_moon( 72, 'pg', 'yb-moon yb-pagehead__moon' ) . "\n" . '<!-- /wp:html -->' . "\n\n"
		. '<!-- wp:heading {"level":1,"fontSize":"xx-large","className":"yb-struck yb-pagehead__title"} -->' . "\n"
		. '<h1 class="wp-block-heading yb-struck yb-pagehead__title has-xx-large-font-size">' . esc_html( yoru_bar_t( $pre . '_title' ) ) . '</h1>' . "\n" . '<!-- /wp:heading -->' . "\n\n"
		. yoru_bar_p( $pre . '_sub', 'yb-pagehead__sub' ) . '</div>' . "\n" . '<!-- /wp:group --></section>' . "\n" . '<!-- /wp:group -->';
}

/**
 * The page intro: one centred paragraph under the head.
 *
 * @param string $key String key.
 * @return string
 */
function yoru_bar_intro( $key ) {
	return '<!-- wp:group {"align":"full","className":"yb-intro","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group alignfull yb-intro">' . yoru_bar_p( $key, 'yb-intro__p sp-reveal sp-reveal--up' ) . '</div>' . "\n" . '<!-- /wp:group -->';
}

/**
 * A text section in the centred 540px column: a tan heading and one or more paragraphs.
 *
 * @param string   $h_key  Heading string key.
 * @param string[] $b_keys Paragraph string keys.
 * @param string   $extra  Extra class names for the section (e.g. yb-sect--lifted).
 * @return string
 */
function yoru_bar_sect( $h_key, $b_keys, $extra = '' ) {
	$out = '<!-- wp:group {"align":"full","className":"yb-sect ' . $extra . '","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group alignfull yb-sect ' . esc_attr( $extra ) . '"><!-- wp:group {"className":"yb-sect__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group yb-sect__col sp-reveal sp-reveal--up">' . yoru_bar_h( $h_key, 3, 'yb-sect__h' );
	foreach ( (array) $b_keys as $k ) {
		$out .= "\n\n" . yoru_bar_p( $k );
	}
	return $out . '</div>' . "\n" . '<!-- /wp:group --></div>' . "\n" . '<!-- /wp:group -->';
}

/**
 * Full-viewport 50/50 panel: a photograph flush to one edge, a tan sub-head over a struck display word, the text and an optional link.
 *
 * @param string   $id     Photo id.
 * @param string   $sub    Sub-head string key.
 * @param string   $h      Struck word string key.
 * @param string[] $b_keys Paragraph string keys.
 * @param bool     $mirror Photo on the right on wide screens.
 * @param string   $more   Optional "more" key => href pair as array( key, href ).
 * @param string   $extra  Extra panel class (e.g. yb-panel--lifted).
 * @return string
 */
function yoru_bar_panel( $id, $sub, $h, $b_keys, $mirror = false, $more = null, $extra = '' ) {
	$cls = trim( 'yb-panel yb-panel--inner ' . ( $mirror ? 'yb-panel--mirror ' : '' ) . $extra );
	$out = '<!-- wp:group {"tagName":"section","align":"full","className":"' . $cls . '","layout":{"type":"default"}} -->' . "\n"
		. '<section class="wp-block-group alignfull ' . esc_attr( $cls ) . '"><!-- wp:group {"className":"yb-panel__photo sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group yb-panel__photo sp-reveal sp-reveal--wipe"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-ph yb-ph--' . strtolower( $id ) . ' yb-panel__img"} -->' . "\n"
		. '<figure class="wp-block-image size-full yb-ph yb-ph--' . strtolower( $id ) . ' yb-panel__img"><img src="' . esc_url( yoru_bar_img( $id ) ) . '" alt="' . esc_attr( yoru_bar_t( 'alt_' . $id ) ) . '"/></figure>' . "\n"
		. '<!-- /wp:image --></div>' . "\n" . '<!-- /wp:group -->' . "\n\n"
		. '<!-- wp:group {"className":"yb-panel__text sp-stagger","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group yb-panel__text sp-stagger">' . yoru_bar_p( $sub, 'yb-sub' ) . "\n\n"
		. '<!-- wp:heading {"fontSize":"xx-large","className":"yb-struck sp-reveal sp-reveal--up"} -->' . "\n"
		. '<h2 class="wp-block-heading yb-struck sp-reveal sp-reveal--up has-xx-large-font-size">' . esc_html( yoru_bar_t( $h ) ) . '</h2>' . "\n" . '<!-- /wp:heading -->' . "\n\n"
		. '<!-- wp:group {"className":"yb-body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->' . "\n" . '<div class="wp-block-group yb-body sp-reveal sp-reveal--up">';
	$out .= implode( "\n\n", array_map( 'yoru_bar_p', (array) $b_keys ) );
	$out .= '</div>' . "\n" . '<!-- /wp:group -->';
	if ( $more ) {
		$out .= "\n\n" . yoru_bar_more( $more[0], $more[1], 'sp-reveal sp-reveal--up' );
	}
	return $out . '</div>' . "\n" . '<!-- /wp:group --></section>' . "\n" . '<!-- /wp:group -->';
}

/**
 * Circle photograph with an offset tan disc (lifted ground), text on the right.
 *
 * @param string   $id     Photo id.
 * @param string   $sub    Sub-head key.
 * @param string   $h      Struck word key.
 * @param string[] $b_keys Paragraph keys.
 * @param array    $more   Optional array( key, href ).
 * @return string
 */
function yoru_bar_circle( $id, $sub, $h, $b_keys, $more = null ) {
	$out = '<!-- wp:group {"tagName":"section","align":"full","className":"yb-story yb-story--inner","layout":{"type":"default"}} -->' . "\n"
		. '<section class="wp-block-group alignfull yb-story yb-story--inner"><!-- wp:group {"className":"yb-wrap yb-story__grid","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group yb-wrap yb-story__grid"><!-- wp:group {"className":"yb-story__fig sp-reveal sp-reveal--up","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group yb-story__fig sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-ph yb-ph--' . strtolower( $id ) . ' yb-story__img"} -->' . "\n"
		. '<figure class="wp-block-image size-full yb-ph yb-ph--' . strtolower( $id ) . ' yb-story__img"><img src="' . esc_url( yoru_bar_img( $id ) ) . '" alt="' . esc_attr( yoru_bar_t( 'alt_' . $id ) ) . '"/></figure>' . "\n"
		. '<!-- /wp:image --></div>' . "\n" . '<!-- /wp:group -->' . "\n\n"
		. '<!-- wp:group {"className":"yb-story__text sp-stagger","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group yb-story__text sp-stagger">' . yoru_bar_p( $sub, 'yb-sub' ) . "\n\n"
		. '<!-- wp:heading {"fontSize":"xx-large","className":"yb-struck sp-reveal sp-reveal--up"} -->' . "\n"
		. '<h2 class="wp-block-heading yb-struck sp-reveal sp-reveal--up has-xx-large-font-size">' . esc_html( yoru_bar_t( $h ) ) . '</h2>' . "\n" . '<!-- /wp:heading -->' . "\n\n"
		. '<!-- wp:group {"className":"yb-body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->' . "\n" . '<div class="wp-block-group yb-body sp-reveal sp-reveal--up">'
		. implode( "\n\n", array_map( 'yoru_bar_p', (array) $b_keys ) ) . '</div>' . "\n" . '<!-- /wp:group -->';
	if ( $more ) {
		$out .= "\n\n" . yoru_bar_more( $more[0], $more[1], 'sp-reveal sp-reveal--up' );
	}
	return $out . '</div>' . "\n" . '<!-- /wp:group --></div>' . "\n" . '<!-- /wp:group --></section>' . "\n" . '<!-- /wp:group -->';
}

/**
 * A table block (no reveal): rows of cells given as string keys. Stacks on narrow screens (CSS).
 *
 * @param array[] $rows  Rows of string keys.
 * @param string  $class Table class (yb-table--price, --rota, --facts, --hours).
 * @return string
 */
function yoru_bar_table( $rows, $class ) {
	$out = '<!-- wp:table {"className":"yb-table ' . $class . '"} -->' . "\n" . '<figure class="wp-block-table yb-table ' . esc_attr( $class ) . '"><table><tbody>';
	foreach ( $rows as $row ) {
		$out .= '<tr>';
		foreach ( $row as $key ) {
			$out .= '<td>' . esc_html( yoru_bar_t( $key ) ) . '</td>';
		}
		$out .= '</tr>';
	}
	return $out . '</tbody></table></figure>' . "\n" . '<!-- /wp:table -->';
}

/**
 * A table in a dark wide section with a tan heading.
 *
 * @param string $h_key Heading key.
 * @param string $table Table markup.
 * @param string $note  Optional note key.
 * @return string
 */
function yoru_bar_tablesect( $h_key, $table, $note = '' ) {
	return '<!-- wp:group {"align":"full","className":"yb-tablesect","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group alignfull yb-tablesect"><!-- wp:group {"className":"yb-wrap yb-tablesect__in","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group yb-wrap yb-tablesect__in">' . yoru_bar_h( $h_key, 2, 'yb-sub yb-tablesect__h' ) . "\n\n" . $table
		. ( $note ? "\n\n" . yoru_bar_p( $note, 'yb-note' ) : '' ) . '</div>' . "\n" . '<!-- /wp:group --></div>' . "\n" . '<!-- /wp:group -->';
}

/**
 * The strip of four photographs bleeding off both edges (2x2 on phones).
 *
 * @param string[] $ids Four photo ids.
 * @return string
 */
function yoru_bar_tiles( $ids ) {
	$out = '<!-- wp:group {"align":"full","className":"yb-tilesrow","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group alignfull yb-tilesrow"><!-- wp:group {"className":"yb-tiles sp-reveal sp-reveal--up","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group yb-tiles sp-reveal sp-reveal--up">';
	$parts = array();
	foreach ( $ids as $id ) {
		$parts[] = '<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-ph yb-ph--' . strtolower( $id ) . ' yb-tile"} -->' . "\n"
			. '<figure class="wp-block-image size-full yb-ph yb-ph--' . strtolower( $id ) . ' yb-tile"><img src="' . esc_url( yoru_bar_img( $id ) ) . '" alt="' . esc_attr( yoru_bar_t( 'alt_' . $id ) ) . '"/></figure>' . "\n" . '<!-- /wp:image -->';
	}
	return $out . implode( "\n\n", $parts ) . '</div>' . "\n" . '<!-- /wp:group --></div>' . "\n" . '<!-- /wp:group -->';
}

/**
 * A person: a tan role line, the name as a struck word (x-large) and one paragraph, centred.
 *
 * @param string $sub  Role key.
 * @param string $h    Name key.
 * @param string $body Paragraph key.
 * @return string
 */
function yoru_bar_person( $sub, $h, $body ) {
	return '<!-- wp:group {"align":"full","className":"yb-person","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group alignfull yb-person"><!-- wp:group {"className":"yb-person__in sp-stagger","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group yb-person__in sp-stagger">' . yoru_bar_p( $sub, 'yb-sub' ) . "\n\n"
		. '<!-- wp:heading {"fontSize":"x-large","className":"yb-struck sp-reveal sp-reveal--up"} -->' . "\n"
		. '<h2 class="wp-block-heading yb-struck sp-reveal sp-reveal--up has-x-large-font-size">' . esc_html( yoru_bar_t( $h ) ) . '</h2>' . "\n" . '<!-- /wp:heading -->' . "\n\n"
		. '<!-- wp:group {"className":"yb-body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->' . "\n" . '<div class="wp-block-group yb-body sp-reveal sp-reveal--up">' . yoru_bar_p( $body ) . '</div>' . "\n" . '<!-- /wp:group --></div>' . "\n" . '<!-- /wp:group --></div>' . "\n" . '<!-- /wp:group -->';
}

/**
 * The closing ghost-disc link to the next page.
 *
 * @param string $slug Page slug.
 * @return string
 */
function yoru_bar_next( $slug ) {
	return '<!-- wp:group {"align":"full","className":"yb-next","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group alignfull yb-next">' . yoru_bar_p( 'nx_label', 'yb-sub' ) . "\n\n" . yoru_bar_more( 'nx_' . $slug, '/' . $slug . '/' ) . '</div>' . "\n" . '<!-- /wp:group -->';
}

/**
 * The twelve-seat arc (static illustration) as an html block.
 *
 * @return string
 */
function yoru_bar_arc() {
	$seats = '';
	for ( $i = 1; $i <= 12; $i++ ) {
		$y      = (int) round( ( ( $i - 6.5 ) * ( $i - 6.5 ) ) * 0.9 );
		$seats .= '<li style="--y:' . $y . 'px"><span class="yb-seat__dot"></span><span class="yb-seat__n">' . $i . '</span></li>';
	}
	return '<!-- wp:html -->' . "\n" . '<div class="yb-arc" role="img" aria-label="' . esc_attr( yoru_bar_t( 'se_p' ) ) . '"><ul class="yb-arc__seats">' . $seats . '</ul><p class="yb-arc__labels"><span class="yb-arc__a">' . esc_html( yoru_bar_t( 'se_facing' ) ) . '</span><span class="yb-arc__b">' . esc_html( yoru_bar_t( 'se_window' ) ) . '</span></p></div>' . "\n" . '<!-- /wp:html -->';
}

/**
 * Reserve page: the seat arc and the three seating rows (anchored, linking down to the form) on near-black.
 *
 * @return string
 */
function yoru_bar_reserve_rows() {
	$out = '<!-- wp:group {"align":"full","className":"yb-resdark","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group alignfull yb-resdark">' . yoru_bar_p( 'se_p', 'yb-seats__lead' ) . "\n\n" . yoru_bar_arc() . "\n\n"
		. '<!-- wp:group {"className":"yb-rows sp-reveal sp-reveal--up","layout":{"type":"default"}} -->' . "\n" . '<div class="wp-block-group yb-rows sp-reveal sp-reveal--up">';
	$rows = array();
	foreach ( array( 1 => '1900', 2 => '2100', 3 => '2300' ) as $n => $h ) {
		$rows[] = '<!-- wp:paragraph {"className":"yb-row"} -->' . "\n" . '<p class="yb-row" id="seating-' . $h . '"><a href="#booking">' . esc_html( yoru_bar_t( 'se_row' . $n ) ) . '</a></p>' . "\n" . '<!-- /wp:paragraph -->';
	}
	return $out . implode( "\n\n", $rows ) . '</div>' . "\n" . '<!-- /wp:group -->' . "\n\n" . yoru_bar_p( 'se_note', 'yb-seats__note' ) . '</div>' . "\n" . '<!-- /wp:group -->';
}

/**
 * Reserve page: the booking request form (plain HTML, opens the visitor's mail program; no plugin, no reveal).
 *
 * @return string
 */
function yoru_bar_reserve_form() {
	$t   = 'yoru_bar_t';
	$opt = '';
	foreach ( array( '19:00', '21:00', '23:00' ) as $i => $v ) {
		$opt .= '<option value="' . $v . '">' . esc_html( $t( 'fm_s' . ( $i + 1 ) ) ) . '</option>';
	}
	$guests = '';
	for ( $i = 1; $i <= 4; $i++ ) {
		$guests .= '<option value="' . $i . '">' . $i . '</option>';
	}
	return '<!-- wp:group {"align":"full","className":"yb-formsect","layout":{"type":"default"}} -->' . "\n"
		. '<div id="booking" class="wp-block-group alignfull yb-formsect"><!-- wp:group {"className":"yb-formsect__in","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group yb-formsect__in">' . yoru_bar_p( 'rs_form_sub', 'yb-sub' ) . "\n\n"
		. '<!-- wp:heading {"fontSize":"xx-large","className":"yb-struck"} -->' . "\n" . '<h2 class="wp-block-heading yb-struck has-xx-large-font-size">' . esc_html( $t( 'rs_form_h' ) ) . '</h2>' . "\n" . '<!-- /wp:heading -->' . "\n\n"
		. '<!-- wp:html -->' . "\n"
		. '<form class="yb-form" action="mailto:reserve@yorubar.example" method="post" enctype="text/plain">'
		. '<p><label for="yb-f-name">' . esc_html( $t( 'fm_name' ) ) . '</label><input id="yb-f-name" name="name" type="text" required autocomplete="name"></p>'
		. '<p><label for="yb-f-email">' . esc_html( $t( 'fm_email' ) ) . '</label><input id="yb-f-email" name="email" type="email" required autocomplete="email"></p>'
		. '<p><label for="yb-f-date">' . esc_html( $t( 'fm_date' ) ) . '</label><input id="yb-f-date" name="date" type="date" required></p>'
		. '<p><label for="yb-f-seating">' . esc_html( $t( 'fm_seating' ) ) . '</label><select id="yb-f-seating" name="seating">' . $opt . '</select></p>'
		. '<p><label for="yb-f-guests">' . esc_html( $t( 'fm_guests' ) ) . '</label><select id="yb-f-guests" name="guests">' . $guests . '</select></p>'
		. '<p class="yb-form__wide"><label for="yb-f-note">' . esc_html( $t( 'fm_note' ) ) . '</label><textarea id="yb-f-note" name="note" rows="4"></textarea></p>'
		. '<p class="yb-form__wide yb-form__send"><button type="submit">' . esc_html( $t( 'fm_send' ) ) . '</button></p>'
		. '</form>' . "\n" . '<!-- /wp:html -->' . "\n\n"
		. yoru_bar_p( 'fm_hint', 'yb-note' ) . '</div>' . "\n" . '<!-- /wp:group --></div>' . "\n" . '<!-- /wp:group -->';
}

/**
 * The Build page: the white wash with the struck word, the sub-line and the five steps as short numbered paragraphs.
 *
 * @return string
 */
function yoru_bar_build_wash() {
	$steps = '';
	for ( $i = 1; $i <= 5; $i++ ) {
		$steps .= "\n\n" . '<!-- wp:paragraph {"className":"yb-step sp-reveal sp-reveal--up"} -->' . "\n" . '<p class="yb-step sp-reveal sp-reveal--up"><span class="yb-step__n">0' . $i . '</span> ' . esc_html( yoru_bar_t( 'tb_step' . $i ) ) . '</p>' . "\n" . '<!-- /wp:paragraph -->';
	}
	return '<!-- wp:group {"tagName":"section","align":"full","className":"yb-build yb-build--inner","layout":{"type":"default"}} -->' . "\n"
		. '<section class="wp-block-group alignfull yb-build yb-build--inner"><!-- wp:group {"className":"yb-build__top","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group yb-build__top"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-ph yb-ph--y7 yb-build__wash"} -->' . "\n"
		. '<figure class="wp-block-image size-full yb-ph yb-ph--y7 yb-build__wash"><img src="' . esc_url( yoru_bar_img( 'Y7' ) ) . '" alt="' . esc_attr( yoru_bar_t( 'alt_Y7' ) ) . '"/></figure>' . "\n" . '<!-- /wp:image -->' . "\n\n"
		. '<!-- wp:group {"className":"yb-wrap yb-build__inner","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group yb-wrap yb-build__inner"><!-- wp:group {"className":"yb-build__head sp-stagger","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group yb-build__head sp-stagger"><!-- wp:heading {"fontSize":"xx-large","className":"yb-struck yb-struck--ink sp-reveal sp-reveal--up"} -->' . "\n"
		. '<h2 class="wp-block-heading yb-struck yb-struck--ink sp-reveal sp-reveal--up has-xx-large-font-size">' . esc_html( yoru_bar_t( 'tb_wash_h' ) ) . '</h2>' . "\n" . '<!-- /wp:heading -->' . "\n\n"
		. yoru_bar_p( 'tb_wash_line', 'yb-line' ) . '</div>' . "\n" . '<!-- /wp:group -->' . "\n\n"
		. '<!-- wp:group {"className":"yb-build__text yb-build__text--steps","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group yb-build__text yb-build__text--steps">' . yoru_bar_p( 'tb_steps_lead', 'sp-reveal sp-reveal--up' ) . $steps . '</div>' . "\n" . '<!-- /wp:group --></div>' . "\n" . '<!-- /wp:group --></div>' . "\n" . '<!-- /wp:group --></section>' . "\n" . '<!-- /wp:group -->';
}

/**
 * Private Counter page: an outlined mailto link.
 *
 * @param string $key String key.
 * @return string
 */
function yoru_bar_mailto( $key ) {
	return '<!-- wp:group {"align":"full","className":"yb-next yb-next--mail","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group alignfull yb-next yb-next--mail"><!-- wp:paragraph {"className":"yb-more"} -->' . "\n"
		. '<p class="yb-more"><a href="mailto:reserve@yorubar.example">' . esc_html( yoru_bar_t( $key ) ) . '</a></p>' . "\n" . '<!-- /wp:paragraph --></div>' . "\n" . '<!-- /wp:group -->';
}
