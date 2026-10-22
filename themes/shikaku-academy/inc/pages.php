<?php
/**
 * Shikaku Academy: markup builders for the inner pages (page head, ladder cards, fan, tables, FAQ). Patterns call them.
 *
 * @package shikaku-academy
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Page key from a slug: how-it-works -> how_it_works. */
function sa_k( $slug ) {
	return str_replace( '-', '_', $slug );
}

/**
 * Paragraphs from one long copy string: sentences grouped into blocks of about 55 words; "\n\n" starts a new block.
 *
 * @param string $key   i18n key.
 * @param string $class Paragraph class.
 * @return string Block markup.
 */
function sa_chunks( $text ) {
	$out = array();
	foreach ( preg_split( '/\n\s*\n/', $text ) as $block ) {
		$cur   = '';
		$words = 0;
		foreach ( preg_split( '/(?<=[.!?])\s+/', trim( $block ) ) as $s ) {
			$cur   .= ( '' === $cur ? '' : ' ' ) . $s;
			$words += str_word_count( $s );
			if ( $words >= 55 ) {
				$out[] = $cur;
				$cur   = '';
				$words = 0;
			}
		}
		if ( '' !== $cur ) {
			$out[] = $cur;
		}
	}
	return $out;
}

function sa_prose( $key, $class = 'sa-body' ) {
	$out = '';
	foreach ( sa_chunks( sa_t( $key ) ) as $c ) {
		$out .= sa_p( $class, esc_html( $c ) );
	}
	return $out;
}

/**
 * T1 page head: bracket label, one or two paper strips, intro, and a photo standing on the head's bottom edge.
 *
 * @param string $slug    Page slug.
 * @param string $photo   File in assets/images (empty for none).
 * @param string $alt_key i18n key of the alt text.
 * @param array  $btns    Optional buttons.
 */
function sa_head( $slug, $photo = '', $alt_key = '', array $btns = array() ) {
	$k      = sa_k( $slug );
	$strips = '';
	foreach ( array( 1, 2 ) as $i ) {
		$t = sa_t( "hd_{$k}_s$i" );
		if ( '' !== $t ) {
			$strips .= '<span class="sa-strip">' . esc_html( $t ) . '</span>';
		}
	}
	$h1   = "<!-- wp:heading " . sa_json( array( 'level' => 1, 'className' => 'sa-strips sa-strips--page' ) ) . " -->\n<h1 class=\"wp-block-heading sa-strips sa-strips--page\">$strips</h1>\n<!-- /wp:heading -->\n\n";
	$text = sa_p( 'sa-bracket', '[ ' . esc_html( sa_t( "{$k}_title" ) ) . ' ]' ) . $h1 . sa_p( 'sa-lead', esc_html( sa_t( "{$k}_intro" ) ) ) . ( $btns ? sa_btns( 'sa-head__btns', $btns ) : '' );
	$pic  = $photo ? sa_g( 'sa-head__photo', sa_img( $photo, $alt_key, 'sa-ph' ) ) : '';
	return sa_g( 'sa-head' . ( $photo ? '' : ' sa-head--plain' ), sa_g( 'sa-wrap sa-head__grid', sa_g( 'sa-head__text', $text ) . $pic ), 'section', 'full' );
}

/** A copy section: strip title on the left, prose on the right. */
function sa_block( $page, $n, $level = 2 ) {
	$k = sa_k( $page );
	return sa_g( 'sa-sec sa-block', sa_g( 'sa-wrap sa-block__grid', sa_title( "{$k}_h$n", '', $level ) . sa_g( 'sa-block__prose sp-reveal sp-reveal--up', sa_prose( "{$k}_b$n" ) ) ), 'section' );
}

/** Number tab (T2) on a bordered panel. */
function sa_tab( $n ) {
	return sa_p( 'sa-card__tab', esc_html( $n ) );
}

