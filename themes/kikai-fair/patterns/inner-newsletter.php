<?php
/**
 * Title: Inner: newsletter early access
 * Slug: kikai-fair/inner-newsletter
 * Categories: kikai-fair
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kf-news kf-news--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-news kf-news--page"><!-- wp:heading {"level":1,"className":"kf-news__h"} -->
<h1 class="wp-block-heading kf-news__h">Early access to the floor plan</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kf-news__lead"} -->
<p class="kf-news__lead">Join the early-access list for the floor plan (due 15 January 2027), the exhibitor list and the demo timetable. We send four emails at most before the fair.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kf-news__form","layout":{"type":"default"}} -->
<div class="wp-block-group kf-news__form"><!-- wp:html -->
<?php
echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'hello@kikaifair.example',
	'label'   => kikai_fair_t( 'forms_email' ),
	'submit'  => kikai_fair_t( 'forms_subscribe' ),
	'notice'  => kikai_fair_t( 'forms_mail_notice' ),
	'subject' => kikai_fair_t( 'forms_mail_subject' ),
) );
?>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
