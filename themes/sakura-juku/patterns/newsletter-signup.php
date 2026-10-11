<?php
/**
 * Title: Newsletter: sign-up
 * Slug: sakura-juku/newsletter-signup
 * Categories: sakura-juku
 * Keywords: newsletter, email, signup, form
 * Viewport Width: 1280
 * Description: A sign-up form in a rounded card with a sticker, beside a sky card listing what the letter contains.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sj-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sj-section"><!-- wp:group {"align":"wide","className":"sj-bento sj-bento--duo","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sj-bento sj-bento--duo"><!-- wp:group {"className":"is-style-card sj-cell sj-signup sj-sticker sj-kana-a","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card sj-cell sj-signup sj-sticker sj-kana-a"><!-- wp:heading -->
<h2 class="wp-block-heading">Get the letter</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="sj-form sj-form--letter" action="#" method="post" onsubmit="return false;">
	<p class="sj-field"><label for="sj-nl-name">Your first name</label><input id="sj-nl-name" type="text" name="name" autocomplete="given-name"></p>
	<p class="sj-field"><label for="sj-nl-email">Your email</label><input id="sj-nl-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="sj-field"><label for="sj-nl-level">Your level (if you know it)</label><select id="sj-nl-level" name="level"><option>Not sure yet</option><option>Seed</option><option>Sprout</option><option>Bud</option><option>Bloom</option><option>Canopy</option></select></p>
	<p class="sj-field sj-field--submit"><button class="wp-block-button__link wp-element-button" type="submit">Send me the letter</button></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"sj-small"} -->
<p class="sj-small">Once a month, on the first Monday. Unsubscribe with one click.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-sky sj-cell sj-signup__what","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-sky sj-cell sj-signup__what"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">In the letter</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-dots"} -->
<ul class="wp-block-list is-style-dots"><!-- wp:list-item -->
<li>One study tip from a teacher</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The word of the month, with a picture</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>What is new in the classrooms</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dates of the next free trial lessons</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
