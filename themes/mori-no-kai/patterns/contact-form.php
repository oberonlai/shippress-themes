<?php
/**
 * Title: Contact — message form and addresses
 * Slug: mori-no-kai/contact-form
 * Categories: mori-no-kai
 * Keywords: contact, form, email, address, phone
 * Viewport Width: 1440
 * Description: A message form card (plain HTML: connect it to your form service) beside the office address, hours, phone and the right email for each question.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mk-section mk-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mk-section mk-section--flush-top"><!-- wp:group {"align":"wide","className":"mk-split mk-split--4-7","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mk-split mk-split--4-7"><!-- wp:group {"className":"mk-address","layout":{"type":"default"}} -->
<div class="wp-block-group mk-address"><!-- wp:group {"className":"mk-stack","layout":{"type":"default"}} -->
<div class="wp-block-group mk-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Field office</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Mori no Kai — Cedar Valley Forest Trust<br>Old Forestry School, 4-12 Sugidani<br>Cedar Valley, Japan</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mk-stack","layout":{"type":"default"}} -->
<div class="wp-block-group mk-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Open</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Tuesday to Saturday, 9:00 to 16:00<br>Closed on work-day Saturdays (we are up the hill)</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mk-stack","layout":{"type":"default"}} -->
<div class="wp-block-group mk-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Who to write to</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>General: <a href="mailto:hello@morinokai.example">hello@morinokai.example</a><br>Volunteering: <a href="mailto:volunteer@morinokai.example">volunteer@morinokai.example</a><br>Giving: <a href="mailto:give@morinokai.example">give@morinokai.example</a><br>Phone: <a href="tel:+810000004120">+81 00 0000 4120</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="mk-form mk-form-card" action="#" method="post" onsubmit="return false;">
	<p class="mk-field mk-field--half"><label for="mk-c-name">Name</label><input id="mk-c-name" type="text" name="name" autocomplete="name" required></p>
	<p class="mk-field mk-field--half"><label for="mk-c-email">Email</label><input id="mk-c-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<fieldset class="mk-field mk-choice">
		<legend>About</legend>
		<label><input type="radio" name="topic" value="general" checked> A question</label>
		<label><input type="radio" name="topic" value="volunteer"> Volunteering</label>
		<label><input type="radio" name="topic" value="give"> Giving</label>
		<label><input type="radio" name="topic" value="school"> A school visit</label>
		<label><input type="radio" name="topic" value="press"> Press</label>
	</fieldset>
	<p class="mk-field"><label for="mk-c-msg">Message</label><textarea id="mk-c-msg" name="message" rows="6" required></textarea></p>
	<label class="mk-consent"><input type="checkbox" name="consent" required> Use my details only to answer this message.</label>
	<p class="mk-field"><button class="wp-block-button__link wp-element-button" type="submit">Send message</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
