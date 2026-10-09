<?php
/**
 * Title: Contact — message form
 * Slug: fuji-shinkyu/contact-form
 * Categories: fuji-shinkyu, contact
 * Keywords: contact, form, message, email
 * Viewport Width: 1440
 * Description: A short note beside a paper message form with name, email, topic and message (plain HTML: connect the action to your form service).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"fs-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull fs-section" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"fs-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide fs-grid"><!-- wp:group {"className":"fs-form-intro fs-reveal","style":{"layout":{"columnSpan":5,"columnStart":1},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group fs-form-intro fs-reveal"><!-- wp:paragraph {"className":"is-style-point-label"} -->
<p class="is-style-point-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">A question <em>first?</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Ask anything before you decide: whether a treatment suits you, what to wear, how to find us. One of the three of us answers, usually the same day.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fs-muted","fontSize":"small"} -->
<p class="fs-muted has-small-font-size">Please do not send urgent medical questions by email. If you feel unwell, contact your doctor or local emergency services.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="fs-form fs-form--card fs-form--contact fs-reveal" action="#" method="post">
	<div class="fs-field fs-field--half">
		<label for="fs-c-name">Name</label>
		<input id="fs-c-name" type="text" name="name" autocomplete="name" required>
	</div>
	<div class="fs-field fs-field--half">
		<label for="fs-c-email">Email</label>
		<input id="fs-c-email" type="email" name="email" autocomplete="email" required>
	</div>
	<div class="fs-field">
		<label for="fs-c-topic">About</label>
		<select id="fs-c-topic" name="topic">
			<option selected>A question before booking</option>
			<option>An existing appointment</option>
			<option>Home-moxa lessons</option>
			<option>Gift vouchers</option>
			<option>Something else</option>
		</select>
	</div>
	<div class="fs-field">
		<label for="fs-c-message">Message</label>
		<textarea id="fs-c-message" name="message" rows="5" required></textarea>
	</div>
	<button type="submit" class="wp-element-button">Send</button>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