/** Course ladder card (T2). */
function sa_course_card( $i, $track, $photo, $href ) {
	return sa_g( 'sa-card sp-reveal sp-reveal--up',
		sa_tab( '0' . $i )
		. sa_g( 'sa-card__band', sa_p( 'sa-tag', esc_html( sa_t( 'pm' === $track ? 'cl_tag_pm' : 'cl_tag_it' ) ) ) . sa_h( 3, 'sa-card__title', esc_html( sa_t( "c$i" ) ) ) . sa_p( 'sa-card__meta', esc_html( sa_t( "cl_m$i" ) ) ) )
		. sa_img( $photo, 'alt_' . substr( $photo, 0, 3 ), 'sa-card__photo sa-ph' )
		. sa_p( 'sa-card__desc', esc_html( sa_t( "cl_d$i" ) ) )
		. sa_p( 'sa-card__foot', '<span class="sa-price">' . esc_html( sa_t( "cl_p$i" ) ) . '</span><a href="' . esc_attr( $href ) . '">' . esc_html( sa_t( 1 === $i ? 'cl_view' : 'cl_view_plans' ) ) . '</a>' )
	);
}

/** T3 fan of three rotated photo cards. $photos: list of array( file, alt key ). */
function sa_fan( array $photos ) {
	$h = '';
	foreach ( $photos as $n => $p ) {
		$h .= sa_g( 'sa-fan__card sa-fan__card--' . ( $n + 1 ), sa_img( $p[0], $p[1], 'sa-ph' ) );
	}
	return sa_g( 'sa-fan', $h );
}

/** Course data shared by the price list and the cards: lessons, hours, track. */
function sa_courses() {
	return array(
		1 => array( 24, 18, 'pm' ),
		2 => array( 20, 15, 'pm' ),
		3 => array( 32, 26, 'pm' ),
		4 => array( 22, 16, 'it' ),
		5 => array( 26, 20, 'it' ),
		6 => array( 28, 22, 'it' ),
	);
}

/** The single / bundle / all-access comparison table (also used on the home page). */
function sa_plans_table() {
	$th    = function ( $n, $pr, $rec = false ) {
		return '<th scope="col"' . ( $rec ? ' class="is-rec"' : '' ) . '><div class="sa-th"><span class="sa-th__n">' . esc_html( sa_t( $n ) ) . '</span><span class="sa-price">' . esc_html( sa_t( $pr ) ) . '</span></div>' . ( $rec ? '<span class="sa-th__rec">' . esc_html( sa_t( 'pn_rec' ) ) . '</span>' : '' ) . '</th>';
	};
	$names = array( sa_t( 'pn_n1' ), sa_t( 'pn_n2' ), sa_t( 'pn_n3' ) );
	$row   = function ( $label, array $cells ) use ( $names ) {
		$h = '<tr><th scope="row">' . esc_html( $label ) . '</th>';
		foreach ( $cells as $i => $c ) {
			$h .= '<td data-label="' . esc_attr( $names[ $i ] ) . '"' . ( 1 === $i ? ' class="is-rec"' : '' ) . '>' . esc_html( $c ) . '</td>';
		}
		return $h . '</tr>';
	};
	$yes   = sa_t( 'pn_yes' );
	$no    = sa_t( 'pn_no' );
	$body  = $row( sa_t( 'pn_r1' ), array( sa_t( 'pn_r1a' ), sa_t( 'pn_r1b' ), sa_t( 'pn_r1c' ) ) )
		. $row( sa_t( 'pn_r2' ), array( sa_t( 'pn_r2a' ), sa_t( 'pn_r2b' ), sa_t( 'pn_r2c' ) ) )
		. $row( sa_t( 'pn_r3' ), array( sa_t( 'pn_r3a' ), sa_t( 'pn_r3b' ), sa_t( 'pn_r3c' ) ) )
		. $row( sa_t( 'pn_r4' ), array( sa_t( 'pn_r4a' ), sa_t( 'pn_r4b' ), sa_t( 'pn_r4c' ) ) )
		. $row( sa_t( 'pn_r5' ), array( $yes, $yes, $yes ) )
		. $row( sa_t( 'pn_r6' ), array( $yes, $yes, $yes ) )
		. $row( sa_t( 'pn_r7' ), array( $no, $yes, $yes ) )
		. $row( sa_t( 'pn_r8' ), array( $yes, $yes, $yes ) );
	return sa_html( '<div class="sa-plans__wrap"><table class="sa-plans"><thead><tr><th scope="col" class="sa-plans__first">' . esc_html( sa_t( 'pn_feat' ) ) . '</th>'
		. $th( 'pn_n1', 'pn_pr1' ) . $th( 'pn_n2', 'pn_pr2', true ) . $th( 'pn_n3', 'pn_pr3' ) . '</tr></thead><tbody>' . $body . '</tbody></table></div>' );
}

