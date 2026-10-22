<?php
/**
 * Title: Page: contact
 * Slug: kazu-data-course/page-contact
 * Categories: kazu-data-course
 * Inserter: false
 */
$f = '<!-- wp:html -->' . "\n" . '<form class="kz-form" action="mailto:hello@kazu-data-course.example" method="post" enctype="text/plain"><p><label for="kz-n">' . kz_x( 'Your name' ) . '</label><input id="kz-n" name="name" type="text" autocomplete="name"/></p><p><label for="kz-e">' . kz_x( 'Email' ) . '</label><input id="kz-e" name="email" type="email" autocomplete="email"/></p><p><label for="kz-m">' . kz_x( 'Your question' ) . '</label><textarea id="kz-m" name="message" rows="5"></textarea></p><p><button class="wp-element-button" type="submit">' . kz_x( 'Send message' ) . '</button></p></form>' . "\n<!-- /wp:html -->\n\n";
echo kz_sub( 'Email support Mon–Fri 09:00–17:00 CET.' )
. kz_g( 'kz-sec kz-inner',
	kz_g( 'kz-split',
		kz_win( 'p18-study.webp', 'A quiet study corner with a wooden desk by a window over a brick canal-side street', 'Rotterdam', '34', 'sp-reveal sp-reveal--up' )
		. kz_g( 'kz-split__text',
			kz_t( 'Write to us with a question about the course, a team licence or an invoice. A person reads every message.', 'kz-lead' )
			. kz_g( 'kz-facts',
				kz_p( 'kz-fact', '<strong>' . kz_x( 'Email' ) . '</strong><br>hello@kazu-data-course.example' )
				. kz_p( 'kz-fact', '<strong>' . kz_x( 'Support hours' ) . '</strong><br>' . kz_x( 'Mon–Fri 09:00–17:00 CET, reply within 2 working days' ) )
				. kz_p( 'kz-fact', '<strong>' . kz_x( 'Live Q&A' ) . '</strong><br>' . kz_x( 'Every Thursday 18:00–19:00 CET' ) )
				. kz_p( 'kz-fact', '<strong>' . kz_x( 'Studio' ) . '</strong><br>Kadekamer 14, 3011 AB Rotterdam, Netherlands' )
			)
			. $f
		)
	),
	'section', 'full'
);
