<?php
/**
 * Title: Home: free preview
 * Slug: kazu-data-course/front-preview
 * Categories: kazu-data-course
 * Keywords: course, data, lessons
 * Viewport Width: 1440
 * Description: A framed 16:9 window with a play button.
 */
echo kz_g( 'kz-sec kz-preview',
	kz_g( 'kz-col kz-col--center', kz_open( 'pv_eyebrow', 'pv_title' ) . kz_p( 'kz-text', esc_html( kazu_t( 'pv_text' ) ) ) )
	. kz_g( 'kz-mid',
		kz_g( 'kz-frame kz-frame--wide',
			kz_img( 'p10-studio.webp', 'alt_p10', 'kz-photo kz-photo--169' )
			. kz_p( 'kz-playbtn', '<a href="/curriculum/" aria-label="' . esc_attr( kazu_t( 'pv_play' ) ) . '"><span aria-hidden="true">▶</span></a>' )
		)
		. kz_p( 'kz-caption kz-caption--c', esc_html( kazu_t( 'pv_cap' ) ) )
	),
	'section', 'full'
);
