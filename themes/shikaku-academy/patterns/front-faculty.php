<?php
/**
 * Title: Home: faculty
 * Slug: shikaku-academy/front-faculty
 * Categories: shikaku-academy
 * Description: A wide studio photograph (slow parallax) beside six instructor rows set as text with white rules.
 */
$rows = '';
foreach ( array( 1, 2, 3, 4, 5, 6 ) as $i ) {
	$rows .= sa_g( 'sa-person',
		sa_p( 'sa-person__n', esc_html( sa_t( "fa_n$i" ) ) ) . sa_p( 'sa-person__r', esc_html( sa_t( "fa_r$i" ) ) )
	);
}
echo sa_g( 'sa-sec sa-faculty',
	sa_g( 'sa-wrap sa-faculty__grid',
		sa_g( 'sa-faculty__photo sp-parallax', sa_img( 'p09.webp', 'alt_p09', 'sa-ph' ) )
		. sa_g( 'sa-faculty__text',
			sa_bracket( 'fa_label' ) . sa_title( 'fa_title' )
			. sa_p( 'sa-body', esc_html( sa_t( 'fa_intro' ) ) )
			. sa_g( 'sa-people sp-stagger', $rows )
		)
	),
	'section'
);
