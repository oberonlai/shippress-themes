<?php
/**
 * Madoka Childcare: building blocks for the inner pages (page head with torn banner, blob photo with white tab,
 * time and number rows, stripe text, people list, menu card, price card, FAQ, enquiry form, closing strip).
 * Every string comes from madoka_childcare_t(); the page patterns call madoka_childcare_inner( $page ).
 *
 * @package madoka-childcare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Shorthand: i18n string.
 *
 * @param string $key Key.
 * @return string
 */
function madoka_childcare_s( $key ) {
	return madoka_childcare_t( $key );
}

/**
 * Body copy as one or two paragraphs (a long paragraph is cut at the sentence nearest its middle).
 *
 * @param string $key   Key.
 * @param string $class Class for each paragraph.
 * @return string Block markup.
 */
function madoka_childcare_paras( $key, $class = '' ) {
	$text = trim( madoka_childcare_t( $key ) );
	$len  = mb_strlen( $text );
	$out  = array( $text );
	if ( $len > 420 ) {
		$parts = preg_split( '/(?<=[.!?' . "\u{3002}\u{FF01}\u{FF1F}" . '])\s*/u', $text, -1, PREG_SPLIT_NO_EMPTY );
		$a     = '';
		$i     = 0;
		foreach ( $parts as $i => $p ) {
			if ( mb_strlen( $a ) + mb_strlen( $p ) / 2 > $len / 2 && '' !== $a ) {
				break;
			}
			$a .= ( '' === $a ? '' : ' ' ) . $p;
		}
		$b = trim( implode( ' ', array_slice( $parts, $i ) ) );
		if ( '' !== $b && '' !== $a ) {
			$out = array( $a, $b );
		}
	}
	$o = array();
	foreach ( $out as $p ) {
		$o[] = madoka_childcare_para( esc_html( $p ), $class );
	}
	return implode( "\n\n", $o );
}

/**
 * Stripe heading with the wipe reveal.
 *
 * @param string $key   Key.
 * @param int    $level Level.
 * @param string $class Extra classes.
 * @return string Block markup.
 */
function madoka_childcare_h( $key, $level = 2, $class = 'mc-stripe--white' ) {
	return madoka_childcare_heading( madoka_childcare_t( $key ), $level, trim( $class . ' sp-reveal sp-reveal--wipe' ) );
}

/**
 * Stripe heading and its paragraphs.
 *
 * @param string $a     Page abbreviation (ab, cd ...).
 * @param int    $n     Section number.
 * @param string $class Heading classes.
 * @return string Block markup.
 */
function madoka_childcare_sec( $a, $n, $class = 'mc-stripe--white' ) {
	return madoka_childcare_h( "{$a}_h{$n}", 2, $class ) . "\n\n" . madoka_childcare_paras( "{$a}_b{$n}" );
}

/**
 * Page head: white tab, stripe H1 and the torn banner photograph (slow parallax).
 *
 * @param string $a     Page abbreviation.
 * @param string $photo Banner file.
 * @param string $alt   Alt key.
 * @param string $pos   object-position for the banner.
 * @return string Block markup.
 */
function madoka_childcare_phead( $a, $photo, $alt, $pos = '50% 50%' ) {
	$banner = madoka_childcare_photo( $photo, madoka_childcare_t( $alt ), 'mc-banner__img' );
	$cls    = 'mc-banner sp-parallax pos-' . preg_replace( '/[^0-9]+/', '-', trim( $pos, '% ' ) );
	return madoka_childcare_group(
		madoka_childcare_group(
			madoka_childcare_para( esc_html( madoka_childcare_t( "{$a}_tab" ) ), 'mc-tab mc-tab--small' )
			. "\n\n" . madoka_childcare_heading( madoka_childcare_t( "{$a}_title" ), 1, 'mc-stripe--white mc-stripe--page' ),
			'mc-wrap mc-phead__t'
		)
		. "\n\n" . madoka_childcare_group( $banner, $cls ),
		'mc-phead',
		'section',
		'"align":"full"'
	);
}

/**
 * Closing strip: one sentence and the "Book a visit" link on a band with a torn top.
 *
 * @return string Block markup.
 */
function madoka_childcare_close() {
	return madoka_childcare_group(
		madoka_childcare_group(
			madoka_childcare_text( 'close_p', 'mc-close__p' ) . "\n\n" . madoka_childcare_link( madoka_childcare_t( 'close_cta' ), '/visit/' ),
			'mc-wrap'
		),
		'mc-close mc-band mc-torn-top',
		'section',
		'"align":"full"'
	);
}

