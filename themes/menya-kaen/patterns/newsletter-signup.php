<?php
/**
 * Title: Newsletter: sign-up form
 * Slug: menya-kaen/newsletter-signup
 * Categories: menya-kaen
 * Keywords: newsletter, email, sign up, form
 * Viewport Width: 1440
 * Description: A sign-up form (plain HTML: connect it to your email service) and one line of reassurance.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mk-section mk-section--flush","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mk-section mk-section--flush"><!-- wp:group {"className":"mk-signup","layout":{"type":"default"}} -->
<div class="wp-block-group mk-signup"><!-- wp:html -->
<form class="mk-form mk-form--inline" action="#" method="post" onsubmit="return false;">
	<p class="mk-field"><label for="mk-n-email">Your email</label><input id="mk-n-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="mk-field"><button class="wp-block-button__link wp-element-button" type="submit">Subscribe</button></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"mk-small"} -->
<p class="mk-small">Four letters a year. Unsubscribe with one click.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
