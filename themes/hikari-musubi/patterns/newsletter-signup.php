<?php
/**
 * Title: Newsletter: sign up
 * Slug: hikari-musubi/newsletter-signup
 * Categories: hikari-musubi
 * Keywords: newsletter, email, subscribe
 * Description: A short note about the seasonal letter and a plain email form.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hm-section hm-newsletter","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-section hm-newsletter"><!-- wp:paragraph {"align":"center","className":"is-style-lead hm-centre"} -->
<p class="has-text-align-center is-style-lead hm-centre">Four times a year, at the turn of each season, we send a short letter: one wedding we planned, one venue worth knowing and one small idea you can borrow. No offers and no tracking.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"is-style-card hm-signup","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card hm-signup"><!-- wp:html -->
<form class="hm-form hm-form--inline" action="#" method="post" onsubmit="return false;">
<label for="hm-news-email">Email address</label>
<input id="hm-news-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required>
<button type="submit" class="wp-element-button">Send me the letter</button>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"align":"center","className":"hm-small"} -->
<p class="has-text-align-center hm-small">Connect this form to your own email service. You can leave the list at any time.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
