<?php
/**
 * Title: Home: support band
 * Slug: shikaku-academy/front-support
 * Categories: shikaku-academy
 * Description: Support hours and live Q&A over a ghost word, with two pill buttons.
 */
echo sa_g( 'sa-support',
	sa_p( 'sa-ghost sa-ghost--support', esc_html( sa_t( 'su_ghost' ) ) )
	. sa_g( 'sa-wrap sa-support__grid',
		sa_g( 'sa-support__text', sa_bracket( 'su_label' ) . sa_title( 'su_title' ) . sa_p( 'sa-body', esc_html( sa_t( 'su_text' ) ) ) )
		. sa_btns( 'sa-support__btns', array( array( sa_t( 'su_btn1' ), '/support/', 'is-style-fill' ), array( sa_t( 'su_btn2' ), '/my-courses/', 'is-style-outline' ) ) )
	),
	'section', 'full'
);