/** The six-course price list (full width, stacks into cards below 782px). */
function sa_price_list() {
	$rows = '';
	foreach ( sa_courses() as $i => $c ) {
		$rows .= '<tr><td data-label="' . esc_attr( sa_t( 'lc_no' ) ) . '">0' . $i . '</td><th scope="row">' . esc_html( sa_t( "c$i" ) ) . '</th>'
			. '<td data-label="' . esc_attr( sa_t( 'lc_track' ) ) . '">' . esc_html( sa_t( 'pm' === $c[2] ? 'cl_tag_pm' : 'cl_tag_it' ) ) . '</td>'
			. '<td data-label="' . esc_attr( sa_t( 'lc_lessons' ) ) . '">' . $c[0] . '</td><td data-label="' . esc_attr( sa_t( 'lc_hours' ) ) . '">' . $c[1] . ' h</td>'
			. '<td class="sa-price" data-label="' . esc_attr( sa_t( 'lc_price' ) ) . '">' . esc_html( sa_t( "cl_p$i" ) ) . '</td></tr>';
	}
	return sa_html( '<div class="sa-plans__wrap"><table class="sa-plans sa-list"><thead><tr><th scope="col" class="sa-list__no">' . esc_html( sa_t( 'lc_no' ) ) . '</th><th scope="col">' . esc_html( sa_t( 'lc_course' ) ) . '</th><th scope="col">' . esc_html( sa_t( 'lc_track' ) ) . '</th><th scope="col">' . esc_html( sa_t( 'lc_lessons' ) ) . '</th><th scope="col">' . esc_html( sa_t( 'lc_hours' ) ) . '</th><th scope="col" class="sa-list__price">' . esc_html( sa_t( 'lc_price' ) ) . '</th></tr></thead><tbody>' . $rows . '</tbody></table></div>' );
}

/** Accordion item (details/summary, so it works without scripts). */
function sa_acc( $summary, $body_html, $open = false ) {
	return sa_html( '<details class="sa-acc"' . ( $open ? ' open' : '' ) . '><summary>' . $summary . '</summary><div class="sa-acc__body">' . $body_html . '</div></details>' );
}

/* ---------------------------------------------------------------- pages */

function sa_page_courses() {
	$defs  = array( array( 1, 'pm', 'p03.webp' ), array( 2, 'pm', 'p04.webp' ), array( 3, 'pm', 'p13.webp' ), array( 4, 'it', 'p05.webp' ), array( 5, 'it', 'p11.webp' ), array( 6, 'it', 'p16.webp' ) );
	$cards = array( 'pm' => '', 'it' => '' );
	foreach ( $defs as $d ) {
		$cards[ $d[1] ] .= sa_course_card( $d[0], $d[1], $d[2], 1 === $d[0] ? '/project-delivery-foundations/' : '/plans/' );
	}
	$pills = sa_p( 'sa-pills', '<span class="sa-pills__l">' . esc_html( sa_t( 'co_filter' ) ) . '</span><a class="is-on" href="#courses-pm">' . esc_html( sa_t( 'cl_tag_pm' ) ) . '</a><a href="#courses-it">' . esc_html( sa_t( 'cl_tag_it' ) ) . '</a>' );
	$sec   = function ( $id, $n, $track ) use ( $cards ) {
		return sa_g( 'sa-sec sa-courses', sa_g( 'sa-wrap', sa_bracket( 'cl_label' ) . sa_title( "courses_h$n" ) . sa_g( 'sa-ladder sp-stagger', $cards[ $track ] ) . sa_g( 'sa-block__prose sa-block__prose--wide sp-reveal sp-reveal--up', sa_prose( "courses_b$n" ) ) ), 'section' )
			. '';
	};
	$pm = str_replace( 'class="wp-block-group sa-sec sa-courses"', 'id="courses-pm" class="wp-block-group sa-sec sa-courses"', $sec( 'pm', 1, 'pm' ) );
	$it = str_replace( 'class="wp-block-group sa-sec sa-courses"', 'id="courses-it" class="wp-block-group sa-sec sa-courses"', $sec( 'it', 2, 'it' ) );
	$last = sa_g( 'sa-sec sa-block', sa_g( 'sa-wrap sa-block__grid', sa_title( 'courses_h3' ) . sa_g( 'sa-block__prose', sa_prose( 'courses_b3' ) . sa_btns( 'sa-block__btns', array( array( sa_t( 'hero_btn2' ), '/plans/', 'is-style-fill' ) ) ) ) ), 'section' );
	return sa_head( 'courses', 'p07.webp', 'alt_p07' ) . sa_g( 'sa-pillbar', sa_g( 'sa-wrap', $pills ), 'div' ) . $pm . $it . $last;
}

