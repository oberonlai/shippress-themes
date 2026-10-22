<?php
/**
 * Title: Home: plans, single course vs bundle
 * Slug: shikaku-academy/front-plans
 * Categories: shikaku-academy
 * Description: Full-width comparison table of single course, pathway bundle and all-access; stacks into cards on small screens.
 */
echo sa_g( 'sa-sec sa-planssec',
	sa_g( 'sa-wrap',
		sa_bracket( 'pn_label' ) . sa_title( 'pn_title' )
		. sa_plans_table()
		. sa_g( 'sa-plans__foot', sa_p( 'sa-plans__note', esc_html( sa_t( 'pn_note' ) ) ) . sa_btns( 'sa-plans__cta', array( array( sa_t( 'pn_cta' ), '/plans/' ) ) ) )
	),
	'section'
);
