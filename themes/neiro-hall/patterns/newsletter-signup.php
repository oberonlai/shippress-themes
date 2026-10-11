<?php
/**
 * Title: Newsletter: signup
 * Slug: neiro-hall/newsletter-signup
 * Categories: neiro-hall
 * Keywords: newsletter, form
 * Viewport Width: 1440
 * Description: A plain signup form; connect it to your own email service.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nh-section nh-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull nh-section nh-section--last"><!-- wp:group {"className":"nh-signup","layout":{"type":"default"}} -->
<div class="wp-block-group nh-signup"><!-- wp:html -->
<form class="nh-form" action="#" method="post" onsubmit="return false;">
	<p class="nh-field"><label for="nh-n-email">Your email</label><input id="nh-n-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="nh-field"><button class="wp-block-button__link wp-element-button" type="submit">Subscribe</button></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"nh-small"} -->
<p class="nh-small">Twelve letters a year. Unsubscribe with one click.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
