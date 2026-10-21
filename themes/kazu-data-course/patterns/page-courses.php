<?php
/**
 * Title: Page: courses
 * Slug: kazu-data-course/page-courses
 * Categories: kazu-data-course
 * Inserter: false
 */
$list = array(
	array( 'p16-kazu-record.webp', 'Kazu Moreno recording a lesson to camera at her desk', 'Complete course', 'Practical Data Analysis', '6 modules · 48 lessons · 5 project reviews', '€290' ),
	array( 'p03-laptop-chart.webp', 'A laptop screen with a blurred line chart and a hand on the trackpad', 'Single module', 'Module 3: SQL for analysts', '9 lessons · 1 project review', '€95' ),
	array( 'p10-studio.webp', 'The studio teaching desk with a laptop, a large monitor and a whiteboard with axes', 'Single module', 'Module 4: Python with pandas', '10 lessons · 1 project review', '€110' ),
	array( 'p05-pinboard.webp', 'Printed bar charts pinned to a white pinboard', 'Single module', 'Module 5: Charts people actually read', '7 lessons · 1 project review', '€80' ),
);
$cards = '';
foreach ( $list as $c ) {
	$cards .= kz_card( $c[2],
		kz_imgx( $c[0], $c[1], 'kz-photo kz-photo--32' )
		. kz_h( 3, 'kz-mod__title', kz_x( $c[3] ) )
		. kz_t( $c[4], 'kz-stat__note' )
		. kz_p( 'kz-coursebuy', '<span class="kz-nowrap">' . esc_html( $c[5] ) . '</span> <a href="/pricing/">' . kz_x( 'See details' ) . '</a>' ),
		'kz-coursecard sp-reveal sp-reveal--up' );
}
echo kz_sub( 'Practical Data Analysis and three single modules.' )
. kz_g( 'kz-sec kz-inner',
	kz_g( 'kz-col', kz_t( 'Most people start with the complete course. If you already know your spreadsheets and want one skill, take a single module: each has its own lessons and one project review.', 'kz-lead' ) )
	. kz_g( 'kz-mid kz-gap kz-courses', $cards )
	. kz_g( 'kz-col kz-gap', kz_t( 'Every course includes captions in English, Chinese, Japanese, French and German, and 12 or 24 months of access.', 'kz-small' ) ),
	'section', 'full'
);
