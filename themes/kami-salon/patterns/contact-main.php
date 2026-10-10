<?php
/**
 * Title: Contact: page head, form and salon details
 * Slug: kami-salon/contact-main
 * Categories: kami-salon
 * Keywords: contact, form, address, hours, phone, email
 * Viewport Width: 1440
 * Description: The Contact page: heading, a message form (plain HTML: connect it to your form service) and the synced salon details.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-head"><!-- wp:group {"align":"wide","className":"ks-head__inner","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-head__inner"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ks-head__title"} -->
<h1 class="wp-block-heading ks-head__title">Say hello</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Questions, gift vouchers, shoots or a job: write to us here. To book, the Booking page is quicker.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ks-section ks-section--flush","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section ks-section--flush"><!-- wp:group {"align":"wide","className":"ks-form-grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-form-grid"><!-- wp:group {"className":"ks-form-card","layout":{"type":"default"}} -->
<div class="wp-block-group ks-form-card"><!-- wp:heading {"className":"ks-form-card__title"} -->
<h2 class="wp-block-heading ks-form-card__title">Send a message</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="ks-form" action="#" method="post" onsubmit="return false;">
	<p class="ks-field ks-field--half"><label for="ks-c-name">Your name</label><input id="ks-c-name" type="text" name="name" autocomplete="name" required></p>
	<p class="ks-field ks-field--half"><label for="ks-c-email">Email</label><input id="ks-c-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="ks-field"><label for="ks-c-topic">About</label><select id="ks-c-topic" name="topic"><option>A question about a service</option><option>Gift vouchers</option><option>Shoots and collaborations</option><option>Working at Kami</option><option>Something else</option></select></p>
	<p class="ks-field"><label for="ks-c-msg">Message</label><textarea id="ks-c-msg" name="message" rows="5" required></textarea></p>
	<p class="ks-field"><button class="wp-block-button__link wp-element-button" type="submit">Send</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-form-side","layout":{"type":"default"}} -->
<div class="wp-block-group ks-form-side"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The salon</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"kami-salon/salon-info"} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/booking/">Book a chair instead</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
