<?php
/**
 * Title: Newsletter: sign up
 * Slug: undo-ba/newsletter-signup
 * Categories: undo-ba
 * Keywords: newsletter, email, signup
 * Description: A short description and an email form.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ub-section ub-newsletter","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ub-section ub-newsletter"><!-- wp:paragraph {"className":"is-style-lead ub-narrow"} -->
<p class="is-style-lead ub-narrow">One letter a month: a short training note from a coach, the coming month's timetable changes and the occasional open-floor invitation. Nothing else.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"is-style-card ub-form-card","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card ub-form-card"><!-- wp:html -->
<form class="ub-form ub-form--inline" action="#" method="post" onsubmit="return false;">
<p><label for="ub-news-email">Email</label>
<input id="ub-news-email" type="email" name="email" autocomplete="email" required></p>
<p><button type="submit" class="wp-element-button">Subscribe</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
