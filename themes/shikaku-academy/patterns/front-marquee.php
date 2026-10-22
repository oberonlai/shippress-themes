<?php
/**
 * Title: Home: course-name marquee
 * Slug: shikaku-academy/front-marquee
 * Categories: shikaku-academy
 * Description: A calm band of the six course names, looping slowly (sp-marquee).
 */
$names = '';
foreach ( array( 1, 2, 3, 4, 5, 6 ) as $i ) {
	$names .= sa_p( 'sa-marq__item', esc_html( sa_t( "c$i" ) ) );
}
$aria = str_replace( 'class="wp-block-group sa-marq"', 'class="wp-block-group sa-marq" aria-hidden="true"', sa_g( 'sa-marq', $names ) );
echo sa_g( 'sa-marquee sp-marquee', sa_g( 'sa-marq', $names ) . $aria, 'div', 'full' );
