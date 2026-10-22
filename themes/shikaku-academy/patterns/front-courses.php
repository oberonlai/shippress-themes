<?php
/**
 * Title: Home: course ladder
 * Slug: shikaku-academy/front-courses
 * Categories: shikaku-academy
 * Description: T2: a giant accent title and three numbered-tab course cards that step down 40px each.
 */
$cards = '';
foreach ( array( array( '01', 1, 'pm', 'p03.webp' ), array( '02', 2, 'pm', 'p04.webp' ), array( '04', 4, 'it', 'p05.webp' ) ) as $c ) {
	list( $num, $i, $track, $photo ) = $c;
	$cards .= sa_g( 'sa-card sp-reveal sp-reveal--up',
		sa_p( 'sa-card__tab', esc_html( $num ) )
		. sa_g( 'sa-card__band',
			sa_p( 'sa-tag', esc_html( sa_t( 'pm' === $track ? 'cl_tag_pm' : 'cl_tag_it' ) ) )
			. sa_h( 3, 'sa-card__title', esc_html( sa_t( "c$i" ) ) )
			. sa_p( 'sa-card__meta', esc_html( sa_t( "cl_m$i" ) ) )
		)
		. sa_img( $photo, 'alt_p0' . ( 1 === $i ? 3 : ( 2 === $i ? 4 : 5 ) ), 'sa-card__photo sa-ph' )
		. sa_p( 'sa-card__desc', esc_html( sa_t( "cl_d$i" ) ) )
		. sa_p( 'sa-card__foot', '<span class="sa-price">' . esc_html( sa_t( "cl_p$i" ) ) . '</span><a href="/courses/">' . esc_html( sa_t( 'cl_view' ) ) . '</a>' )
	);
}
echo sa_g( 'sa-sec sa-courses',
	sa_g( 'sa-wrap',
		sa_bracket( 'cl_label' )
		. sa_g( 'sa-title sa-title--giant sp-reveal sp-reveal--wipe', sa_h( 2, 'sa-giant', esc_html( sa_t( 'cl_title' ) ) ) )
		. sa_g( 'sa-ladder sp-stagger', $cards )
		. sa_p( 'sa-more', '<a href="/courses/">' . esc_html( sa_t( 'cl_all' ) ) . '</a>' )
	),
	'section'
);
