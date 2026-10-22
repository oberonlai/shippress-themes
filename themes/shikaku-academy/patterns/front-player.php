<?php
/**
 * Title: Home: inside the lesson player
 * Slug: shikaku-academy/front-player
 * Categories: shikaku-academy
 * Description: T3: text and a four-step list beside a fan of three rotated photo cards (+5, -7, +16 degrees).
 */
$steps = '';
foreach ( array( 1, 2, 3, 4 ) as $i ) {
	$steps .= sa_p( 'sa-step', '<span class="sa-step__n">0' . $i . '</span>' . esc_html( sa_t( "pl_s$i" ) ) );
}
echo sa_g( 'sa-sec sa-player',
	sa_g( 'sa-wrap sa-player__grid',
		sa_g( 'sa-player__text',
			sa_bracket( 'pl_label' ) . sa_title( 'pl_title' )
			. sa_g( 'sa-player__body sp-reveal sp-reveal--up', sa_p( 'sa-body', esc_html( sa_t( 'pl_p1' ) ) ) . sa_p( 'sa-body', esc_html( sa_t( 'pl_p2' ) ) ) . sa_g( 'sa-steps', $steps ) )
		)
		. sa_g( 'sa-fan',
			sa_g( 'sa-fan__card sa-fan__card--1', sa_img( 'p06.webp', 'alt_p06', 'sa-ph' ) )
			. sa_g( 'sa-fan__card sa-fan__card--2', sa_img( 'p07.webp', 'alt_p07', 'sa-ph' ) )
			. sa_g( 'sa-fan__card sa-fan__card--3', sa_img( 'p08.webp', 'alt_p08', 'sa-ph' ) )
		)
	),
	'section'
);
