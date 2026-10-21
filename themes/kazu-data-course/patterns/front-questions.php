<?php
/**
 * Title: Home: questions
 * Slug: kazu-data-course/front-questions
 * Categories: kazu-data-course
 * Keywords: course, data, lessons
 * Viewport Width: 1440
 * Description: Five collapsible questions under a framed photo.
 */
$d = '';
for ( $i = 1; $i <= 5; $i++ ) {
	$d .= kz_details( kazu_t( "q$i" ), kazu_t( "a$i" ) );
}
echo kz_g( 'kz-sec kz-questions',
	kz_g( 'kz-col',
		kz_img( 'p11-coffee.webp', 'alt_p11', 'kz-photo kz-photo--32' )
		. kz_open( 'qa_eyebrow', 'qa_title' )
		. kz_g( 'kz-faq', $d )
		. kz_p( 'kz-more', '<a href="/faq/">' . esc_html( kazu_t( 'qa_more' ) ) . '</a>' )
	),
	'section', 'full'
);
