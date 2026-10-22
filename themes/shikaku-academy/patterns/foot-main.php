<?php
/**
 * Title: Footer
 * Slug: shikaku-academy/foot-main
 * Categories: shikaku-academy
 * Inserter: false
 */
$link = function ( $href, $label ) {
	return sa_p( 'sa-foot__link', '<a href="' . esc_attr( $href ) . '">' . esc_html( $label ) . '</a>' );
};
$courses = '';
foreach ( array( 1 => '$149', 2 => '$169', 3 => '$229', 4 => '$159', 5 => '$179', 6 => '$189' ) as $i => $price ) {
	$courses .= sa_p( 'sa-foot__link', '<a href="' . ( 1 === $i ? '/project-delivery-foundations/' : '/courses/' ) . '">' . esc_html( sa_t( "c$i" ) ) . ', <span class="sa-nb">' . esc_html( $price ) . '</span></a>' );
}
echo sa_g( 'sa-foot',
	sa_g( 'sa-foot__grid',
		sa_g( 'sa-foot__col', sa_p( 'sa-foot__mark', 'Shikaku Academy' ) . sa_p( 'sa-foot__text', esc_html( sa_t( 'ft_tag' ) ) ) . sa_p( 'sa-foot__text', esc_html( sa_t( 'ft_addr' ) ) ) )
		. sa_g( 'sa-foot__col', sa_p( 'sa-foot__h', esc_html( sa_t( 'ft_h_courses' ) ) ) . $courses )
		. sa_g( 'sa-foot__col', sa_p( 'sa-foot__h', esc_html( sa_t( 'ft_h_academy' ) ) )
			. $link( '/about/', sa_t( 'ft_l_about' ) ) . $link( '/how-it-works/', sa_t( 'ft_l_how' ) ) . $link( '/instructors/', sa_t( 'ft_l_people' ) ) . $link( '/student-stories/', sa_t( 'st_label' ) ) . $link( '/plans/', sa_t( 'ft_l_plans' ) ) . $link( '/journal/', sa_t( 'jr_cat' ) ) )
		. sa_g( 'sa-foot__col', sa_p( 'sa-foot__h', esc_html( sa_t( 'ft_h_support' ) ) )
			. sa_p( 'sa-foot__text', esc_html( sa_t( 'ft_support1' ) ) ) . sa_p( 'sa-foot__text', esc_html( sa_t( 'ft_support2' ) ) ) . sa_p( 'sa-foot__text', esc_html( sa_t( 'ft_support3' ) ) )
			. $link( '/support/', sa_t( 'ft_l_support' ) ) . $link( '/faq/', sa_t( 'ft_l_faq' ) ) )
	)
	. sa_p( 'sa-foot__legal', esc_html( sa_t( 'ft_legal' ) ) ),
	'div', 'full'
);
