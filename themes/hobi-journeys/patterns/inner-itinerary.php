<?php
/**
 * Title: The Itinerary: standalone newsletter page (dark)
 * Slug: hobi-journeys/inner-itinerary
 * Categories: hobi-journeys
 * Viewport Width: 1440
 * Description: Deep navy newsletter page with the shared newsletter form slot, what the letter covers and three past issues.
 */
?>
<!-- wp:group {"className":"hj-section hj-lines hj-itpage hj-dark","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull hj-section hj-lines hj-itpage hj-dark"><!-- wp:group {"className":"hj-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group hj-narrow"><!-- wp:group {"className":"hj-itpage__top","layout":{"type":"default"}} -->
<div class="wp-block-group hj-itpage__top"><!-- wp:group {"className":"hj-itpage__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hj-itpage__txt"><!-- wp:heading {"level":1,"className":"hj-page-h hj-page-h--light"} -->
<h1 class="wp-block-heading hj-page-h hj-page-h--light">The Itinerary.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hj-lede"} -->
<p class="hj-lede">The Itinerary is our monthly publication for corporate leaders, sales directors, and people teams. Delivered on the first Tuesday of each month, it offers practical perspectives on group incentive travel.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The Itinerary is published on the first Tuesday of each month as a focused, concise email letter. Every issue features three practical elements: a detailed breakdown of one recently delivered trip, one professional planning note on group logistics or qualification rules, and confirmed release dates for upcoming travel seasons. We do not distribute advertising announcements or promotional circulars. The dispatch is designed specifically for executives managing sales teams of 20 to 120 people who value calm operational expertise over marketing rhetoric.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-itpage__form","layout":{"type":"default"}} -->
<div class="wp-block-group hj-itpage__form"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'hello@hobi-journeys.example',
	'label'   => hobi_journeys_t( 'forms_email' ),
	'submit'  => hobi_journeys_t( 'forms_subscribe' ),
	'notice'  => hobi_journeys_t( 'forms_mail_notice' ),
	'subject' => hobi_journeys_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-itpage__more","layout":{"type":"default"}} -->
<div class="wp-block-group hj-itpage__more"><!-- wp:heading {"level":2,"className":"hj-sec__h hj-sec__h--light"} -->
<h2 class="wp-block-heading hj-sec__h hj-sec__h--light">Recent notes and dispatch topics</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Recent issues of The Itinerary have addressed critical practical challenges in corporate incentive travel. Topics have examined why we still distribute printed boarding passes to guests at hotel check-in desks, how to draft a qualification rule that sales teams genuinely trust, and how to structure the first ten working days following a group's return flight. Readers can subscribe using their work email address without cost, and every recipient may unsubscribe immediately at any time using the link in the footer.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hj-rows hj-rows--issues","layout":{"type":"default"}} -->
<div class="wp-block-group hj-rows hj-rows--issues"><!-- wp:group {"className":"hj-row","layout":{"type":"default"}} -->
<div class="wp-block-group hj-row"><!-- wp:paragraph {"className":"hj-row__k"} -->
<p class="hj-row__k">6 Oct 2026</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hj-row__v"} -->
<p class="hj-row__v">Why we still hand out boarding passes</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-row","layout":{"type":"default"}} -->
<div class="wp-block-group hj-row"><!-- wp:paragraph {"className":"hj-row__k"} -->
<p class="hj-row__k">1 Sep 2026</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hj-row__v"} -->
<p class="hj-row__v">Writing a reward rule your team believes</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-row","layout":{"type":"default"}} -->
<div class="wp-block-group hj-row"><!-- wp:paragraph {"className":"hj-row__k"} -->
<p class="hj-row__k">4 Aug 2026</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hj-row__v"} -->
<p class="hj-row__v">The day after the return flight</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"hj-sec__h hj-sec__h--light"} -->
<h2 class="wp-block-heading hj-sec__h hj-sec__h--light">How often is The Itinerary published?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The Itinerary arrives exactly once per month, dispatched on the first Tuesday morning directly from our editorial desk at hello@hobi-journeys.example. We respect your attention and never send unscheduled bulletins or partner promotions between regular issues. If your travel dates change or you step down from organizing your company retreat, you can cancel your subscription with a single click. Our distribution records are managed in strict compliance with our privacy commitments and are never transferred to outside third parties.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