function sa_page_course() {
	$mods = '';
	$n    = 0;
	foreach ( array( 1, 2, 3, 4 ) as $m ) {
		$items = '';
		for ( $l = 1; $l <= 6; $l++ ) {
			++$n;
			$items .= '<li><span class="sa-acc__n">' . sprintf( '%02d', $n ) . '</span>' . esc_html( sa_t( "cp_m{$m}_l$l" ) ) . '</li>';
		}
		$mods .= sa_acc( '<span class="sa-acc__t">' . esc_html( sa_t( "cp_m$m" ) ) . '</span><span class="sa-acc__c">6 ' . esc_html( sa_t( 'cp_lessons' ) ) . '</span>', '<ol class="sa-lessons">' . $items . '</ol>', 1 === $m );
	}
	$incl = '';
	for ( $i = 1; $i <= 6; $i++ ) {
		$incl .= '<li>' . esc_html( sa_t( "cp_i$i" ) ) . '</li>';
	}
	$box = sa_g( 'sa-pricebox sa-panel',
		sa_p( 'sa-bracket', '{ ' . esc_html( sa_t( 'cp_box_h' ) ) . ' }' )
		. sa_p( 'sa-pricebox__price', '<span class="sa-price">' . esc_html( sa_t( 'cl_p1' ) ) . '</span>' )
		. sa_html( '<ul class="sa-ticks">' . $incl . '</ul>' )
		. sa_btns( 'sa-pricebox__btn', array( array( sa_t( 'cp_buy' ), '/plans/' ) ) )
		. sa_p( 'sa-pricebox__note', esc_html( sa_t( 'cp_note' ) ) )
	);
	$main = sa_g( 'sa-course__main',
		sa_bracket( 'cp_label' ) . sa_title( 'project_delivery_foundations_h1' ) . sa_g( 'sa-block__prose sp-reveal sp-reveal--up', sa_prose( 'project_delivery_foundations_b1' ) )
		. sa_g( 'sa-course__curr', sa_bracket( 'cp_curr' ) . sa_p( 'sa-course__cn', esc_html( sa_t( 'cp_curr_note' ) ) ) . $mods )
		. sa_g( 'sa-course__sec', sa_title( 'project_delivery_foundations_h2' ) . sa_g( 'sa-block__prose sp-reveal sp-reveal--up', sa_prose( 'project_delivery_foundations_b2' ) ) )
		. sa_g( 'sa-course__sec', sa_title( 'project_delivery_foundations_h3' ) . sa_g( 'sa-block__prose sp-reveal sp-reveal--up', sa_prose( 'project_delivery_foundations_b3' ) ) )
	);
	return sa_head( 'project-delivery-foundations', 'p03.webp', 'alt_p03' )
		. sa_g( 'sa-sec sa-course', sa_g( 'sa-wrap sa-course__grid', $main . $box ), 'section' );
}

function sa_page_lesson() {
	$list = '';
	for ( $i = 5; $i <= 11; $i++ ) {
		$m     = (int) ceil( $i / 6 );
		$l     = $i - ( $m - 1 ) * 6;
		$cur   = 7 === $i;
		$list .= '<li class="sa-lp__item' . ( $cur ? ' is-current' : '' ) . '"' . ( $cur ? ' aria-current="true"' : '' ) . '><span class="sa-lp__tab">' . sprintf( '%02d', $i ) . '</span><span>' . esc_html( sa_t( "cp_m{$m}_l$l" ) ) . '</span></li>';
	}
	$player = sa_html(
		'<div class="sa-lp"><div class="sa-lp__video" role="img" aria-label="' . esc_attr( sa_t( 'lp_eg' ) ) . '"><span class="sa-lp__play" aria-hidden="true"></span><span class="sa-lp__cur">' . esc_html( sa_t( 'lp_cur' ) ) . '</span></div>'
		. '<div class="sa-lp__bar"><span class="sa-lp__prog"><i style="width:29%"></i></span><span class="sa-lp__pt">' . esc_html( sa_t( 'lp_prog' ) ) . '</span></div></div>'
	);
	$side = sa_html( '<aside class="sa-lp__side"><p class="sa-bracket">{ ' . esc_html( sa_t( 'lp_list' ) ) . ' }</p><p class="sa-lp__course">' . esc_html( sa_t( 'lp_course' ) ) . '</p><ol class="sa-lp__list">' . $list . '</ol></aside>' );
	return sa_head( 'lesson-player', 'p06.webp', 'alt_p06' )
		. sa_g( 'sa-sec sa-lpsec', sa_g( 'sa-wrap sa-lp__grid', sa_g( 'sa-lp__main', $player ) . $side ), 'section' )
		. sa_block( 'lesson-player', 1 ) . sa_block( 'lesson-player', 2 );
}

