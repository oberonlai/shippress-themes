<?php
/**
 * Title: Booking — appointment request form
 * Slug: fuji-shinkyu/booking-form
 * Categories: fuji-shinkyu, contact, call-to-action
 * Keywords: booking, appointment, request, form, reservation
 * Viewport Width: 1440
 * Description: The appointment request (anchor #request): a short note on how replies work beside a paper form with name, email, phone, treatment, preferred days and time, practitioner, date and notes (plain HTML: connect the action to your booking or form service).
 */
?>
<!-- wp:group {"tagName":"section","anchor":"request","align":"full","className":"fs-section fs-booking is-style-halo","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section id="request" class="wp-block-group alignfull fs-section fs-booking is-style-halo" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"fs-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide fs-grid"><!-- wp:group {"className":"fs-form-intro fs-reveal","style":{"layout":{"columnSpan":5,"columnStart":1},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group fs-form-intro fs-reveal"><!-- wp:paragraph {"className":"is-style-point-label"} -->
<p class="is-style-point-label">Appointment request</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Ask for <em>a time</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tell us roughly when suits you. We reply within one working day with two or three times to choose from; nothing is booked until you answer.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-points"} -->
<ul class="wp-block-list is-style-points"><!-- wp:list-item -->
<li>Free to change or cancel up to 24 hours before</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pay on the day, by card, cash or IC</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Same-day and next-day: please call +81 467 00 0412</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="fs-form fs-form--card fs-reveal" action="#" method="post">
	<div class="fs-field fs-field--half">
		<label for="fs-b-name">Name</label>
		<input id="fs-b-name" type="text" name="name" autocomplete="name" required>
	</div>
	<div class="fs-field fs-field--half">
		<label for="fs-b-email">Email</label>
		<input id="fs-b-email" type="email" name="email" autocomplete="email" required>
	</div>
	<div class="fs-field fs-field--half">
		<label for="fs-b-phone">Phone (optional)</label>
		<input id="fs-b-phone" type="tel" name="phone" autocomplete="tel">
	</div>
	<div class="fs-field fs-field--half">
		<label for="fs-b-treatment">Treatment</label>
		<select id="fs-b-treatment" name="treatment">
			<option selected>First visit (90 min)</option>
			<option>Acupuncture (60 min)</option>
			<option>Moxibustion (45 min)</option>
			<option>Shiatsu (60 min)</option>
			<option>Needles and hands (90 min)</option>
			<option>Not sure yet</option>
		</select>
	</div>
	<fieldset class="fs-field fs-choice">
		<legend>Preferred days</legend>
		<label><input type="checkbox" name="days[]" value="mon"> Mon</label>
		<label><input type="checkbox" name="days[]" value="tue"> Tue</label>
		<label><input type="checkbox" name="days[]" value="thu"> Thu</label>
		<label><input type="checkbox" name="days[]" value="fri"> Fri</label>
		<label><input type="checkbox" name="days[]" value="sat"> Sat</label>
	</fieldset>
	<fieldset class="fs-field fs-choice">
		<legend>Time of day</legend>
		<label><input type="radio" name="time" value="morning" checked> Morning</label>
		<label><input type="radio" name="time" value="afternoon"> Afternoon</label>
		<label><input type="radio" name="time" value="evening"> After 18:00</label>
	</fieldset>
	<div class="fs-field fs-field--half">
		<label for="fs-b-who">Practitioner</label>
		<select id="fs-b-who" name="practitioner">
			<option selected>No preference</option>
			<option>Aoi Fujimori</option>
			<option>Kei Nanase</option>
			<option>Mio Harada</option>
		</select>
	</div>
	<div class="fs-field fs-field--half">
		<label for="fs-b-date">Earliest date</label>
		<input id="fs-b-date" type="date" name="date">
	</div>
	<div class="fs-field">
		<label for="fs-b-notes">Anything we should know before your visit</label>
		<textarea id="fs-b-notes" name="notes" rows="3"></textarea>
	</div>
	<label class="fs-consent"><input type="checkbox" name="consent" required> I understand treatments here support general wellbeing and do not replace medical care.</label>
	<button type="submit" class="wp-element-button">Send the request</button>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
