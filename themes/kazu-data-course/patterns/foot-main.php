<?php
/**
 * Title: Footer
 * Slug: kazu-data-course/foot-main
 * Categories: kazu-data-course
 * Inserter: false
 */
$links = '';
foreach ( array( 1 => '/curriculum/', 2 => '/pricing/', 3 => '/faq/', 4 => '/journal/', 5 => '/contact/', 6 => '/dashboard/' ) as $i => $href ) {
	$links .= kz_p( 'kz-foot__link', '<a href="' . esc_attr( $href ) . '">' . esc_html( kazu_t( "ft_l$i" ) ) . '</a>' );
}
echo kz_g( 'kz-foot',
	kz_g( 'kz-foot__grid',
		kz_g( 'kz-foot__col', kz_p( 'kz-foot__mark', 'Kazu Data Course' ) . kz_p( 'kz-foot__text', esc_html( kazu_t( 'ft_tag' ) ) ) . kz_p( 'kz-foot__text', esc_html( kazu_t( 'ft_addr' ) ) ) )
		. kz_g( 'kz-foot__col', kz_p( 'kz-foot__h', esc_html( kazu_t( 'ft_h1' ) ) ) . $links )
		. kz_g( 'kz-foot__col', kz_p( 'kz-foot__h', esc_html( kazu_t( 'ft_h2' ) ) ) . kz_p( 'kz-foot__text', esc_html( kazu_t( 'ft_s1' ) ) ) . kz_p( 'kz-foot__text', esc_html( kazu_t( 'ft_s2' ) ) ) . kz_p( 'kz-foot__text', esc_html( kazu_t( 'ft_s3' ) ) ) )
	)
	. kz_p( 'kz-foot__legal', esc_html( kazu_t( 'ft_legal' ) ) ),
	'div', 'full'
);
