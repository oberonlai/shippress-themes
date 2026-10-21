<?php
/**
 * Title: Home: how it works
 * Slug: kazu-data-course/front-how
 * Categories: kazu-data-course
 * Keywords: course, data, lessons
 * Viewport Width: 1440
 * Description: Mirrored chapter: five ruled steps left, framed photo right.
 */
$rows = '';
for ( $i = 1; $i <= 5; $i++ ) {
	$rows .= kz_g( 'kz-step sp-reveal sp-reveal--up', kz_p( 'kz-step__no', (string) $i ) . kz_p( 'kz-step__text', esc_html( kazu_t( "st$i" ) ) ) );
}
echo kz_g( 'kz-sec kz-how',
	kz_g( 'kz-mid kz-alt kz-alt--rev',
		kz_g( 'kz-alt__photo', kz_img( 'p06-priya.webp', 'alt_p06', 'kz-photo kz-photo--45' ) )
		. kz_g( 'kz-alt__text',
			kz_open( 'hw_eyebrow', 'hw_title' )
			. kz_p( 'kz-text', esc_html( kazu_t( 'hw_intro' ) ) )
			. kz_g( 'kz-rows sp-stagger', $rows )
			. kz_p( 'kz-small', esc_html( kazu_t( 'hw_note' ) ) )
		)
	),
	'section', 'full'
);
