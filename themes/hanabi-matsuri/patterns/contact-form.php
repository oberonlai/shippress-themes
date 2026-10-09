<?php
/**
 * Title: Contact — message form
 * Slug: hanabi-matsuri/contact-form
 * Categories: hanabi-matsuri
 * Keywords: contact, form, address, hours
 * Viewport Width: 1440
 * Description: A message form card (plain HTML: connect it to your form service) beside the office address, hours and phone.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"hm-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide hm-grid"><!-- wp:group {"style":{"layout":{"columnSpan":5},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-kicker"} -->
<p class="is-style-kicker">Write to the office</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Send <em>a message</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>For lost property, please tell us the night, where you were sitting and what it looks like. Everything found is kept at the office until 31 August.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hm-card","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group hm-card"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Festival office</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Minase Hanabi Committee<br>2-7 Kawabe-cho, Minase<br>Above the shopping street, second floor</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Mon — Fri, 10:00 — 17:00<br>Festival days 09:00 — 23:30</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="tel:+810000007300">+81 00 0000 7300</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"columnSpan":7,"columnStart":6}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:html -->
<form class="hm-form hm-form--card" action="#" method="post" onsubmit="return false;">
	<p class="hm-field hm-field--half"><label for="hm-c-name">Name</label><input id="hm-c-name" type="text" name="name" autocomplete="name" required></p>
	<p class="hm-field hm-field--half"><label for="hm-c-email">Email</label><input id="hm-c-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<fieldset class="hm-field hm-choice">
		<legend>About</legend>
		<label><input type="radio" name="topic" value="general" checked> The festival</label>
		<label><input type="radio" name="topic" value="passes"> Passes</label>
		<label><input type="radio" name="topic" value="access"> Access needs</label>
		<label><input type="radio" name="topic" value="press"> Press</label>
		<label><input type="radio" name="topic" value="other"> Something else</label>
	</fieldset>
	<p class="hm-field"><label for="hm-c-msg">Message</label><textarea id="hm-c-msg" name="message" rows="6" required></textarea></p>
	<label class="hm-consent"><input type="checkbox" name="consent" required> Use my details only to answer this message.</label>
	<p class="hm-field"><button class="wp-block-button__link wp-element-button" type="submit">Send message</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
