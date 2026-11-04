<?php
/**
 * Title: Page: Contact
 * Slug: tayori-nursing/page-contact
 * Categories: tayori-nursing
 * Keywords: nursing, home visit
 * Viewport Width: 1440
 * Inserter: no
 * Description: Contact page: pebble head, office details, a plain form and short answers.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tn-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tn-phead"><!-- wp:group {"className":"tn-phead__field","layout":{"type":"default"}} -->
<div class="wp-block-group tn-phead__field"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tn-pebble tn-pebble--a tn-ph1 sp-parallax"} -->
<figure class="wp-block-image size-full tn-pebble tn-pebble--a tn-ph1 sp-parallax"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p15-office.webp' ) ); ?>" alt="Small single-storey office on a tree-lined street with a bicycle parked outside."/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tn-pebble tn-pebble--b tn-ph2 sp-parallax"} -->
<figure class="wp-block-image size-full tn-pebble tn-pebble--b tn-ph2 sp-parallax"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p04-door.webp' ) ); ?>" alt="Nurse's bag and shoes inside an open front door in morning light."/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tn-doodle tn-phd"} -->
<figure class="wp-block-image size-full tn-doodle tn-phd"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/d1-nurse.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-phead__inner tn-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tn-phead__inner tn-wrap"><!-- wp:paragraph {"className":"tn-label"} -->
<p class="tn-label">Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"tn-phead__title"} -->
<h1 class="wp-block-heading tn-phead__title">Contact &amp; Service Area</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tn-phead__lead"} -->
<p class="tn-phead__lead">Reach out to our Linden Vale office to ask a question, discuss home-visit care, or schedule an initial kitchen-table assessment.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<svg class="tn-phead__wave" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true" focusable="false"><path d="M0 72C200 30 440 10 700 44S1120 108 1440 26V120H0Z"/></svg>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tn-sec tn-contact","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tn-sec tn-contact"><!-- wp:group {"align":"wide","className":"tn-contact__grid tn-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tn-contact__grid tn-wrap"><!-- wp:group {"className":"tn-contact__info","layout":{"type":"default"}} -->
<div class="wp-block-group tn-contact__info"><!-- wp:group {"className":"tn-info","layout":{"type":"default"}} -->
<div class="wp-block-group tn-info"><!-- wp:heading {"className":"tn-info__h"} -->
<h2 class="wp-block-heading tn-info__h">Office Location and Operating Hours</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tayori Nursing is based at 14 Orchard Row in Linden Vale. Our administrative office is open Monday through Saturday from 8:30 to 18:00, and closed on Sundays and public holidays. Our visiting nurses and therapists provide scheduled home care seven days a week between 8:00 and 20:00. Registered patients have round-the-clock access to our 24-hour clinical on-call line for urgent evening and overnight assistance.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-info","layout":{"type":"default"}} -->
<div class="wp-block-group tn-info"><!-- wp:heading {"className":"tn-info__h"} -->
<h2 class="wp-block-heading tn-info__h">Service Area Boundary</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>To ensure punctual arrivals and responsive local care, we serve residential homes located within an 8 km radius of our 14 Orchard Row office. This catchment area allows our clinicians to reach any patient's doorstep in approximately 20 minutes by bicycle or car. If you are uncertain whether your address falls within our Linden Vale boundary, please contact our office coordinator.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-info","layout":{"type":"default"}} -->
<div class="wp-block-group tn-info"><!-- wp:heading {"className":"tn-info__h"} -->
<h2 class="wp-block-heading tn-info__h">Getting in Touch</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>You can contact our care-plan coordinator Elise Moreau by telephone at +1 555 0147 or via email at hello@tayori-nursing.example. When you leave a message or send an inquiry, we respond within one working day. We will discuss your circumstances, answer your initial questions about fees and schedules, and arrange a convenient 60-minute kitchen-table assessment visit in your home.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tn-info__line"} -->
<p class="tn-info__line">Phone +1 555 0147 · hello@tayori-nursing.example · 14 Orchard Row, Linden Vale</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group tn-contact__form"><!-- wp:paragraph {"className":"tn-label"} -->
<p class="tn-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tn-h2"} -->
<h2 class="wp-block-heading tn-h2">Ask a question</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="tn-form" action="mailto:hello@tayori-nursing.example" method="post" enctype="text/plain">
<p class="tn-form__row"><label for="tn-f-name">Your name</label><input id="tn-f-name" name="name" type="text" autocomplete="name" required></p>
<p class="tn-form__row"><label for="tn-f-mail">Email</label><input id="tn-f-mail" name="email" type="email" autocomplete="email" required></p>
<p class="tn-form__row"><label for="tn-f-tel">Phone (optional)</label><input id="tn-f-tel" name="phone" type="tel" autocomplete="tel"></p>
<p class="tn-form__row"><label for="tn-f-msg">How can we help?</label><textarea id="tn-f-msg" name="message" rows="5"></textarea></p>
<div class="wp-block-button"><button type="submit" class="wp-block-button__link wp-element-button">Send message</button></div>
<p class="tn-form__note">We reply within one working day. For an emergency, call your local emergency number.</p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tn-sec tn-fees","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tn-sec tn-fees"><!-- wp:group {"align":"wide","className":"tn-fees__card tn-fees__card--stack tn-qa-card tn-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tn-fees__card tn-fees__card--stack tn-qa-card tn-wrap"><!-- wp:paragraph {"className":"tn-label"} -->
<p class="tn-label">Short answers</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tn-h2"} -->
<h2 class="wp-block-heading tn-h2">Before you call</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"tn-qa","layout":{"type":"default"}} -->
<div class="wp-block-group tn-qa"><!-- wp:heading {"level":3,"className":"tn-qa__q"} -->
<h3 class="wp-block-heading tn-qa__q">How do I know if my street is within your 8 km boundary?</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Our 8 km operating perimeter extends across central Linden Vale and its immediate surrounding residential neighborhoods. If your residence can be reached from 14 Orchard Row in roughly 20 minutes by road or bicycle, you are within our service territory. Feel free to telephone +1 555 0147 with your street address, and we will confirm our service availability immediately.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-qa","layout":{"type":"default"}} -->
<div class="wp-block-group tn-qa"><!-- wp:heading {"level":3,"className":"tn-qa__q"} -->
<h3 class="wp-block-heading tn-qa__q">How quickly can a nurse visit after my first phone call?</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Following your initial telephone call or message, Elise Moreau contacts you within one working day. We generally arrange the kitchen-table assessment visit within two to three working days. In situations where an individual is being discharged from a hospital ward, we coordinate dates directly with the hospital discharge team to ensure visits begin the day you return home.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
