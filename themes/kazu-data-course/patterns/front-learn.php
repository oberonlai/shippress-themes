<?php
/**
 * Title: Home: what you will learn
 * Slug: kazu-data-course/front-learn
 * Categories: kazu-data-course
 * Keywords: course, data, lessons
 * Viewport Width: 1440
 * Description: Alternating chapter: framed photo left, ruled module list right.
 */
$rows = '';
for ( $i = 1; $i <= 6; $i++ ) {
	$rows .= kz_g( 'kz-row sp-reveal sp-reveal--up',
		kz_p( 'kz-row__no', sprintf( '%02d', $i ) )
		. kz_g( 'kz-row__body', kz_h( 3, 'kz-row__title', esc_html( kazu_t( "m$i" ) ) ) . kz_p( 'kz-row__note', esc_html( kazu_t( "m{$i}n" ) ) ) )
		. kz_p( 'kz-row__count', esc_html( kazu_t( "m{$i}c" ) ) )
	);
}
echo kz_g( 'kz-sec kz-learn',
	kz_g( 'kz-mid kz-alt',
		kz_g( 'kz-alt__photo', kz_img( 'p02-notebook.webp', 'alt_p02', 'kz-photo kz-photo--45' ) )
		. kz_g( 'kz-alt__text',
			kz_open( 'ln_eyebrow', 'ln_title' )
			. kz_p( 'kz-text', esc_html( kazu_t( 'ln_intro' ) ) )
			. kz_g( 'kz-rows sp-stagger', $rows )
		)
	),
	'section', 'full'
);