function sa_page_plans() {
	$bill = '';
	foreach ( array( 3, 4, 5, 6 ) as $n ) {
		$bill .= sa_g( 'sa-faqp sa-panel sp-reveal sp-reveal--up', sa_h( 3, 'sa-faqp__q', esc_html( sa_t( "plans_h$n" ) ) ) . sa_prose( "plans_b$n", 'sa-faqp__a' ) );
	}
	return sa_head( 'plans', 'p13.webp', 'alt_p13' )
		. sa_g( 'sa-sec sa-planssec', sa_g( 'sa-wrap', sa_bracket( 'pn_label' ) . sa_title( 'pn_title' ) . sa_plans_table()
			. sa_g( 'sa-plans__foot', sa_p( 'sa-plans__note', esc_html( sa_t( 'pn_note' ) ) ) . sa_btns( 'sa-plans__cta', array( array( sa_t( 'pn_cta' ), '/courses/' ) ) ) ) ), 'section' )
		. sa_block( 'plans', 1 )
		. sa_g( 'sa-sec sa-planssec', sa_g( 'sa-wrap', sa_bracket( 'pl_list_label' ) . sa_title( 'plans_h2' ) . sa_price_list() . sa_g( 'sa-block__prose sa-block__prose--wide sa-block__prose--after', sa_prose( 'plans_b2' ) ) ), 'section' )
		. sa_g( 'sa-sec', sa_g( 'sa-wrap', sa_bracket( 'pl_bill' ) . sa_g( 'sa-faqgrid sp-stagger', $bill ) ), 'section' );
}

function sa_page_how() {
	$steps = '';
	foreach ( array( 1, 2, 3, 4 ) as $i ) {
		$steps .= sa_g( 'sa-stepcard sa-card sp-reveal sp-reveal--up', sa_tab( '0' . $i ) . sa_h( 3, 'sa-stepcard__t', esc_html( sa_t( "pl_s$i" ) ) ) . sa_p( 'sa-body', esc_html( sa_t( "hw_s{$i}_b" ) ) ) );
	}
	return sa_head( 'how-it-works', 'p08.webp', 'alt_p08', array( array( sa_t( 'hero_btn1' ), '/courses/', 'is-style-fill' ), array( sa_t( 'hero_btn2' ), '/plans/', 'is-style-outline' ) ) )
		. sa_g( 'sa-sec sa-steps2', sa_g( 'sa-wrap', sa_bracket( 'hw_label' ) . sa_g( 'sa-steps2__list', $steps ) ), 'section' )
		. sa_block( 'how-it-works', 1 ) . sa_block( 'how-it-works', 2 )
		. sa_g( 'sa-sec sa-player', sa_g( 'sa-wrap sa-player__grid', sa_g( 'sa-player__text', sa_bracket( 'hw_fan' ) . sa_title( 'how_it_works_h3' ) . sa_g( 'sa-player__body sp-reveal sp-reveal--up', sa_prose( 'how_it_works_b3' ) ) ) . sa_fan( array( array( 'p06.webp', 'alt_p06' ), array( 'p07.webp', 'alt_p07' ), array( 'p16.webp', 'alt_p16' ) ) ) ), 'section' );
}

function sa_page_instructors() {
	$cards = '';
	$sub   = array( 1 => '', 2 => 'Courses 01 · 03', 3 => 'Course 02', 4 => 'Course 04', 5 => 'Course 05', 6 => 'Course 06', 7 => '' );
	foreach ( range( 1, 7 ) as $i ) {
		$cards .= sa_g( 'sa-card sa-card--person sp-reveal sp-reveal--up',
			sa_tab( '0' . $i )
			. sa_g( 'sa-card__band', sa_p( 'sa-tag', esc_html( sa_t( "in_r$i" ) ) ) . sa_h( 3, 'sa-card__title', esc_html( sa_t( "in_n$i" ) ) ) . ( $sub[ $i ] ? sa_p( 'sa-card__meta', esc_html( $sub[ $i ] ) ) : '' ) )
			. sa_g( 'sa-card__text', sa_prose( "in_b$i", 'sa-card__desc' ) )
		);
	}
	return sa_head( 'instructors', 'p09.webp', 'alt_p09' ) . sa_g( 'sa-sec', sa_g( 'sa-wrap', sa_bracket( 'in_label' ) . sa_g( 'sa-ladder sa-ladder--people sp-stagger', $cards ) ), 'section' );
}

