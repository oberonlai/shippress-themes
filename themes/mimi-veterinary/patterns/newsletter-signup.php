<?php
/**
 * Title: Newsletter: signup
 * Slug: mimi-veterinary/newsletter-signup
 * Categories: mimi-veterinary
 * Keywords: newsletter, form
 * Viewport Width: 1440
 * Description: A plain signup form; connect it to your own email service.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mv-section mv-section--last mv-newsletter","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mv-section mv-section--last mv-newsletter"><!-- wp:group {"className":"mv-narrow mv-card mv-signup","layout":{"type":"default"}} -->
<div class="wp-block-group mv-narrow mv-card mv-signup"><!-- wp:html -->
<form class="mv-form" action="#" method="post" onsubmit="return false;">
	<p class="mv-field"><label for="mv-n-email">Your email</label><input id="mv-n-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="mv-field"><button class="wp-block-button__link wp-element-button" type="submit">Subscribe</button></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"mv-small"} -->
<p class="mv-small">Four letters a year. Unsubscribe with one click.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
