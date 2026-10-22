<?php
/**
 * Title: Home: about the academy
 * Slug: shikaku-academy/front-about
 * Categories: shikaku-academy
 * Description: Outlined panel: title strip, three paragraphs and a portrait breaking the panel top; ghost word behind.
 */
echo sa_g( 'sa-sec sa-about',
	sa_p( 'sa-ghost sa-ghost--about', esc_html( sa_t( 'ab_ghost' ) ) )
	. sa_g( 'sa-wrap',
		sa_g( 'sa-panel sa-about__panel',
			sa_g( 'sa-about__title', sa_bracket( 'ab_label' ) . sa_title( 'ab_title' ) )
			. sa_g( 'sa-about__text sp-reveal sp-reveal--up', sa_p( 'sa-about__p', esc_html( sa_t( 'ab_p1' ) ) ) . sa_p( 'sa-about__p', esc_html( sa_t( 'ab_p2' ) ) ) . sa_p( 'sa-about__p', esc_html( sa_t( 'ab_p3' ) ) ) )
			. sa_g( 'sa-about__photo sp-parallax', sa_img( 'p02.webp', 'alt_p02', 'sa-ph' ) )
		)
	),
	'section'
);
