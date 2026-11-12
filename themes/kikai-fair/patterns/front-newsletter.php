<?php
/**
 * Title: Home: early-access newsletter
 * Slug: kikai-fair/front-newsletter
 * Categories: kikai-fair
 * Keywords: newsletter, signup
 * Viewport Width: 1440
 * Description: Sand band with a centred title, one line of lead and the newsletter slot (email field and submit).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kf-news","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-news" id="newsletter"><!-- wp:heading {"level":3,"className":"kf-news__h"} -->
<h3 class="wp-block-heading kf-news__h">Hear first when the floor plan is out</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kf-news__lead"} -->
<p class="kf-news__lead">The floor plan is due on 15 January 2027, followed by the exhibitor list and the demo timetable: four emails at most before the fair.</p>
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
