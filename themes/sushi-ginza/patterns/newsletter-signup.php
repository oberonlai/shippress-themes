<?php
/**
 * Title: Newsletter: signup
 * Slug: sushi-ginza/newsletter-signup
 * Categories: sushi-ginza
 * Keywords: newsletter, form
 * Viewport Width: 1440
 * Description: A plain signup form; connect it to your own email service.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sg-section sg-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sg-section sg-section--last"><!-- wp:group {"className":"sg-signup","layout":{"type":"default"}} -->
<div class="wp-block-group sg-signup"><!-- wp:html -->
<form class="sg-form" action="#" method="post" onsubmit="return false;">
	<p class="sg-field"><label for="sg-n-email">Your email</label><input id="sg-n-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="sg-field"><button class="wp-block-button__link wp-element-button" type="submit">Subscribe</button></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"sg-small"} -->
<p class="sg-small">Four letters a year. Unsubscribe with one click.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
