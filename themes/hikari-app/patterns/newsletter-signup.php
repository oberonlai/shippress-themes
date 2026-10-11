<?php
/**
 * Title: Newsletter: signup
 * Slug: hikari-app/newsletter-signup
 * Categories: hikari-app
 * Keywords: newsletter, form
 * Viewport Width: 1440
 * Description: A plain signup form; connect it to your own email service.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ha-section ha-signup-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ha-section ha-signup-section"><!-- wp:group {"className":"ha-signup","layout":{"type":"default"}} -->
<div class="wp-block-group ha-signup"><!-- wp:html -->
<form class="ha-form" action="#" method="post" onsubmit="return false;">
	<p class="ha-field"><label for="ha-n-email">Your email</label><input id="ha-n-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="ha-field"><button class="wp-block-button__link wp-element-button" type="submit">Subscribe</button></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ha-small"} -->
<p class="ha-small">Twelve letters a year. Unsubscribe with one click.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