/**
 * Plain ground section.
 *
 * @param string $inner Inner markup.
 * @param string $class Extra classes.
 * @return string Block markup.
 */
function madoka_childcare_ground( $inner, $class = '' ) {
	return madoka_childcare_group( madoka_childcare_group( $inner, 'mc-wrap' ), trim( 'mc-in ' . $class ), 'section', '"align":"full"' );
}

/**
 * Band section with torn edges.
 *
 * @param string $inner Inner markup.
 * @param string $class Extra classes.
 * @param bool   $both  Torn bottom edge as well.
 * @return string Block markup.
 */
function madoka_childcare_band( $inner, $class = '', $both = true ) {
	return madoka_childcare_group( madoka_childcare_group( $inner, 'mc-wrap' ), trim( 'mc-in mc-band mc-torn-top' . ( $both ? ' mc-torn-bottom' : '' ) . ' ' . $class ), 'section', '"align":"full"' );
}

/**
 * Egg or pebble photograph with its white tab, laid across the torn top edge of the band it sits in.
 *
 * @param string $shape 'egg' or 'pebble'.
 * @param string $photo File.
 * @param string $alt   Alt key.
 * @param string $tab   Tab text key.
 * @return string Block markup.
 */
function madoka_childcare_blobtop( $shape, $photo, $alt, $tab ) {
	return madoka_childcare_group(
		madoka_childcare_photo( $photo, madoka_childcare_t( $alt ), 'mc-' . $shape . ' sp-reveal sp-reveal--zoom mc-pop' )
		. "\n\n" . madoka_childcare_para( esc_html( madoka_childcare_t( $tab ) ), 'mc-tab' ),
		'mc-day__top'
	);
}

/**
 * Time or number blob (overlaps the photograph's top-left corner when placed above it).
 *
 * @param string $label Text.
 * @param string $class Extra classes.
 * @return string Block markup.
 */
function madoka_childcare_blob( $label, $class = '' ) {
	return madoka_childcare_para( esc_html( $label ), trim( 'mc-time sp-reveal sp-reveal--zoom mc-pop ' . $class ) );
}

/**
 * Zig-zag row: photograph (with a blob above it) and text, or a text-only row.
 *
 * @param string $blob   Blob markup.
 * @param string $photo  Photograph markup ('' for a text-only row).
 * @param string $text   Text markup.
 * @param bool   $flip   Mirror the row.
 * @return string Block markup.
 */
function madoka_childcare_row( $blob, $photo, $text, $flip = false ) {
	if ( '' === $photo ) {
		return madoka_childcare_group( madoka_childcare_group( $blob . "\n\n" . $text, 'mc-row__t' ), 'mc-row mc-row--text' );
	}
	return madoka_childcare_group( madoka_childcare_group( $blob . "\n\n" . $photo, 'mc-row__ph' ) . "\n\n" . madoka_childcare_group( $text, 'mc-row__t' ), 'mc-row' . ( $flip ? ' mc-row--flip' : '' ) );
}

/**
 * Bulleted list block.
 *
 * @param array  $items Escaped item HTML.
 * @param string $class Class.
 * @return string Block markup.
 */
function madoka_childcare_list( $items, $class ) {
	return '<!-- wp:list ' . wp_json_encode( array( 'className' => $class ) ) . ' -->' . "\n" . '<ul class="wp-block-list ' . esc_attr( $class ) . '"><li>' . implode( '</li><li>', $items ) . '</li></ul>' . "\n" . '<!-- /wp:list -->';
}

/**
 * Price card (the same six rows as the home page): full width from 782px, price column never cut.
 *
 * @return string Block markup.
 */
function madoka_childcare_price_card() {
	$li = '';
	for ( $i = 1; $i <= 6; $i++ ) {
		$li .= '<li><span class="mc-prices__n"><strong>' . esc_html( madoka_childcare_t( "pr{$i}_n" ) ) . '</strong><small>' . esc_html( madoka_childcare_t( "pr{$i}_x" ) ) . '</small></span><span class="mc-prices__p">' . esc_html( madoka_childcare_t( "pr{$i}_p" ) ) . '</span></li>';
	}
	return madoka_childcare_group(
		madoka_childcare_heading( madoka_childcare_t( 'fe_card_h' ), 3, 'mc-card__h' )
		. "\n\n" . '<!-- wp:list {"className":"mc-prices"} -->' . "\n" . '<ul class="wp-block-list mc-prices">' . $li . '</ul>' . "\n" . '<!-- /wp:list -->'
		. "\n\n" . madoka_childcare_text( 'fees_foot', 'mc-card__foot' ),
		'mc-card mc-fees__card mc-torn-top mc-torn-bottom'
	);
}

