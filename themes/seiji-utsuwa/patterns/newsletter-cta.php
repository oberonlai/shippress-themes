<?php
/**
 * Title: Kiln Letter — signup band
 * Slug: seiji-utsuwa/newsletter-cta
 * Categories: seiji-utsuwa, call-to-action
 * Keywords: newsletter, signup, email, kiln letter
 * Viewport Width: 1440
 * Description: A deep kiln-teal band with the newsletter name, a line about what it brings and an email field. Plain HTML form: connect it to your email service.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"su-section su-band su-band--kiln su-newsletter-cta","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull su-section su-band su-band--kiln su-newsletter-cta"><!-- wp:group {"align":"wide","className":"su-grid su-cta","layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide su-grid su-cta"><!-- wp:group {"className":"su-cta__copy","style":{"layout":{"columnSpan":7}},"layout":{"type":"default"}} -->
<div class="wp-block-group su-cta__copy"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The Kiln Letter</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">New pieces, <em>before</em> the shop.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"su-small"} -->
<p class="su-small">One letter after each kiln opening, about six a year. Subscribers see the new work two days before it goes online.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"su-cta__form","style":{"layout":{"columnSpan":5}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"bottom"}} -->
<div class="wp-block-group su-cta__form"><!-- wp:html -->
<form class="su-form su-form--inline" action="#" method="post">
	<p class="su-field su-field--grow"><label for="su-cta-email" class="screen-reader-text">Email address</label><input id="su-cta-email" type="email" name="email" autocomplete="email" placeholder="name@example.com" required></p>
	<p class="su-field"><button type="submit" class="wp-element-button">Subscribe</button></p>
	<p class="su-form__note">No spam, no discounts in disguise. Leave with one click.</p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
