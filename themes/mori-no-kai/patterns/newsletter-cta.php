<?php
/**
 * Title: Newsletter — the Forest Letter sign-up band
 * Slug: mori-no-kai/newsletter-cta
 * Categories: mori-no-kai, call-to-action
 * Keywords: newsletter, email, subscribe, sign up
 * Viewport Width: 1440
 * Description: A tinted band inviting readers to the seasonal Forest Letter, with a single email field (plain HTML form: connect it to your email service).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mk-section mk-section--tint mk-letter","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mk-section mk-section--tint mk-letter"><!-- wp:group {"align":"wide","className":"mk-split mk-split--6-5 mk-split--end","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mk-split mk-split--6-5 mk-split--end"><!-- wp:group {"className":"mk-stack mk-stack--loose","layout":{"type":"default"}} -->
<div class="wp-block-group mk-stack mk-stack--loose"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The Forest Letter</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Four letters a year, <em>one per season</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mk-stack mk-stack--loose","layout":{"type":"default"}} -->
<div class="wp-block-group mk-stack mk-stack--loose"><!-- wp:paragraph -->
<p>What changed on the slopes, the next work days and one good photograph. Nothing else, and never shared.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="mk-form mk-form--inline" action="#" method="post" onsubmit="return false;">
	<p class="mk-field"><label for="mk-l-email">Email address</label><input id="mk-l-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="mk-field"><button class="wp-block-button__link wp-element-button" type="submit">Subscribe</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