/**
 * Two-column text pair.
 *
 * @param string $a Left markup.
 * @param string $b Right markup.
 * @return string Block markup.
 */
function madoka_childcare_cols( $a, $b ) {
	return madoka_childcare_group( madoka_childcare_group( $a, 'mc-col' ) . "\n\n" . madoka_childcare_group( $b, 'mc-col' ), 'mc-cols' );
}

/**
 * Lead paragraph under a page head.
 *
 * @param string $a Page abbreviation.
 * @return string Block markup.
 */
function madoka_childcare_intro( $a ) {
	return madoka_childcare_ground( madoka_childcare_text( "{$a}_intro", 'mc-lead mc-intro' ), 'mc-in--intro' );
}

/**
 * One inner page.
 *
 * @param string $page Page slug (about, the-care-day ...).
 * @return string Block markup.
 */
function madoka_childcare_inner( $page ) {
	$t = 'madoka_childcare_t';
	$p = 'madoka_childcare_photo';
	$o = array();
	switch ( $page ) {
		case 'about':
			$o[] = madoka_childcare_phead( 'ab', 'p04.webp', 'alt_p04' );
			$o[] = madoka_childcare_intro( 'ab' );
			$o[] = madoka_childcare_ground( madoka_childcare_paras( 'ab_b1' ), 'mc-in--text' );
			$o[] = madoka_childcare_ground(
				madoka_childcare_row( '', $p( 'p07.webp', $t( 'alt_p07' ), 'mc-row__img' ), madoka_childcare_sec( 'ab', 2 ) ),
				'mc-in--row mc-in--pb'
			);
			$o[] = madoka_childcare_band(
				madoka_childcare_blobtop( 'egg', 'p15.webp', 'alt_p15', 'ab_blobtab' )
				. "\n\n" . madoka_childcare_cols( madoka_childcare_sec( 'ab', 3, '' ), madoka_childcare_sec( 'ab', 4, '' ) ),
				'mc-day mc-day--in'
			);
			break;

		case 'the-care-day':
			$o[] = madoka_childcare_phead( 'cd', 'p13.webp', 'alt_p13', '50% 60%' );
			$o[] = madoka_childcare_ground( madoka_childcare_text( 'cd_intro', 'mc-lead mc-intro' ), 'mc-in--intro mc-in--pb' );
			// Rows: time key, photo, alt, paragraph source.
			$rows = array(
				array( 1, 'p06.webp', 'alt_p06', 'row1_p1', 'row1_p2' ),
				array( 2, '', '', 'cdr_tm2', '' ),
				array( 3, 'p02.webp', 'alt_p02', 'row2_p1', 'row2_p2' ),
				array( 4, 'p08.webp', 'alt_p08', 'cdr_tm4', '' ),
				array( 5, 'p16.webp', 'alt_p16', 'cdr_tm5', '' ),
				array( 6, '', '', 'cdr_tm6', '' ),
				array( 7, 'p11.webp', 'alt_p11', 'cdr_tm7', '' ),
				array( 8, 'p09.webp', 'alt_p09', 'row3_p1', 'row3_p2' ),
				array( 9, '', '', 'cdr_tm9', '' ),
			);
			$list = '';
			$k    = 0;
			foreach ( $rows as $r ) {
				list( $n, $file, $alt, $p1, $p2 ) = $r;
				$txt = madoka_childcare_heading( $t( "tm{$n}_x" ), 3, 'mc-stripe--band' ) . "\n\n" . madoka_childcare_text( $p1 ) . ( '' === $p2 ? '' : "\n\n" . madoka_childcare_text( $p2 ) );
				$ph  = '' === $file ? '' : $p( $file, $t( $alt ), 'mc-row__img' );
				$list .= madoka_childcare_row( madoka_childcare_blob( $t( "tm{$n}_t" ) ), $ph, $txt, '' !== $file && 0 === ( $k++ % 2 ) ? false : ( '' !== $file ) ) . "\n\n";
			}
			$o[] = madoka_childcare_band(
				madoka_childcare_blobtop( 'egg', 'p05.webp', 'alt_p05', 'cd_blobtab' )
				. "\n\n" . madoka_childcare_text( 'cd_b1', 'mc-day__intro' )
				. "\n\n" . $list,
				'mc-day mc-day--in mc-day--rows',
				true
			);
			$o[] = madoka_childcare_ground(
				madoka_childcare_group( madoka_childcare_group( madoka_childcare_sec( 'cd', 2 ), 'mc-col' ) . "\n\n" . madoka_childcare_group( madoka_childcare_sec( 'cd', 3 ), 'mc-col' ) . "\n\n" . madoka_childcare_group( madoka_childcare_sec( 'cd', 4 ), 'mc-col' ), 'mc-cols mc-cols--3' )
				. "\n\n" . madoka_childcare_group( madoka_childcare_sec( 'cd', 5 ), 'mc-narrow' ),
				'mc-in--text'
			);
			$li = '';
			for ( $i = 1; $i <= 9; $i++ ) {
				$li .= '<li><span class="mc-tl__t">' . esc_html( $t( "tm{$i}_t" ) ) . '</span><span class="mc-tl__x">' . esc_html( $t( "tm{$i}_x" ) ) . '</span></li>';
			}
			$o[] = madoka_childcare_ground(
				madoka_childcare_group(
					madoka_childcare_heading( $t( 'whole_h' ), 3, 'mc-card__h' )
					. "\n\n" . madoka_childcare_paras( 'cd_b6' )
					. "\n\n" . '<!-- wp:list {"className":"mc-tl"} -->' . "\n" . '<ul class="wp-block-list mc-tl">' . $li . '</ul>' . "\n" . '<!-- /wp:list -->'
					. "\n\n" . madoka_childcare_text( 'whole_foot', 'mc-card__foot' ),
					'mc-card mc-torn-top mc-torn-bottom'
				),
				'mc-in--card'
			);
			break;

		case 'rooms':
			$o[] = madoka_childcare_phead( 'rm', 'p18.webp', 'alt_p18', '50% 35%' );
			$o[] = madoka_childcare_intro( 'rm' );
			$o[] = madoka_childcare_ground( madoka_childcare_paras( 'rm_b1' ), 'mc-in--text' );
			$rooms = array(
				1 => array( 'p10.webp', 'alt_p10', 'egg' ),
				2 => array( 'p11.webp', 'alt_p11', 'img' ),
				3 => array( 'p12.webp', 'alt_p12', 'img' ),
			);
			foreach ( $rooms as $n => $r ) {
				$facts = array();
				foreach ( array( 'ages', 'ratio', 'places', 'key', 'rest' ) as $f ) {
					$facts[] = '<strong>' . esc_html( $t( 'rm_l_' . $f ) ) . '</strong> ' . esc_html( $t( "rm{$n}_{$f}" ) );
				}
				$txt  = madoka_childcare_h( 'rm_h' . ( $n + 1 ), 2, ( 1 === $n % 2 ? 'mc-stripe--band' : 'mc-stripe--white' ) )
					. "\n\n" . madoka_childcare_list( $facts, 'mc-facts' )
					. "\n\n" . madoka_childcare_paras( 'rm_b' . ( $n + 1 ) );
				$num  = madoka_childcare_blob( sprintf( '%02d', $n ), 'mc-time--num' );
				if ( 'egg' === $r[2] ) {
					$ph = madoka_childcare_photo( $r[0], $t( $r[1] ), 'mc-egg mc-egg--room' ) . "\n\n" . madoka_childcare_para( esc_html( $t( 'rm_nesttab' ) ), 'mc-tab mc-tab--room' );
				} else {
					$ph = madoka_childcare_photo( $r[0], $t( $r[1] ), 'mc-row__img' ) . "\n\n" . madoka_childcare_para( esc_html( $t( "room{$n}_n" ) ), 'mc-tab mc-tab--room' );
				}
				$row = madoka_childcare_row( $num, $ph, $txt, 0 === $n % 2 );
				$o[] = 1 === $n % 2 ? madoka_childcare_band( $row, 'mc-in--room', true ) : madoka_childcare_ground( $row, 'mc-in--room mc-in--pb' );
			}
			break;

		case 'educators':
			$o[] = madoka_childcare_phead( 'ed', 'p15.webp', 'alt_p15', '50% 45%' );
			$o[] = madoka_childcare_intro( 'ed' );
			$o[] = madoka_childcare_band(
				madoka_childcare_blobtop( 'pebble', 'p05.webp', 'alt_p05', 'ed_blobtab' )
				. "\n\n" . madoka_childcare_group( madoka_childcare_sec( 'ed', 1, '' ), 'mc-narrow mc-narrow--left' ),
				'mc-day mc-day--in',
				false
			);
			$people = '';
			for ( $i = 1; $i <= 8; $i++ ) {
				$people .= madoka_childcare_group(
					madoka_childcare_heading( $t( "ppl{$i}_n" ), 3, 'mc-stripe--white' )
					. "\n\n" . madoka_childcare_para( esc_html( $t( "ppl{$i}_r" ) ), 'mc-person__r' )
					. "\n\n" . madoka_childcare_para( esc_html( $t( 'ed_l_since' ) . ' ' . $t( "ppl{$i}_s" ) . ' · ' . $t( 'ed_l_lang' ) . ': ' . $t( "ppl{$i}_l" ) ), 'mc-meta' )
					. "\n\n" . madoka_childcare_text( "ppl{$i}_x" ),
					'mc-person'
				);
			}
			$o[] = madoka_childcare_ground(
				madoka_childcare_h( 'ed_people_h', 2, 'mc-stripe--white' ) . "\n\n" . madoka_childcare_group( $people, 'mc-people' ),
				'mc-in--text'
			);
			$o[] = madoka_childcare_band( madoka_childcare_cols( madoka_childcare_sec( 'ed', 2, '' ), madoka_childcare_sec( 'ed', 3, '' ) ), 'mc-in--cols' );
			break;

		case 'food':
			$o[] = madoka_childcare_phead( 'fd', 'p08.webp', 'alt_p08', '50% 55%' );
			$o[] = madoka_childcare_intro( 'fd' );
			$o[] = madoka_childcare_ground( madoka_childcare_paras( 'fd_b1' ), 'mc-in--text mc-in--pb' );
			$menu = '';
			for ( $i = 1; $i <= 5; $i++ ) {
				$menu .= '<li><strong class="mc-menu__d">' . esc_html( $t( "mn{$i}_d" ) ) . '</strong><span class="mc-menu__l"><small>' . esc_html( $t( 'fd_l_lunch' ) ) . '</small>' . esc_html( $t( "mn{$i}_l" ) ) . '</span><span class="mc-menu__s"><small>' . esc_html( $t( 'fd_l_snack' ) ) . '</small>' . esc_html( $t( "mn{$i}_s" ) ) . '</span></li>';
			}
			$card = madoka_childcare_heading( $t( 'fd_menu_h' ), 3, 'mc-card__h' )
				. "\n\n" . '<!-- wp:list {"className":"mc-menu"} -->' . "\n" . '<ul class="wp-block-list mc-menu">' . $menu . '</ul>' . "\n" . '<!-- /wp:list -->'
				. "\n\n" . madoka_childcare_text( 'fd_menu_foot', 'mc-card__foot' );
			$o[] = madoka_childcare_band(
				madoka_childcare_blobtop( 'egg', 'p14.webp', 'alt_p14', 'fd_blobtab' )
				. "\n\n" . madoka_childcare_group( $card, 'mc-card mc-torn-top mc-torn-bottom' ),
				'mc-day mc-day--in',
				false
			);
			$o[] = madoka_childcare_ground( madoka_childcare_sec( 'fd', 2 ) . "\n\n" . madoka_childcare_sec( 'fd', 3 ), 'mc-in--text' );
			break;

		case 'fees':
			$o[] = madoka_childcare_phead( 'fe', 'p03.webp', 'alt_p03', '50% 40%' );
			$o[] = madoka_childcare_intro( 'fe' );
			$o[] = madoka_childcare_ground( madoka_childcare_group( madoka_childcare_sec( 'fe', 1 ), 'mc-narrow mc-narrow--left' ) . "\n\n" . madoka_childcare_price_card(), 'mc-in--text mc-fees' );
			$o[] = madoka_childcare_band(
				madoka_childcare_blobtop( 'pebble', 'p17.webp', 'alt_p17', 'fe_blobtab' )
				. "\n\n" . madoka_childcare_cols( madoka_childcare_sec( 'fe', 2, '' ), madoka_childcare_sec( 'fe', 3, '' ) )
				. "\n\n" . madoka_childcare_group( madoka_childcare_sec( 'fe', 4, '' ), 'mc-narrow mc-narrow--left' ),
				'mc-day mc-day--in',
				false
			);
			break;

		case 'enrolment':
			$o[] = madoka_childcare_phead( 'en', 'p17.webp', 'alt_p17', '50% 55%' );
			$o[] = madoka_childcare_intro( 'en' );
			$o[] = madoka_childcare_ground( madoka_childcare_sec( 'en', 1 ), 'mc-in--text mc-in--pb' );
			$steps = array(
				1 => array( 'p03.webp', 'alt_p03' ),
				2 => array( 'p05.webp', 'alt_p05' ),
				3 => array( 'p02.webp', 'alt_p02' ),
				4 => null,
				5 => null,
			);
			$rows = '';
			foreach ( $steps as $n => $r ) {
				$txt = madoka_childcare_heading( $t( "st{$n}_h" ), 3, 'mc-stripe--band' ) . "\n\n" . madoka_childcare_text( "st{$n}_p" );
				$blob = madoka_childcare_blob( sprintf( '%02d', $n ), 'mc-time--num' );
				if ( null === $r ) {
					$rows .= madoka_childcare_row( $blob, '', $txt ) . "\n\n";
				} elseif ( 3 === $n ) {
					$ph    = madoka_childcare_photo( $r[0], $t( $r[1] ), 'mc-egg mc-egg--room' ) . "\n\n" . madoka_childcare_para( esc_html( $t( 'en_blobtab' ) ), 'mc-tab mc-tab--room' );
					$rows .= madoka_childcare_row( $blob, $ph, $txt, true ) . "\n\n";
				} else {
					$rows .= madoka_childcare_row( $blob, madoka_childcare_photo( $r[0], $t( $r[1] ), 'mc-row__img' ), $txt, 0 === $n % 2 ) . "\n\n";
				}
			}
			$o[] = madoka_childcare_band( $rows, 'mc-in--steps mc-in--room' );
			$bring = array();
			for ( $i = 1; $i <= 5; $i++ ) {
				$bring[] = esc_html( $t( "bring{$i}" ) );
			}
			$o[] = madoka_childcare_ground(
				madoka_childcare_cols( madoka_childcare_sec( 'en', 2 ) . "\n\n" . madoka_childcare_sec( 'en', 3 ), madoka_childcare_sec( 'en', 4 ) . "\n\n" . madoka_childcare_list( $bring, 'mc-facts mc-facts--bring' ) ),
				'mc-in--text'
			);
			break;

		case 'stories':
			$o[] = madoka_childcare_phead( 'st', 'p13.webp', 'alt_p13', '70% 55%' );
			$o[] = madoka_childcare_intro( 'st' );
			$sto = array(
				1 => array( 'p06.webp', 'alt_p06', 'egg' ),
				2 => array( 'p07.webp', 'alt_p07', 'pebble' ),
				3 => array( 'p09.webp', 'alt_p09', 'egg' ),
			);
			foreach ( $sto as $n => $r ) {
				$ph  = madoka_childcare_photo( $r[0], $t( $r[1] ), 'mc-' . $r[2] . ' mc-' . $r[2] . '--room' ) . "\n\n" . madoka_childcare_para( esc_html( $t( "sto{$n}_n" ) ), 'mc-tab mc-tab--room' );
				$txt = madoka_childcare_h( "sto{$n}_t", 2, 'mc-stripe--' . ( 1 === $n % 2 ? 'band' : 'white' ) ) . "\n\n" . madoka_childcare_paras( 'st_b' . $n );
				$row = madoka_childcare_group( madoka_childcare_group( $ph, 'mc-row__ph' ) . "\n\n" . madoka_childcare_group( $txt, 'mc-row__t' ), 'mc-row mc-row--sto' . ( 0 === $n % 2 ? ' mc-row--flip' : '' ) );
				$o[] = 1 === $n % 2 ? madoka_childcare_band( $row, 'mc-in--room' ) : madoka_childcare_ground( $row, 'mc-in--room mc-in--pb' );
			}
			$o[] = madoka_childcare_ground( madoka_childcare_group( madoka_childcare_sec( 'st', 4 ), 'mc-narrow mc-narrow--left' ), 'mc-in--text' );
			break;

		case 'faq':
			$o[] = madoka_childcare_phead( 'fq', 'p18.webp', 'alt_p18', '50% 30%' );
			$o[] = madoka_childcare_intro( 'fq' );
			$qa = '';
			for ( $i = 1; $i <= 9; $i++ ) {
				$qa .= '<!-- wp:details -->' . "\n" . '<details class="wp-block-details"><summary>' . esc_html( $t( "fq_h{$i}" ) ) . '</summary>' . "\n" . madoka_childcare_text( "fq_b{$i}" ) . '</details>' . "\n" . '<!-- /wp:details -->' . "\n\n";
			}
			$o[] = madoka_childcare_ground( madoka_childcare_group( $qa, 'mc-card mc-faq mc-torn-top mc-torn-bottom' ), 'mc-in--card' );
			break;

		case 'visit':
			$o[] = madoka_childcare_phead( 'vi', 'p01.webp', 'alt_p01', '35% 50%' );
			$o[] = madoka_childcare_intro( 'vi' );
			$get = array();
			for ( $i = 1; $i <= 4; $i++ ) {
				$get[] = esc_html( $t( "vi_get{$i}" ) );
			}
			$visits = array();
			for ( $i = 1; $i <= 4; $i++ ) {
				$visits[] = esc_html( $t( "vi_v{$i}" ) );
			}
			$left  = madoka_childcare_sec( 'vi', 1, '' ) . "\n\n" . madoka_childcare_list( $visits, 'mc-facts mc-facts--visits' )
				. "\n\n" . madoka_childcare_sec( 'vi', 2, '' ) . "\n\n" . madoka_childcare_para( '<strong>' . esc_html( $t( 'vi_addr_h' ) ) . '</strong><br>' . wp_kses( $t( 'visit_card' ), array( 'br' => array() ) ), 'mc-visit__card mc-visit__card--in' )
				. "\n\n" . madoka_childcare_h( 'vi_get_h', 3, 'mc-stripe--white' ) . "\n\n" . madoka_childcare_list( $get, 'mc-facts' );
			$f = static function ( $id, $label, $type = 'text' ) {
				return '<p class="mc-field"><label for="mc-' . $id . '">' . esc_html( madoka_childcare_t( $label ) ) . '</label>' . ( 'area' === $type ? '<textarea id="mc-' . $id . '" name="' . $id . '" rows="4"></textarea>' : '<input id="mc-' . $id . '" name="' . $id . '" type="text">' ) . '</p>';
			};
			$sel  = '<p class="mc-field"><label for="mc-visit">' . esc_html( $t( 'vi_f_visit' ) ) . '</label><select id="mc-visit" name="visit">';
			for ( $i = 1; $i <= 4; $i++ ) {
				$sel .= '<option>' . esc_html( $t( "vi_v{$i}" ) ) . '</option>';
			}
			$sel  .= '</select></p>';
			$form  = '<form class="mc-form" action="#" method="post">' . $f( 'name', 'vi_f_name' ) . $f( 'child', 'vi_f_child' ) . $f( 'days', 'vi_f_days' ) . $sel . $f( 'msg', 'vi_f_msg', 'area' ) . '<p><button type="submit" class="mc-form__go">' . esc_html( $t( 'vi_f_send' ) ) . '</button></p></form>';
			$right = madoka_childcare_h( 'vi_form_h', 2, 'mc-stripe--white' ) . "\n\n" . '<!-- wp:html -->' . "\n" . $form . "\n" . '<!-- /wp:html -->' . "\n\n" . madoka_childcare_text( 'vi_f_note', 'mc-meta' );
			$o[]   = madoka_childcare_band(
				madoka_childcare_blobtop( 'pebble', 'p12.webp', 'alt_p12', 'vi_blobtab' )
				. "\n\n" . madoka_childcare_group( madoka_childcare_group( $left, 'mc-visit__l2' ) . "\n\n" . madoka_childcare_group( $right, 'mc-visit__r2 mc-card' ), 'mc-visit__grid2' ),
				'mc-day mc-day--in',
				false
			);
			break;

		case 'notes':
			$o[] = madoka_childcare_phead( 'nt', 'p12.webp', 'alt_p12', '50% 45%' );
			$o[] = madoka_childcare_intro( 'nt' );
			break;
	}
	if ( 'notes' !== $page ) {
		$o[] = madoka_childcare_close();
	}
	return implode( "\n\n", $o );
}
