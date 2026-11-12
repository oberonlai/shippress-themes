<?php
/**
 * Title: Footer: wordmark, address, hours, links and newsletter
 * Slug: tochi-academy/footer-main
 * Categories: tochi-academy
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"ta-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ta-footer"><!-- wp:group {"className":"ta-footer__inner","layout":{"type":"default"}} -->
<div class="wp-block-group ta-footer__inner"><!-- wp:group {"className":"ta-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group ta-footer__col"><!-- wp:site-title {"level":0,"className":"ta-wordmark ta-wordmark--foot"} /-->

<!-- wp:paragraph {"className":"ta-footer__addr"} -->
<p class="ta-footer__addr">14 Linden Quay, Harbourside District, Westmere<br>+00 20 7000 0414 · <a href="mailto:office@tochi-academy.example">office@tochi-academy.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ta-footer__hours"} -->
<p class="ta-footer__hours">Classes Mon–Thu 18:45–21:30, Sat 09:30–13:00<br>Office Mon–Fri 12:00–21:30, Sat 09:00–13:30<br>Library until 21:45 · Closed Sundays except sitting days</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ta-footer__col ta-footer__links","layout":{"type":"default"}} -->
<div class="wp-block-group ta-footer__col ta-footer__links"><!-- wp:paragraph {"className":"ta-footer__h"} -->
<p class="ta-footer__h">The college</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/courses/">Courses</a><br><a href="/calendar/">Term calendar</a><br><a href="/instructors/">Instructors</a><br><a href="/fees/">Fees</a><br><a href="/stories/">Student stories</a><br><a href="/journal/">Journal</a><br><a href="/contact/">Contact</a><br><a href="/privacy/">Privacy</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ta-footer__col ta-footer__news","layout":{"type":"default"}} -->
<div class="wp-block-group ta-footer__col ta-footer__news"><!-- wp:paragraph {"className":"ta-footer__h"} -->
<p class="ta-footer__h">Newsletter</p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'office@tochi-academy.example',
	'label'   => tochi_academy_t( 'forms_email' ),
	'submit'  => tochi_academy_t( 'forms_subscribe' ),
	'notice'  => tochi_academy_t( 'forms_mail_notice' ),
	'subject' => tochi_academy_t( 'forms_mail_subject' ),
) ); ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ta-footer__legal"} -->
<p class="ta-footer__legal">© 2026 Tochi Academy. A fictional college; all names, places and figures are invented.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="ta-pagetop" href="#top" aria-label="<?php echo esc_attr( tochi_academy_t( 'pagetop_label' ) ); ?>"><svg viewBox="0 0 100 100" width="100" height="100" aria-hidden="true" focusable="false"><defs><path id="ta-circle" d="M50 50m-37 0a37 37 0 1 1 74 0a37 37 0 1 1 -74 0"/></defs><text><textPath href="#ta-circle" startOffset="0"><?php echo esc_html( tochi_academy_t( 'pagetop' ) ); ?></textPath></text><path d="M50 62V38M40 47l10-10 10 10" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group -->
