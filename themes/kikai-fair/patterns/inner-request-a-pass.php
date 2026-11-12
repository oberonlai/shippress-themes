<?php
/**
 * Title: Inner: request a pass
 * Slug: kikai-fair/inner-request-a-pass
 * Categories: kikai-fair
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kf-phead kf-lattice","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-phead kf-lattice"><!-- wp:group {"align":"wide","className":"kf-phead__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kf-phead__in"><!-- wp:paragraph {"className":"kf-eyebrow"} -->
<p class="kf-eyebrow">Passes</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kf-phead__h"} -->
<h1 class="wp-block-heading kf-phead__h">Request a Pass</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kf-phead__lead"} -->
<p class="kf-phead__lead">Advance registration is required for entry to Kikai Fair 2027 at Hall 4, Riverside Exhibition Centre from 9 to 11 March 2027. Online pass requests close strictly on Sunday 21 February 2027.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="kf-chip">Online pass requests close on Sunday 21 February 2027.</p>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kf-bars-wrap","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-bars-wrap"><!-- wp:html -->
<div class="kf-bars kf-bars--top"><a class="kf-bar-door kf-bar-door--visitors" href="#step-1"><span class="kf-bar-door__s">For</span><span class="kf-bar-door__w">visitors</span><svg class="kf-bar-door__a" width="48" height="8" viewBox="0 0 48 8" aria-hidden="true" focusable="false"><path d="M0 4H47M42.5 .5 47 4l-4.5 3.5" fill="none" stroke="currentColor" stroke-width="1"/></svg></a><a class="kf-bar-door kf-bar-door--exhibitors" href="#prices"><span class="kf-bar-door__s">For</span><span class="kf-bar-door__w">exhibitors</span><svg class="kf-bar-door__a" width="48" height="8" viewBox="0 0 48 8" aria-hidden="true" focusable="false"><path d="M0 4H47M42.5 .5 47 4l-4.5 3.5" fill="none" stroke="currentColor" stroke-width="1"/></svg></a></div>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"step-1","className":"kf-value kf-value--inner kf-lattice","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-value kf-value--inner kf-lattice" id="step-1"><!-- wp:group {"align":"wide","className":"kf-value__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kf-value__in"><!-- wp:group {"className":"kf-value__text","layout":{"type":"default"}} -->
<div class="wp-block-group kf-value__text"><!-- wp:group {"className":"kf-num","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group kf-num"><!-- wp:paragraph {"className":"kf-vlabel"} -->
<p class="kf-vlabel">Step</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kf-numeral"} -->
<p class="kf-numeral">01</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"kf-value__h"} -->
<h2 class="wp-block-heading kf-value__h">Request your pass</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>First, submit your pass request through our registration portal or send your contact details to hello@kikaifair.example.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<?php
ob_start(); ?>
<a class="wp-element-button" href="mailto:hello@kikaifair.example?subject=<?php echo rawurlencode( kikai_fair_t( 'pass_request_subject' ) ); ?>"><?php echo esc_html( kikai_fair_t( 'pass_request_mail' ) ); ?></a>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kf-value__photo sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kf-value__photo sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="kf-photo"><img src="<?php echo kikai_fair_img( 'i01-build-up.webp' ); ?>" alt="Four organisers with tablets walking through the hall during build-up" width="1600" height="1067" loading="lazy"/></figure>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"step-2","className":"kf-value kf-value--inner kf-value--ochre kf-lattice kf-lattice--right","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-value kf-value--inner kf-value--ochre kf-lattice kf-lattice--right" id="step-2"><!-- wp:group {"align":"wide","className":"kf-value__in kf-value__in--flip","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kf-value__in kf-value__in--flip"><!-- wp:group {"className":"kf-value__photo sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kf-value__photo sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="kf-photo"><img src="<?php echo kikai_fair_img( 's01-pass-scan.webp' ); ?>" alt="A visitor's QR pass on a lanyard badge being scanned at an entrance gate" width="1600" height="1067" loading="lazy"/></figure>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kf-value__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kf-value__text sp-reveal sp-reveal--up"><!-- wp:group {"className":"kf-num","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group kf-num"><!-- wp:paragraph {"className":"kf-vlabel"} -->
<p class="kf-vlabel">Step</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kf-numeral"} -->
<p class="kf-numeral">02</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"kf-value__h"} -->
<h2 class="wp-block-heading kf-value__h">Receive your QR pass</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Second, our visitor services team verifies your trade information and delivers your official QR pass by email within two working days. Aiyana Brooks leads visitor services and oversees ticket distribution for all individual and corporate attendees.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"step-3","className":"kf-value kf-value--inner kf-lattice","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-value kf-value--inner kf-lattice" id="step-3"><!-- wp:group {"align":"wide","className":"kf-value__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kf-value__in"><!-- wp:group {"className":"kf-value__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kf-value__text sp-reveal sp-reveal--up"><!-- wp:group {"className":"kf-num","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group kf-num"><!-- wp:paragraph {"className":"kf-vlabel"} -->
<p class="kf-vlabel">Step</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kf-numeral"} -->
<p class="kf-numeral">03</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"kf-value__h"} -->
<h2 class="wp-block-heading kf-value__h">Scan it at the north entrance</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Third, present and scan your digital or printed QR pass at the Hall 4 north entrance turnstiles upon arrival in Lindmark. Please note that all online pass requests close on Sunday 21 February 2027.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kf-value__photo sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kf-value__photo sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="kf-photo"><img src="<?php echo kikai_fair_img( 'v03a-north-entrance.webp' ); ?>" alt="Visitors walking toward the glass north entrance of the Riverside Exhibition Centre" width="1600" height="1067" loading="lazy"/></figure>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"prices","className":"kf-value kf-value--inner kf-lattice","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-value kf-value--inner kf-lattice" id="prices"><!-- wp:group {"align":"wide","className":"kf-value__in kf-value__in--stack","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kf-value__in kf-value__in--stack"><!-- wp:group {"className":"kf-value__text","layout":{"type":"default"}} -->
<div class="wp-block-group kf-value__text"><!-- wp:heading {"className":"kf-value__h"} -->
<h2 class="wp-block-heading kf-value__h">What are the pass prices and exhibitor space rates?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Our official price schedule applies across all attendance categories. A pre-registered trade day pass is €25, and a three-day trade pass is €45. Apprentice and student day passes cost €10 and require a valid school ID card. Group passes for 5 people attending on one day cost €100. For equipment manufacturers, a 9-square-metre shell stand is priced at €2,700, while raw floor space costs €240 per square metre with an 18-square-metre minimum booking. Exhibitors wishing to present on stage can purchase a 30-minute live demonstration slot on the Demo Stage for €180.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ul class="kf-prices"><li><span class="kf-prices__n">Trade day pass (pre-registered)</span><span class="kf-prices__p">€25</span></li><li><span class="kf-prices__n">Three-day trade pass</span><span class="kf-prices__p">€45</span></li><li><span class="kf-prices__n">Apprentice / student day pass (with school ID)</span><span class="kf-prices__p">€10</span></li><li><span class="kf-prices__n">Group pass, 5 people, one day</span><span class="kf-prices__p">€100</span></li><li><span class="kf-prices__n">Shell stand 9 m² (exhibitor)</span><span class="kf-prices__p">€2,700</span></li><li><span class="kf-prices__n">Raw floor space, per m² (min. 18 m²)</span><span class="kf-prices__p">€240</span></li><li><span class="kf-prices__n">Live demonstration slot, 30 min on the Demo Stage</span><span class="kf-prices__p">€180</span></li></ul>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"groups","className":"kf-news kf-cta","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-news kf-cta" id="groups"><!-- wp:heading {"className":"kf-news__h"} -->
<h2 class="wp-block-heading kf-news__h">Who should I contact for group registrations and student passes?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kf-news__lead"} -->
<p class="kf-news__lead">If you are registering an apprentice class, a large workshop group, or require assistance with your pass application, contact Aiyana Brooks at the Kikai Fair Office. Joinery instructor Jonas Lindqvist demonstrated the value of student participation at the 2025 fair when he brought twelve apprentices with a dust meter to inspect extraction units across Zone D. Our office is located on the 3rd floor at 40 Quay Street, Lindmark, and is open Monday through Friday from 09:00 to 17:00. Submit inquiries by email to hello@kikaifair.example before the 21 February 2027 cutoff date.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kf-btn-line"} -->
<div class="wp-block-buttons kf-btn-line"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hello@kikaifair.example?subject=Group%20or%20student%20passes%2C%20Kikai%20Fair%202027">Email the visitor desk<svg class="kf-arrow" width="28" height="6" viewBox="0 0 28 6" aria-hidden="true" focusable="false"><path d="M0 3H27M23.5.5 27 3l-3.5 2.5" fill="none" stroke="currentColor" stroke-width="1"/></svg></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
