<?php
/**
 * Title: Trial lesson — booking form
 * Slug: ikebana-kyoshitsu/trial-booking
 * Categories: ikebana-kyoshitsu, contact, call-to-action
 * Keywords: trial, booking, form, reservation, lesson, date, seat
 * Viewport Width: 1440
 * Description: The trial-lesson booking (anchor #trial): what happens in ninety minutes as stepped notes on one side, a paper form on the other with name, email, session, date, experience, number of people and notes (plain HTML: connect the action to your form handler).
 */
?>
<!-- wp:group {"tagName":"section","anchor":"trial","align":"full","className":"ik-section ik-booking","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section id="trial" class="wp-block-group alignfull ik-section ik-booking" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"ik-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide ik-grid"><!-- wp:group {"className":"ik-form-intro ik-reveal","style":{"layout":{"columnSpan":5,"columnStart":1},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group ik-form-intro ik-reveal"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Trial lesson — 90 minutes, ¥3,500</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Book a <em>trial seat</em></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true,"className":"ik-steps"} -->
<ol class="wp-block-list ik-steps"><!-- wp:list-item -->
<li><strong>Tea and a look around.</strong> Ten minutes to see the tools and the flowers of the week.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>The three lines.</strong> Your teacher shows one arrangement slowly, then takes it apart.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Your own.</strong> An hour with a basin, a pin frog and your choice of branches.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Home.</strong> Wrapped in paper, with a card on how to keep it fresh.</li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:paragraph {"fontSize":"small","className":"ik-muted"} -->
<p class="ik-muted has-small-font-size">We confirm by email within a day. Pay on the day, in cash or by card. Free to cancel until the day before.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="ik-form ik-form--card ik-reveal" action="#" method="post">
	<div class="ik-field ik-field--half">
		<label for="ik-t-name">Name</label>
		<input id="ik-t-name" type="text" name="name" autocomplete="name" required>
	</div>
	<div class="ik-field ik-field--half">
		<label for="ik-t-email">Email</label>
		<input id="ik-t-email" type="email" name="email" autocomplete="email" required>
	</div>
	<fieldset class="ik-field ik-choice">
		<legend>Session</legend>
		<label><input type="radio" name="session" value="sat-10" checked> Saturday 10:00, trial lesson</label>
		<label><input type="radio" name="session" value="wed-1830"> Wednesday 18:30, after work</label>
		<label><input type="radio" name="session" value="sat-1330"> Saturday 13:30, visitors' class in English</label>
		<label><input type="radio" name="session" value="sat-1530"> Saturday 15:30, Little Stems (children)</label>
	</fieldset>
	<div class="ik-field ik-field--third">
		<label for="ik-t-date">Date</label>
		<input id="ik-t-date" type="date" name="date" required>
	</div>
	<div class="ik-field ik-field--third">
		<label for="ik-t-people">People</label>
		<select id="ik-t-people" name="people">
			<option selected>1</option>
			<option>2</option>
			<option>3</option>
			<option>4 or more</option>
		</select>
	</div>
	<div class="ik-field ik-field--third">
		<label for="ik-t-level">Experience</label>
		<select id="ik-t-level" name="experience">
			<option selected>None at all</option>
			<option>A little</option>
			<option>Studied before</option>
		</select>
	</div>
	<div class="ik-field">
		<label for="ik-t-notes">Anything we should know (allergies, access, a gift)</label>
		<textarea id="ik-t-notes" name="notes" rows="3"></textarea>
	</div>
	<button type="submit" class="wp-element-button">Request a trial seat</button>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
