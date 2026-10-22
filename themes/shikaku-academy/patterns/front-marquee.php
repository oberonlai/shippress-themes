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
$plain = '';
foreach ( array( 1, 2, 3, 4, 5, 6 ) as $i ) {
	$plain .= '<p class="sa-marq__item">' . esc_html( sa_t( "c$i" ) ) . '</p>';
}
// The looping copy is a Custom HTML block so its aria-hidden survives block validation in the editor.
$aria = '<!-- wp:html -->' . "\n" . '<div class="wp-block-group sa-marq" aria-hidden="true">' . $plain . '</div>' . "\n" . '<!-- /wp:html -->' . "\n\n";
echo sa_g( 'sa-marquee sp-marquee', sa_g( 'sa-marq', $names ) . $aria, 'div', 'full' );
