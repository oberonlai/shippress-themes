<?php
/**
 * Title: Page: dashboard
 * Slug: kazu-data-course/page-dashboard
 * Categories: kazu-data-course
 * Inserter: false
 */
$items = array(
	array( 'In progress', 'Practical Data Analysis', 'Module 3 · Lesson 4 of 9', 38 ),
	array( 'Completed', 'Free preview: Lesson 1.3', 'Where good questions come from · 11 min', 100 ),
);
$cards = '';
foreach ( $items as $c ) {
	$cards .= kz_card( $c[0], kz_h( 3, 'kz-mod__title', kz_x( $c[1] ) ) . kz_t( $c[2], 'kz-stat__note' ) . '<!-- wp:html -->' . "\n" . '<div class="kz-bar-track" role="img" aria-label="' . (int) $c[3] . '%"><span style="width:' . (int) $c[3] . '%"></span></div>' . "\n<!-- /wp:html -->\n\n", 'kz-coursecard' );
}
echo kz_sub( 'Your lessons, in one place.' )
. kz_g( 'kz-sec kz-inner',
	kz_g( 'kz-col', kz_t( 'After checkout your account is ready. Log in and your course appears below; pick up at the lesson where you stopped. The cards show an example of how enrolled courses look.', 'kz-lead' ) )
	. kz_g( 'kz-mid kz-gap kz-courses kz-courses--2', $cards )
	. kz_g( 'kz-col kz-gap', kz_t( 'Need something? Live Q&A is every Thursday 18:00–19:00 CET, and email support answers within 2 working days.', 'kz-small' ) . kz_btns( 'kz-actions__two', array( array( kazu_x( 'See the price list' ), '/pricing/' ), array( kazu_x( 'Contact us' ), '/contact/', 'is-style-outline' ) ) ) ),
	'section', 'full'
);
