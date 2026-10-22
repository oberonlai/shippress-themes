<?php
/**
 * Title: Home: student stories
 * Slug: shikaku-academy/front-stories
 * Categories: shikaku-academy
 * Description: Three horizontal story rows: an italic quote, the learner and the move from one role to the next; the first row carries a photograph.
 */
$rows = '';
foreach ( array( 1, 2, 3 ) as $i ) {
	$rows .= sa_g( 'sa-story sp-reveal sp-reveal--up',
		( 1 === $i ? sa_g( 'sa-story__photo', sa_img( 'p10.webp', 'alt_p10', 'sa-ph' ) ) : sa_g( 'sa-story__photo sa-story__photo--empty', sa_p( 'sa-story__no', '0' . $i ) ) )
		. sa_p( 'sa-story__q', esc_html( sa_t( "st_q$i" ) ) )
		. sa_g( 'sa-story__who', sa_p( 'sa-story__n', esc_html( sa_t( "st_n$i" ) ) ) . sa_p( 'sa-story__m', esc_html( sa_t( "st_m$i" ) ) ) . sa_p( 'sa-story__c', esc_html( sa_t( "st_c$i" ) ) ) )
	);
}
echo sa_g( 'sa-sec sa-stories',
	sa_g( 'sa-wrap', sa_bracket( 'st_label' ) . sa_title( 'st_title' ) . sa_g( 'sa-story-list sp-stagger', $rows ) ),
	'section'
);