function sa_page_stories() {
	$cards = '';
	foreach ( array( 1, 2, 3 ) as $i ) {
		$parts = preg_split( '/\n\s*\n/', sa_t( "student_stories_b$i" ) );
		$photo = 1 === $i ? sa_img( 'p10.webp', 'alt_p10', 'sa-card__photo sa-ph' ) : '';
		$quote = isset( $parts[1] ) ? trim( $parts[1], "\"\u{201C}\u{201D} " ) : '';
		$cards .= sa_g( 'sa-card sa-card--story sp-reveal sp-reveal--up',
			sa_tab( '0' . $i )
			. sa_g( 'sa-card__band', sa_p( 'sa-tag', esc_html( sa_t( "st_c$i" ) ) ) . sa_h( 3, 'sa-card__title', esc_html( sa_t( "st_n$i" ) ) ) . sa_p( 'sa-card__meta', esc_html( sa_t( "st_m$i" ) ) ) )
			. $photo
			. sa_g( 'sa-card__text',
				sa_p( 'sa-card__desc', esc_html( $parts[0] ) )
				. sa_p( 'sa-story__q sa-card__q', esc_html( $quote ) )
				. ( isset( $parts[2] ) ? sa_p( 'sa-card__desc', esc_html( $parts[2] ) ) : '' )
			)
		);
	}
	return sa_head( 'student-stories', 'p14.webp', 'alt_p14' ) . sa_g( 'sa-sec', sa_g( 'sa-wrap', sa_bracket( 'st_label2' ) . sa_g( 'sa-ladder sa-ladder--stories sp-stagger', $cards ) ), 'section' );
}

function sa_page_about() {
	$facts = '';
	foreach ( range( 1, 6 ) as $i ) {
		$facts .= '<div class="sa-fact"><dt>' . esc_html( sa_t( "ab_fk$i" ) ) . '</dt><dd>' . esc_html( sa_t( "ab_fv$i" ) ) . '</dd></div>';
	}
	return sa_head( 'about', 'p15.webp', 'alt_p15' )
		. sa_g( 'sa-sec sa-aboutp', sa_g( 'sa-wrap', sa_g( 'sa-panel sa-aboutp__panel', sa_bracket( 'about_title' ) . sa_title( 'about_h1' ) . sa_g( 'sa-aboutp__prose', sa_prose( 'about_b1', 'sa-about__p' ) ) ) ), 'section' )
		. sa_g( 'sa-sec sa-player', sa_g( 'sa-wrap sa-player__grid', sa_g( 'sa-player__text', sa_bracket( 'ab_fan' ) . sa_title( 'about_h2' ) . sa_g( 'sa-player__body sp-reveal sp-reveal--up', sa_prose( 'about_b2' ) ) ) . sa_fan( array( array( 'p02.webp', 'alt_p02' ), array( 'p16.webp', 'alt_p16' ), array( 'p12.webp', 'alt_p12' ) ) ) ), 'section' )
		. sa_g( 'sa-sec', sa_g( 'sa-wrap', sa_bracket( 'ab_facts' ) . sa_html( '<dl class="sa-facts">' . $facts . '</dl>' ) ), 'section' );
}

