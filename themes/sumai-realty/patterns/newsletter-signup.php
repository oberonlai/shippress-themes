<?php
/**
 * Title: Newsletter: sign-up
 * Slug: sumai-realty/newsletter-signup
 * Categories: sumai-realty
 * Keywords: newsletter, email, sign up, subscribe, listings
 * Viewport Width: 1440
 * Description: The newsletter heading, what subscribers get and an email sign-up form with an area choice (plain HTML: connect it to your email service).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sr-head sr-head--form","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sr-head sr-head--form"><!-- wp:group {"align":"wide","className":"sr-split sr-split--form","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sr-split sr-split--form"><!-- wp:group {"className":"sr-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group sr-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Sheet N-00 · Newsletter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sr-head__title"} -->
<h1 class="wp-block-heading sr-head__title">New listings, every Friday.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">One email a week with the homes that came on the sheet, the ones that went under offer and one number worth knowing. Pick an area, or take all three.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-dash"} -->
<ul class="wp-block-list is-style-dash"><!-- wp:list-item -->
<li>New listings before they go on the website</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Price changes and homes under offer</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>One market number, explained in a paragraph</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sr-card is-style-plan-frame","layout":{"type":"default"}} -->
<div class="wp-block-group sr-card is-style-plan-frame"><!-- wp:heading {"className":"sr-card__title"} -->
<h2 class="wp-block-heading sr-card__title">Get the Friday sheet</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="sr-form" action="#" method="post" onsubmit="return false;">
	<p class="sr-field"><label for="sr-n-email">Email</label><input id="sr-n-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="sr-field"><label for="sr-n-area">Area</label><select id="sr-n-area" name="area"><option>All three areas</option><option>Kitamachi</option><option>Sakuragaoka</option><option>Minato-dai</option></select></p>
	<p class="sr-field sr-field--check"><input id="sr-n-rent" type="checkbox" name="rentals" checked><label for="sr-n-rent">Include homes to rent</label></p>
	<p class="sr-field"><button class="wp-block-button__link wp-element-button" type="submit">Sign up</button></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"sr-small"} -->
<p class="sr-small">One email a week, never shared. Unsubscribe with one click.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
