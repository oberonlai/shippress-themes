<?php
/**
 * Title: Home: letter
 * Slug: kazu-data-course/front-letter
 * Categories: kazu-data-course
 * Keywords: course, data, lessons
 * Viewport Width: 1440
 * Description: Narrow text column: a letter from the instructor.
 */
echo kz_g( 'kz-sec kz-letter',
	kz_g( 'kz-col',
		kz_open( 'lt_eyebrow', 'lt_title' )
		. kz_p( 'kz-lead', esc_html( kazu_t( 'lt_p1' ) ) )
		. kz_p( 'kz-text', esc_html( kazu_t( 'lt_p2' ) ) )
		. kz_p( 'kz-text', esc_html( kazu_t( 'lt_p3' ) ) )
		. kz_p( 'kz-sign', esc_html( kazu_t( 'lt_sign' ) ) )
	),
	'section', 'full'
);
