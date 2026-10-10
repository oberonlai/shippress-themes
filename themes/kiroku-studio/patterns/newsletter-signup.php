<?php
/**
 * Title: Newsletter: title and sign-up form
 * Slug: kiroku-studio/newsletter-signup
 * Categories: kiroku-studio
 * Keywords: newsletter, email, subscribe, sign up
 * Viewport Width: 1440
 * Description: The newsletter title card with what subscribers get and an email sign-up form (plain HTML: connect it to your email service).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-head ks-head--form","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-head ks-head--form"><!-- wp:group {"align":"wide","className":"ks-split ks-split--form","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-split ks-split--form"><!-- wp:group {"className":"ks-split__a","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split__a"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Newsletter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ks-head__title"} -->
<h1 class="wp-block-heading ks-head__title">The Contact Sheet.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">One email on the first Monday of the month: a frame from every project on the table, one thing we learned and one film worth your evening.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-dash"} -->
<ul class="wp-block-list is-style-dash"><!-- wp:list-item -->
<li>Work in progress before it is public</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>One short process note, with files</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Jobs and studio visits, first</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-split__b ks-panel","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split__b ks-panel"><!-- wp:heading {"className":"ks-card-title"} -->
<h2 class="wp-block-heading ks-card-title">Get the next one</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="ks-form" action="#" method="post" onsubmit="return false;">
	<p class="ks-field"><label for="ks-n-name">First name</label><input id="ks-n-name" type="text" name="name" autocomplete="given-name"></p>
	<p class="ks-field"><label for="ks-n-email">Email</label><input id="ks-n-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="ks-field ks-field--check"><input id="ks-n-films" type="checkbox" name="films" checked><label for="ks-n-films">Send me the monthly film too</label></p>
	<p class="ks-field"><button class="wp-block-button__link wp-element-button" type="submit">Subscribe</button></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ks-small"} -->
<p class="ks-small">Once a month, never shared. Unsubscribe with one click.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
