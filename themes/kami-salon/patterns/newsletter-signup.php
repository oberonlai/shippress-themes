<?php
/**
 * Title: Newsletter: sign-up
 * Slug: kami-salon/newsletter-signup
 * Categories: kami-salon
 * Keywords: newsletter, email, sign up, subscribe
 * Viewport Width: 1440
 * Description: The newsletter heading, what subscribers get, and an email sign-up form (plain HTML: connect it to your email service).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-head"><!-- wp:group {"align":"wide","className":"ks-head__inner","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-head__inner"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Newsletter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ks-head__title"} -->
<h1 class="wp-block-heading ks-head__title">The Cut List</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">One email a month: new looks from the chair, open slots for the next two weeks, and one honest hair-care tip. Nothing else.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ks-section ks-section--flush","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section ks-section--flush"><!-- wp:group {"align":"wide","className":"ks-form-grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-form-grid"><!-- wp:group {"className":"ks-form-card","layout":{"type":"default"}} -->
<div class="wp-block-group ks-form-card"><!-- wp:heading {"className":"ks-form-card__title"} -->
<h2 class="wp-block-heading ks-form-card__title">Join the list</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="ks-form ks-form--inline" action="#" method="post" onsubmit="return false;">
	<p class="ks-field"><label for="ks-n-email">Email</label><input id="ks-n-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="ks-field"><button class="wp-block-button__link wp-element-button" type="submit">Subscribe</button></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ks-fine"} -->
<p class="ks-fine">Once a month, on the first Tuesday. Unsubscribe with one click.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-form-side","layout":{"type":"default"}} -->
<div class="wp-block-group ks-form-side"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Each issue</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><strong>Last-minute chairs:</strong> cancellations go to the list first</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>The look:</strong> one cut or colour, and how to ask for it</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>One tip:</strong> what actually helps, and what to stop buying</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
