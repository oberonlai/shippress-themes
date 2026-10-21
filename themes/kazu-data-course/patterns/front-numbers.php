<?php
/**
 * Title: Home: course in numbers
 * Slug: kazu-data-course/front-numbers
 * Categories: kazu-data-course
 * Keywords: course, data, lessons
 * Viewport Width: 1440
 * Description: Three offset cards with pill labels and photographs.
 */
$cards = '';
foreach ( array( 1 => 'p03-laptop-chart.webp', 2 => 'p04-headphones.webp', 3 => 'p05-pinboard.webp' ) as $i => $img ) {
	$cards .= kz_g( 'kz-card kz-stat sp-reveal sp-reveal--zoom',
		kz_p( 'kz-pill', esc_html( kazu_t( "nm{$i}_pill" ) ) )
		. kz_img( $img, 'alt_p0' . ( $i + 2 ), 'kz-photo kz-photo--32' )
		. kz_p( 'kz-num', '<span class="sp-count">' . esc_html( kazu_t( "nm{$i}_num" ) ) . '</span> <small>' . esc_html( kazu_t( "nm{$i}_unit" ) ) . '</small>' )
		. kz_p( 'kz-stat__note', esc_html( kazu_t( "nm{$i}_note" ) ) )
	);
}
echo kz_g( 'kz-sec kz-numbers',
	kz_g( 'kz-col kz-col--center', kz_open( 'nm_eyebrow', 'nm_title' ) )
	. kz_g( 'kz-wide', kz_g( 'kz-cards sp-stagger', $cards ) . kz_p( 'kz-line', esc_html( kazu_t( 'nm_line' ) ) ) ),
	'section', 'full'
);
