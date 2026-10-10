<?php
/**
 * Title: Contact: page head, form and shop details
 * Slug: menya-kaen/contact-main
 * Categories: menya-kaen
 * Keywords: contact, form, address, hours, phone, email
 * Viewport Width: 1440
 * Description: The Contact page: heading, a message form (plain HTML: connect it to your form service) and the synced shop details.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mk-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mk-head"><!-- wp:group {"align":"wide","className":"mk-head__inner","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mk-head__inner"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Contact · No. 06</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"mk-head__title"} -->
<h1 class="wp-block-heading mk-head__title">Talk to<br>the counter.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">We do not take bookings. For groups, press, events or a big order of noodles to go, write here.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"mk-section mk-section--flush","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mk-section mk-section--flush"><!-- wp:group {"align":"wide","className":"mk-form-grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mk-form-grid"><!-- wp:group {"className":"mk-card mk-card--white","layout":{"type":"default"}} -->
<div class="wp-block-group mk-card mk-card--white"><!-- wp:heading {"className":"mk-card__title"} -->
<h2 class="wp-block-heading mk-card__title">Send a message</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="mk-form" action="#" method="post" onsubmit="return false;">
	<p class="mk-field mk-field--half"><label for="mk-c-name">Your name</label><input id="mk-c-name" type="text" name="name" autocomplete="name" required></p>
	<p class="mk-field mk-field--half"><label for="mk-c-email">Email</label><input id="mk-c-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="mk-field"><label for="mk-c-topic">About</label><select id="mk-c-topic" name="topic"><option>A group of five or more</option><option>Noodles or broth to go</option><option>Press and photos</option><option>Working at the counter</option><option>Something else</option></select></p>
	<p class="mk-field"><label for="mk-c-msg">Message</label><textarea id="mk-c-msg" name="message" rows="5" required></textarea></p>
	<p class="mk-field"><button class="wp-block-button__link wp-element-button" type="submit">Send</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mk-card mk-card--ink","layout":{"type":"default"}} -->
<div class="wp-block-group mk-card mk-card--ink"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The shop</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"menya-kaen/shop-info"} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/map/">How to find us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
