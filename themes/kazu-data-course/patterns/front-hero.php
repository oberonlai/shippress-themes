<?php
/**
 * Title: Home: hero
 * Slug: kazu-data-course/front-hero
 * Categories: kazu-data-course
 * Keywords: course, data, lessons
 * Viewport Width: 1440
 * Description: T1 flush-left display headline over the T2 framed portrait with a vertical name.
 */
echo kz_g( 'kz-hero',
	kz_g( 'kz-head', kz_h( 1, 'kz-display', esc_html( kazu_t( 'hero_display' ) ) ) . kz_p( 'kz-subline', esc_html( kazu_t( 'hero_sub' ) ) ) )
	. kz_g( 'kz-t2',
		kz_g( 'kz-t2__text',
			kz_p( 'kz-statement', kazu_lines( 'hero_state' ) )
			. kz_p( 'kz-namesmall', esc_html( kazu_t( 'hero_name' ) ) )
			. kz_p( 'kz-meta', esc_html( kazu_t( 'hero_meta' ) ) )
			. kz_g( 'kz-actions',
				kz_btns( 'kz-actions__buy', array( array( kazu_t( 'btn_buy' ), kazu_buy_url() ) ) )
				. kz_p( 'kz-play', '<a href="/curriculum/">' . esc_html( kazu_t( 'btn_preview' ) ) . '</a>' )
			)
		)
		. kz_g( 'kz-frame', kz_img( 'p01-kazu-desk.webp', 'alt_p01', 'kz-photo kz-photo--34' ) . kz_p( 'kz-vname', esc_html( kazu_t( 'hero_vname' ) ) ) )
	),
	'section', 'full'
);
