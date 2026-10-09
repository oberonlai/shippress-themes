<?php
/**
 * Title: Contact — message form
 * Slug: beni-kappo/contact-form
 * Categories: beni-kappo, contact
 * Keywords: contact, form, message, enquiry
 * Viewport Width: 1440
 * Description: A short note on what to write about beside a lacquer message form with name, email, subject and message (plain HTML: connect the action to your form service).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bk-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull bk-section" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"bk-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide bk-grid"><!-- wp:group {"style":{"layout":{"columnSpan":4,"columnStart":1},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-kicker"} -->
<p class="is-style-kicker">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">A note <em>to the counter</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>For reservations, please use the <a href="/reservations/#reserve">reservation request</a>: it reaches the book directly. Everything else comes here.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="bk-form bk-form--card bk-reveal" action="#" method="post">
	<div class="bk-field bk-field--half">
		<label for="bk-c-name">Name</label>
		<input id="bk-c-name" type="text" name="name" autocomplete="name" required>
	</div>
	<div class="bk-field bk-field--half">
		<label for="bk-c-email">Email</label>
		<input id="bk-c-email" type="email" name="email" autocomplete="email" required>
	</div>
	<div class="bk-field">
		<label for="bk-c-subject">About</label>
		<select id="bk-c-subject" name="subject">
			<option selected>Private hire of the counter</option>
			<option>Gift voucher</option>
			<option>A question about the menu</option>
			<option>Press or collaboration</option>
			<option>Something else</option>
		</select>
	</div>
	<div class="bk-field">
		<label for="bk-c-message">Message</label>
		<textarea id="bk-c-message" name="message" rows="5" required></textarea>
	</div>
	<button type="submit" class="wp-element-button">Send the note</button>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
