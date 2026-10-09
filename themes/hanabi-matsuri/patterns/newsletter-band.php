<?php
/**
 * Title: Newsletter band
 * Slug: hanabi-matsuri/newsletter-band
 * Categories: hanabi-matsuri, call-to-action
 * Keywords: newsletter, signup, email, subscribe, call to action
 * Viewport Width: 1440
 * Description: A centred sign-up for the newsletter inside a turning sunburst: a big title, one line and an email field (plain HTML form: connect it to your email service).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"is-style-burst hm-cta","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"980px"}} -->
<section class="wp-block-group alignfull is-style-burst hm-cta" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The Fuse · our letter, about once a month</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"is-style-poster"} -->
<h2 class="wp-block-heading is-style-poster">Be first <em>when it lights</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Passes go on sale on 1 May 2027 at 10:00. Readers of The Fuse hear about it a week before, with the full lineup.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="hm-form hm-form--letter" action="#" method="post" onsubmit="return false;">
	<label class="screen-reader-text" for="hm-band-email">Email address</label>
	<div class="hm-form__row">
		<input id="hm-band-email" type="email" name="email" placeholder="you@example.com" autocomplete="email" required>
		<button class="wp-block-button__link wp-element-button" type="submit">Sign me up</button>
	</div>
	<p class="hm-form__note">No spam, no sharing. One click to leave.</p>
</form>
<!-- /wp:html --></section>
<!-- /wp:group -->
