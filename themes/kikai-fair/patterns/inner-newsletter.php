<?php
/**
 * Title: Inner: newsletter early access
 * Slug: kikai-fair/inner-newsletter
 * Categories: kikai-fair
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kf-floor kf-floor--short","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-floor kf-floor--short"><!-- wp:html -->
<div class="kf-floor__facets" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"kf-floor__head","layout":{"type":"default"}} -->
<div class="wp-block-group kf-floor__head"><!-- wp:paragraph {"className":"kf-eyebrow kf-eyebrow--dark"} -->
<p class="kf-eyebrow kf-eyebrow--dark">Early access</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kf-floor__title"} -->
<h1 class="wp-block-heading kf-floor__title">Early Access and Floor Updates</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kf-floor__lead"} -->
<p class="kf-floor__lead">Join the Kikai Fair waitlist to receive official technical floor releases and scheduling notices ahead of the 2027 edition. We send a maximum of four bulletins prior to our opening at Hall 4 on 9 March 2027.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"join","className":"kf-news kf-news--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-news kf-news--page" id="join"><!-- wp:heading {"className":"kf-news__h"} -->
<h2 class="wp-block-heading kf-news__h">Join the early-access list</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kf-news__lead"} -->
<p class="kf-news__lead">One email address, four messages at most before the fair on 9 March 2027.</p>
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

<!-- wp:group {"tagName":"section","align":"full","anchor":"receive","className":"kf-value kf-value--inner kf-lattice","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-value kf-value--inner kf-lattice" id="receive"><!-- wp:group {"align":"wide","className":"kf-value__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kf-value__in"><!-- wp:group {"className":"kf-value__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kf-value__text sp-reveal sp-reveal--up"><!-- wp:group {"className":"kf-num","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group kf-num"><!-- wp:paragraph {"className":"kf-vlabel"} -->
<p class="kf-vlabel">Part</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kf-numeral"} -->
<p class="kf-numeral">01</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"kf-value__h"} -->
<h2 class="wp-block-heading kf-value__h">What information will early-access subscribers receive before the fair?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Subscribing to our newsletter gives commercial workshops and machinery buyers immediate access to crucial planning documents before public release. Subscribers receive three specific releases: the official Hall 4 floor plan on 15 January 2027 detailing the layout across 22,000 square metres, the verified exhibitor directory featuring all 180 participating manufacturers across four zones, and the complete Demo Stage timetable hosted by Lena Vogt. These materials allow your technical team to map stand visits, review scheduled cutting demonstrations, and book afternoon buyer meetings with equipment specialists before arriving at the Riverside Exhibition Centre.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ul class="kf-rules"><li>The Hall 4 floor plan, due 15 January 2027</li><li>The verified exhibitor directory, 180 exhibitors in four zones</li><li>The Demo Stage timetable hosted by Lena Vogt</li></ul>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kf-value__photo sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kf-value__photo sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="kf-photo"><img src="<?php echo kikai_fair_img( 'm01-north-queue.webp' ); ?>" alt="Morning visitors with lanyards waiting outside the glass north entrance doors" width="1600" height="1067" loading="lazy"/></figure>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"often","className":"kf-value kf-value--inner kf-lattice","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-value kf-value--inner kf-lattice" id="often"><!-- wp:group {"align":"wide","className":"kf-value__in kf-value__in--stack","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kf-value__in kf-value__in--stack"><!-- wp:group {"className":"kf-value__text","layout":{"type":"default"}} -->
<div class="wp-block-group kf-value__text"><!-- wp:heading {"className":"kf-value__h"} -->
<h2 class="wp-block-heading kf-value__h">How often will newsletters be sent to subscribers?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We respect your inbox and operate a strictly restricted dispatch schedule. Our editorial team issues a maximum of four emails prior to the fair opening on Tuesday 9 March 2027. You will receive an initial confirmation, the floor plan release on 15 January 2027, the verified machinery timetable, and a final operational briefing outlining transport and entry procedures. Communications are managed directly by the Kikai Fair Office, 3rd floor, 40 Quay Street, Lindmark. You can update your contact details or unsubscribe at any time by contacting hello@kikaifair.example.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kf-btn-line"} -->
<div class="wp-block-buttons kf-btn-line"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/programme/">See the programme<svg class="kf-arrow" width="28" height="6" viewBox="0 0 28 6" aria-hidden="true" focusable="false"><path d="M0 3H27M23.5.5 27 3l-3.5 2.5" fill="none" stroke="currentColor" stroke-width="1"/></svg></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
