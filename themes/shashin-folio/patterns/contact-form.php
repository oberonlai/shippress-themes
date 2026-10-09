<?php
/**
 * Title: Contact — enquiry form
 * Slug: shashin-folio/contact-form
 * Categories: shashin-folio, contact
 * Keywords: contact, form, enquiry, booking, commission
 * Viewport Width: 1440
 * Description: A numbered enquiry form for commissions and prints, with a short note on what to include (plain HTML: connect the action to your form handler).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sf-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-section" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"sf-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide sf-grid"><!-- wp:group {"className":"sf-form-intro","style":{"layout":{"columnSpan":4,"columnStart":3},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group sf-form-intro"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Tell me about <em>the place.</em></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">The more I know about where, when and why, the better: the hour you love there, how it will be used, and how much time we have. I reply to every enquiry within four working days.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="sf-form sf-form--contact" action="#" method="post" style="grid-column:8 / span 5">
	<div class="sf-field">
		<label for="sf-c-name">01 — Name</label>
		<input id="sf-c-name" type="text" name="name" autocomplete="name" required>
	</div>
	<div class="sf-field">
		<label for="sf-c-email">02 — Email</label>
		<input id="sf-c-email" type="email" name="email" autocomplete="email" required>
	</div>
	<div class="sf-field sf-field--half">
		<label for="sf-c-type">03 — Kind of work</label>
		<select id="sf-c-type" name="type">
			<option>Editorial story</option>
			<option>Architecture / interiors</option>
			<option>Hotel or brand</option>
			<option>Print or book</option>
			<option>Something else</option>
		</select>
	</div>
	<div class="sf-field sf-field--half">
		<label for="sf-c-when">04 — When</label>
		<input id="sf-c-when" type="text" name="when" placeholder="Season, month or deadline">
	</div>
	<div class="sf-field">
		<label for="sf-c-msg">05 — The place, the light, the story</label>
		<textarea id="sf-c-msg" name="message" rows="5"></textarea>
	</div>
	<button type="submit" class="wp-element-button">Send enquiry</button>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
