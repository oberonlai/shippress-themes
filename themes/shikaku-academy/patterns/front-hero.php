<?php
/**
 * Title: Home: hero
 * Slug: shikaku-academy/front-hero
 * Categories: shikaku-academy
 * Keywords: course, certification, hero
 * Viewport Width: 1440
 * Description: T1: three stepped paper strips in accent type, a documentary photo standing on the fold, a bracketed course list, a dashed scroll ring and a ghost word.
 */
$courses = '';
foreach ( array( 1, 2, 3, 4, 5, 6 ) as $i ) {
	$courses .= sa_p( 'sa-hlist__item', '<a href="/courses/">' . esc_html( sa_t( "c$i" ) ) . '</a>' );
}
echo sa_g( 'sa-hero',
	sa_p( 'sa-ghost sa-ghost--hero', esc_html( sa_t( 'hero_ghost' ) ) )
	. sa_g( 'sa-hero__text',
		'<!-- wp:heading {"level":1,"className":"sa-strips"} -->' . "\n"
		. '<h1 class="wp-block-heading sa-strips"><span class="sa-strip">' . esc_html( sa_t( 'hero_s1' ) ) . '</span><span class="sa-strip">' . esc_html( sa_t( 'hero_s2' ) ) . '</span><span class="sa-strip">' . esc_html( sa_t( 'hero_s3' ) ) . '</span></h1>' . "\n"
		. "<!-- /wp:heading -->\n\n"
		. sa_p( 'sa-lead', esc_html( sa_t( 'hero_lead' ) ) )
		. sa_btns( 'sa-hero__btns', array( array( sa_t( 'hero_btn1' ), '/courses/', 'is-style-fill' ), array( sa_t( 'hero_btn2' ), '/plans/', 'is-style-outline' ) ) )
	)
	. sa_g( 'sa-hero__photo', sa_img( 'p01.webp', 'alt_p01', 'sa-ph' ) )
	. sa_g( 'sa-hlist', sa_p( 'sa-bracket', '[ ' . esc_html( sa_t( 'hero_list' ) ) . ' ]' ) . $courses )
	. sa_p( 'sa-ring', sa_lines( 'hero_ring' ) ),
	'section', 'full'
);
