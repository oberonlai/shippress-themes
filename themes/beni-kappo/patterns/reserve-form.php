<?php
/**
 * Title: Reservations — request form
 * Slug: beni-kappo/reserve-form
 * Categories: beni-kappo, contact, call-to-action
 * Keywords: reservation, booking, form, request, seats
 * Viewport Width: 1440
 * Description: The reservation request (anchor #reserve): a red noren panel on how replies work, overlapping a lacquer form with name, email, phone, date, seating, guests, course, sake pairing, seat preference and allergies (plain HTML: connect the action to your booking or form service).
 */
?>
<!-- wp:group {"tagName":"section","anchor":"reserve","align":"full","className":"bk-section bk-booking is-style-lantern","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section id="reserve" class="wp-block-group alignfull bk-section bk-booking is-style-lantern" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"bk-grid bk-layered","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide bk-grid bk-layered"><!-- wp:group {"className":"bk-booking__intro is-style-noren","style":{"layout":{"columnSpan":5,"columnStart":1},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group bk-booking__intro is-style-noren"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Reservation request</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Ask for <em>your seats</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Choose a date and a seating. We reply within one day with the seats we can offer and a link to guarantee them with a card; nothing is charged unless you cancel late.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-ruled"} -->
<ul class="wp-block-list is-style-ruled"><!-- wp:list-item -->
<li>Up to six guests online; the whole counter by email</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Same-day seats: call +81 76 000 0418 after 14:00</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Allergies at least three days ahead, please</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="bk-form bk-form--card bk-reveal" action="#" method="post">
	<div class="bk-field bk-field--half">
		<label for="bk-r-name">Name</label>
		<input id="bk-r-name" type="text" name="name" autocomplete="name" required>
	</div>
	<div class="bk-field bk-field--half">
		<label for="bk-r-email">Email</label>
		<input id="bk-r-email" type="email" name="email" autocomplete="email" required>
	</div>
	<div class="bk-field bk-field--half">
		<label for="bk-r-phone">Phone</label>
		<input id="bk-r-phone" type="tel" name="phone" autocomplete="tel" required>
	</div>
	<div class="bk-field bk-field--half">
		<label for="bk-r-date">Date</label>
		<input id="bk-r-date" type="date" name="date" required>
	</div>
	<fieldset class="bk-field bk-choice">
		<legend>Seating</legend>
		<label><input type="radio" name="seating" value="1730" checked> 17:30</label>
		<label><input type="radio" name="seating" value="2015"> 20:15</label>
	</fieldset>
	<div class="bk-field bk-field--half">
		<label for="bk-r-guests">Guests</label>
		<select id="bk-r-guests" name="guests">
			<option>1</option>
			<option selected>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
		</select>
	</div>
	<div class="bk-field bk-field--half">
		<label for="bk-r-course">Course</label>
		<select id="bk-r-course" name="course">
			<option>Hana, seven courses (¥16,500)</option>
			<option selected>Tsuki, nine courses (¥22,000)</option>
			<option>Beni, eleven courses (¥28,600)</option>
		</select>
	</div>
	<fieldset class="bk-field bk-choice">
		<legend>Pairing</legend>
		<label><input type="radio" name="pairing" value="sake5" checked> Five glasses</label>
		<label><input type="radio" name="pairing" value="sake3"> Three glasses</label>
		<label><input type="radio" name="pairing" value="tea"> Tea and soda</label>
		<label><input type="radio" name="pairing" value="none"> Decide on the night</label>
	</fieldset>
	<div class="bk-field bk-field--half">
		<label for="bk-r-seat">Seat preference</label>
		<select id="bk-r-seat" name="seat">
			<option selected>No preference</option>
			<option>Facing the grill (1–3)</option>
			<option>Facing the chef (4–6)</option>
			<option>Facing the rice and sake (7–9)</option>
		</select>
	</div>
	<div class="bk-field bk-field--half">
		<label for="bk-r-occasion">Occasion (optional)</label>
		<input id="bk-r-occasion" type="text" name="occasion" placeholder="Birthday, anniversary…">
	</div>
	<div class="bk-field">
		<label for="bk-r-notes">Allergies or dietary needs</label>
		<textarea id="bk-r-notes" name="notes" rows="3"></textarea>
	</div>
	<label class="bk-consent"><input type="checkbox" name="policy" required> I have read the cancellation policy below.</label>
	<button type="submit" class="wp-element-button">Request the seats</button>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
