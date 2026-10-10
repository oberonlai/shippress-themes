<?php
/**
 * Title: Booking: request form beside the salon details
 * Slug: kami-salon/booking-form
 * Categories: kami-salon
 * Keywords: booking, form, appointment, request
 * Viewport Width: 1440
 * Description: A booking request form on a dark card (plain HTML: connect it to your booking or form service) beside the synced salon details.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-section ks-section--flush","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section ks-section--flush"><!-- wp:group {"align":"wide","className":"ks-form-grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-form-grid"><!-- wp:group {"className":"ks-form-card","layout":{"type":"default"}} -->
<div class="wp-block-group ks-form-card"><!-- wp:heading {"className":"ks-form-card__title"} -->
<h2 class="wp-block-heading ks-form-card__title">Your request</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="ks-form" action="#" method="post" onsubmit="return false;">
	<p class="ks-field ks-field--half"><label for="ks-b-name">Your name</label><input id="ks-b-name" type="text" name="name" autocomplete="name" required></p>
	<p class="ks-field ks-field--half"><label for="ks-b-email">Email</label><input id="ks-b-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="ks-field ks-field--half"><label for="ks-b-phone">Phone (for a text)</label><input id="ks-b-phone" type="tel" name="phone" autocomplete="tel"></p>
	<p class="ks-field ks-field--half"><label for="ks-b-service">Service</label><select id="ks-b-service" name="service"><option>Consultation only</option><option>Precision cut</option><option>Short cut refresh</option><option>Restyle</option><option>Single colour</option><option>Neon gloss</option><option>Hidden panel or streak</option><option>Bleach and tone</option><option>Dry-cut curls</option><option>Gloss treatment</option><option>Blow-dry and style</option></select></p>
	<p class="ks-field ks-field--half"><label for="ks-b-stylist">Stylist</label><select id="ks-b-stylist" name="stylist"><option>Anyone, match me</option><option>Mika Kirishima</option><option>Ren Aoki</option><option>Noa Fujikawa</option></select></p>
	<p class="ks-field ks-field--half"><label for="ks-b-date">Preferred day</label><input id="ks-b-date" type="date" name="date"></p>
	<p class="ks-field"><label for="ks-b-times">Two times that work for you</label><input id="ks-b-times" type="text" name="times" placeholder="For example: Thursday after 18:00, or Saturday morning"></p>
	<p class="ks-field"><label for="ks-b-msg">Tell us about your hair (what you have now, what you want, any colour in the last year)</label><textarea id="ks-b-msg" name="message" rows="4"></textarea></p>
	<label class="ks-consent"><input type="checkbox" name="consent" required> Use my details only to arrange this appointment.</label>
	<p class="ks-field"><button class="wp-block-button__link wp-element-button" type="submit">Send my request</button></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ks-fine"} -->
<p class="ks-fine">This is a request, not a confirmed booking. We hold the time once we have replied.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-form-side","layout":{"type":"default"}} -->
<div class="wp-block-group ks-form-side"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Find us</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"kami-salon/salon-info"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