function sa_page_support() {
	$hours = '';
	foreach ( range( 1, 4 ) as $i ) {
		$hours .= '<div class="sa-fact"><dt>' . esc_html( sa_t( "su_h$i" ) ) . '</dt><dd>' . esc_html( sa_t( "su_v$i" ) ) . '</dd></div>';
	}
	$form = '<form class="sa-form" action="mailto:support@shikaku-academy.example" method="post" enctype="text/plain">'
		. '<p><label for="sa-f-name">' . esc_html( sa_t( 'su_f_name' ) ) . '</label><input id="sa-f-name" name="name" type="text" autocomplete="name" required></p>'
		. '<p><label for="sa-f-email">' . esc_html( sa_t( 'su_f_email' ) ) . '</label><input id="sa-f-email" name="email" type="email" autocomplete="email" required></p>'
		. '<p><label for="sa-f-about">' . esc_html( sa_t( 'su_f_about' ) ) . '</label><select id="sa-f-about" name="about"><option>' . esc_html( sa_t( 'su_f_o1' ) ) . '</option><option>' . esc_html( sa_t( 'su_f_o2' ) ) . '</option><option>' . esc_html( sa_t( 'su_f_o3' ) ) . '</option></select></p>'
		. '<p><label for="sa-f-msg">' . esc_html( sa_t( 'su_f_msg' ) ) . '</label><textarea id="sa-f-msg" name="message" rows="6" required></textarea></p>'
		. '<p><button type="submit" class="wp-element-button">' . esc_html( sa_t( 'su_f_send' ) ) . '</button></p></form>';
	$band = sa_g( 'sa-band sp-parallax', sa_img( 'p15.webp', 'alt_p15', 'sa-ph' ), 'div', 'full' );
	return sa_head( 'support', 'p12.webp', 'alt_p12' )
		. sa_g( 'sa-sec', sa_g( 'sa-wrap sa-support2', sa_g( 'sa-support2__col', sa_bracket( 'su_hours' ) . sa_html( '<dl class="sa-facts sa-facts--one">' . $hours . '</dl>' ) . sa_title( 'support_h1' ) . sa_g( 'sa-block__prose sp-reveal sp-reveal--up', sa_prose( 'support_b1' ) ) )
			. sa_g( 'sa-support2__col', sa_bracket( 'su_form' ) . sa_html( $form ) ) ), 'section' )
		. sa_g( 'sa-sec sa-bandsec', $band, 'section', 'full' )
		. sa_block( 'support', 2 ) . sa_block( 'support', 3 );
}

function sa_page_faq() {
	$groups = array();
	foreach ( range( 1, 12 ) as $i ) {
		$groups[ sa_t( "faq_g$i" ) ][] = $i;
	}
	$h = '';
	foreach ( array( 'Buying', 'Learning', 'Access', 'Certificates' ) as $g ) {
		$items = '';
		foreach ( $groups[ $g ] as $i ) {
			$items .= sa_acc( esc_html( sa_t( "faq_q$i" ) ), implode( '', array_map( function ( $c ) { return '<p>' . esc_html( $c ) . '</p>'; }, sa_chunks( sa_t( "faq_a$i" ) ) ) ) );
		}
		$h .= sa_g( 'sa-sec sa-faqsec', sa_g( 'sa-wrap sa-block__grid', sa_title( 'faq_g_' . $g, '', 2 ) . sa_g( 'sa-faqlist sa-panel', $items ) ), 'section' );
	}
	return sa_head( 'faq', 'p16.webp', 'alt_p16' ) . $h;
}

function sa_page_mycourses() {
	$rows = '';
	foreach ( array( 1, 2, 3 ) as $i ) {
		$rows .= '<li class="sa-mc__row"><span class="sa-mc__n">0' . $i . '</span><span class="sa-mc__t">' . esc_html( sa_t( "mc_c$i" ) ) . '</span><span class="sa-mc__bar" role="img" aria-label="' . esc_attr( sa_t( 'mc_prog' ) . ' ' . sa_t( "mc_pr$i" ) ) . '"><i style="width:' . esc_attr( sa_t( "mc_pr$i" ) ) . '"></i></span><span class="sa-mc__p">' . esc_html( sa_t( "mc_pr$i" ) ) . '</span><a class="sa-mc__a" href="/project-delivery-foundations/">' . esc_html( sa_t( 'mc_open' ) ) . '</a></li>';
	}
	return sa_head( 'my-courses', 'p07.webp', 'alt_p07', array( array( sa_t( 'mc_log' ), '/wp-login.php', 'is-style-fill' ) ) )
		. sa_g( 'sa-sec', sa_g( 'sa-wrap', sa_bracket( 'mc_label' ) . sa_html( '<div class="sa-panel sa-mc"><p class="sa-bracket">{ ' . esc_html( sa_t( 'mc_eg' ) ) . ' }</p><ol class="sa-mc__list">' . $rows . '</ol></div>' ) ), 'section' )
		. sa_block( 'my-courses', 1 ) . sa_block( 'my-courses', 2 );
}
