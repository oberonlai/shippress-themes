<?php
/**
 * Title: Home: student work
 * Slug: kazu-data-course/front-work
 * Categories: kazu-data-course
 * Keywords: course, data, lessons
 * Viewport Width: 1440
 * Description: Three alternating framed windows over a pale watermark ring.
 */
$ring = '<!-- wp:html -->' . "\n" . '<div class="kz-ring sp-parallax" aria-hidden="true"><img src="' . esc_url( get_theme_file_uri( 'assets/images/watermark-ring.svg' ) ) . '" alt="" width="640" height="640"/></div>' . "\n<!-- /wp:html -->\n\n";
$imgs = array( 1 => 'p07-amara.webp', 2 => 'p08-lena.webp', 3 => 'p09-daniel.webp' );
$rows = '';
foreach ( $imgs as $i => $img ) {
	$rows .= kz_g( 'kz-story sp-reveal sp-reveal--up' . ( 2 === $i ? ' kz-story--rev' : '' ),
		kz_g( 'kz-frame kz-frame--story', ( 2 === $i ? $ring : '' ) . kz_img( $img, 'alt_p0' . ( $i + 6 ), 'kz-photo kz-photo--34' ) . kz_p( 'kz-vname kz-vname--s', esc_html( kazu_t( "wk{$i}_name" ) ) ) )
		. kz_g( 'kz-story__text',
			kz_h( 3, 'kz-story__title', esc_html( kazu_t( "wk{$i}_title" ) ) )
			. kz_p( 'kz-text', esc_html( kazu_t( "wk{$i}_text" ) ) )
			. kz_p( 'kz-caption', esc_html( kazu_t( "wk{$i}_cap" ) ) )
		)
	);
}
echo kz_g( 'kz-sec kz-work',
	kz_g( 'kz-mid kz-work__in',
		kz_g( 'kz-col kz-col--center', kz_open( 'wk_eyebrow', 'wk_title' ) )
		. kz_g( 'kz-stories sp-stagger', $rows )
		. kz_p( 'kz-more', '<a href="/student-work/">' . esc_html( kazu_t( 'wk_more' ) ) . '</a>' )
	),
	'section', 'full'
);
