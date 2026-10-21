<?php
/**
 * Title: Page: newsletter
 * Slug: kazu-data-course/page-newsletter
 * Categories: kazu-data-course
 * Inserter: false
 */
$f = '<!-- wp:html -->' . "\n" . '<form class="kz-form" action="mailto:hello@kazu-data-course.example" method="post" enctype="text/plain"><p><label for="kz-ne">' . kz_x( 'Email' ) . '</label><input id="kz-ne" name="email" type="email" autocomplete="email"/></p><p><button class="wp-element-button" type="submit">' . kz_x( 'Subscribe' ) . '</button></p></form>' . "\n<!-- /wp:html -->\n\n";
echo kz_sub( 'One short email a month. No tracking pixels, no sales countdowns.' )
. kz_g( 'kz-sec kz-inner',
	kz_g( 'kz-split',
		kz_win( 'p18-study.webp', 'A quiet study corner with a wooden desk by a window over a brick canal-side street', 'Rotterdam', '34', 'sp-reveal sp-reveal--up' )
		. kz_g( 'kz-split__text',
			kz_t( 'Once a month Kazu sends one worked example, one chart worth a second look and the date of the next live Q&A. Unsubscribe with one click.', 'kz-lead' )
			. $f
		)
	),
	'section', 'full'
);
