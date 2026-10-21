<?php
/**
 * Title: Home: close
 * Slug: kazu-data-course/front-close
 * Categories: kazu-data-course
 * Keywords: course, data, lessons
 * Viewport Width: 1440
 * Description: T1 echo: flush-left display line over a split with a framed photo.
 */
echo kz_g( 'kz-close',
	kz_g( 'kz-head', kz_h( 2, 'kz-display kz-display--close', esc_html( kazu_t( 'cl_display' ) ) ) . kz_p( 'kz-subline', esc_html( kazu_t( 'cl_sub' ) ) ) )
	. kz_g( 'kz-mid kz-alt kz-alt--rev kz-alt--close',
		kz_g( 'kz-alt__photo', kz_img( 'p12-kazu-window.webp', 'alt_p12', 'kz-photo kz-photo--45' ) )
		. kz_g( 'kz-alt__text',
			kz_p( 'kz-text', esc_html( kazu_t( 'cl_text' ) ) )
			. kz_btns( 'kz-actions__buy kz-actions__two', array( array( kazu_t( 'cl_btn1' ), '/curriculum/', 'is-style-outline' ), array( kazu_t( 'cl_btn2' ), '/pricing/' ) ) )
			. kz_p( 'kz-small', esc_html( kazu_t( 'cl_hours' ) ) )
		)
	),
	'section', 'full'
);
