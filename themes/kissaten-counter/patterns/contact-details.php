<?php
/**
 * Title: Contact — write, call or come by
 * Slug: kissaten-counter/contact-details
 * Categories: kissaten-counter, contact
 * Keywords: contact, form, email, phone, address
 * Viewport Width: 1440
 * Description: A contact page opening with direct lines (address, phone, email) on the left and a plain HTML message form on a paper card (connect the action to your form handler).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-contact","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-contact" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60","top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"46%"} -->
<div class="wp-block-column" style="flex-basis:46%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kc-page-head__title","fontSize":"display"} -->
<h1 class="wp-block-heading kc-page-head__title has-display-font-size">Write, call, or <em>simply come by.</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">We do not take reservations, but we love letters: about beans, private mornings, wholesale blend, or the cup you would like us to keep for you.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-lines","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group kc-lines" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"kc-line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group kc-line"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Counter</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>3-12-4 Yanaka Lane</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group kc-line"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Telephone</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="tel:+81300001212">+81 3 0000 1212</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group kc-line"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Letters</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="mailto:hello@countertwelve.example">hello@countertwelve.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group kc-line"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Wholesale</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="mailto:beans@countertwelve.example">beans@countertwelve.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"is-style-hand"} -->
<p class="is-style-hand">we answer after closing, usually the same day</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"54%"} -->
<div class="wp-block-column" style="flex-basis:54%"><!-- wp:group {"className":"is-style-menu-card","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-menu-card"><!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size">Leave a note <em>on the counter</em></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="kc-form" action="#" method="post">
	<div class="kc-field">
		<label for="kc-c-name">Your name</label>
		<input id="kc-c-name" type="text" name="name" autocomplete="name" required>
	</div>
	<div class="kc-field">
		<label for="kc-c-email">Email</label>
		<input id="kc-c-email" type="email" name="email" placeholder="you@example.com" autocomplete="email" required>
	</div>
	<fieldset class="kc-field kc-choices">
		<legend>About</legend>
		<label><input type="radio" name="topic" value="hello" checked> Just hello</label>
		<label><input type="radio" name="topic" value="private"> A private morning</label>
		<label><input type="radio" name="topic" value="beans"> Beans &amp; wholesale</label>
		<label><input type="radio" name="topic" value="press"> Press</label>
	</fieldset>
	<div class="kc-field">
		<label for="kc-c-message">Message</label>
		<textarea id="kc-c-message" name="message" rows="5" required></textarea>
	</div>
	<button type="submit" class="wp-element-button">Send the note</button>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
