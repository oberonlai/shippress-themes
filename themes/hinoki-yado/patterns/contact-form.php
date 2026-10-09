<?php
/**
 * Title: Enquire — booking enquiry form
 * Slug: hinoki-yado/contact-form
 * Categories: hinoki-yado, contact
 * Keywords: contact, form, enquiry, booking, reservation, dates, guests
 * Viewport Width: 1440
 * Description: A booking-enquiry form on a washi card — name, email, arrival, nights, guests, room preference, dietary notes — beside a short note on what happens next (plain HTML: connect the action to your form handler).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hy-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hy-section" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"hy-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide hy-grid"><!-- wp:group {"className":"hy-form-intro hy-reveal","style":{"layout":{"columnSpan":4,"columnStart":2},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group hy-form-intro hy-reveal"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">What happens <em>next</em></h3>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true,"className":"hy-steps"} -->
<ol class="wp-block-list hy-steps"><!-- wp:list-item -->
<li>We reply within a day with the free rooms and the rate.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>You choose; we hold the room for three days, no deposit.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A week before, we ask about allergies and your train.</li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:paragraph {"fontSize":"small","className":"hy-muted"} -->
<p class="has-small-font-size hy-muted">Free cancellation until eight days before arrival. The inn is closed for maintenance from 10 to 24 June.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="hy-form hy-form--enquiry hy-reveal" action="#" method="post">
	<div class="hy-field">
		<label for="hy-c-name">Name</label>
		<input id="hy-c-name" type="text" name="name" autocomplete="name" required>
	</div>
	<div class="hy-field">
		<label for="hy-c-email">Email</label>
		<input id="hy-c-email" type="email" name="email" autocomplete="email" required>
	</div>
	<div class="hy-field hy-field--third">
		<label for="hy-c-date">Arrival</label>
		<input id="hy-c-date" type="date" name="arrival" required>
	</div>
	<div class="hy-field hy-field--third">
		<label for="hy-c-nights">Nights</label>
		<select id="hy-c-nights" name="nights">
			<option>1</option>
			<option selected>2</option>
			<option>3</option>
			<option>4 or more</option>
		</select>
	</div>
	<div class="hy-field hy-field--third">
		<label for="hy-c-guests">Guests</label>
		<select id="hy-c-guests" name="guests">
			<option>1</option>
			<option selected>2</option>
			<option>3</option>
			<option>4</option>
		</select>
	</div>
	<fieldset class="hy-field hy-rooms-pick">
		<legend>Room</legend>
		<label><input type="radio" name="room" value="hinoki"> Hinoki, 12.5 mats</label>
		<label><input type="radio" name="room" value="kaede"> Kaede, 10 mats</label>
		<label><input type="radio" name="room" value="sugi"> Sugi, 8 mats</label>
		<label><input type="radio" name="room" value="yuki"> Yuki, 6 mats</label>
		<label><input type="radio" name="room" value="any" checked> Whichever is free</label>
	</fieldset>
	<div class="hy-field">
		<label for="hy-c-msg">Allergies, diet, or the reason for your trip</label>
		<textarea id="hy-c-msg" name="message" rows="4"></textarea>
	</div>
	<button type="submit" class="wp-element-button">Send enquiry</button>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
