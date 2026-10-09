<?php
/**
 * Title: Events — reserve a chair
 * Slug: aizome-shoten/events-reserve
 * Categories: aizome-shoten, call-to-action, featured
 * Keywords: reserve, booking, form, events, chairs
 * Viewport Width: 1440
 * Description: A form to reserve chairs for a reading: name, email, which evening and how many chairs, beside a condensed title and the house notes. Plain HTML: connect it to your form or email service.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"reserve","align":"full","className":"az-section az-reserve-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section id="reserve" class="wp-block-group alignfull az-section az-reserve-section" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"az-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide az-grid"><!-- wp:group {"style":{"layout":{"columnSpan":5},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-catalog-no"} -->
<p class="is-style-catalog-no">Reservations</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Reserve<br>a chair</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Twelve chairs and a bench. Reserve up to four; we hold them until five minutes past the start, then let the door decide.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-index"} -->
<ul class="wp-block-list is-style-index"><!-- wp:list-item -->
<li>Free. Buying a book on the night keeps the readings going</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Step-free entrance; the counter has a hearing loop</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Can't come after all? Reply to your confirmation and we'll pass the chair on</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="az-form az-form--card" action="#" method="post">
	<p class="az-field az-field--half"><label for="az-r-name">Your name</label><input id="az-r-name" type="text" name="name" autocomplete="name" required></p>
	<p class="az-field az-field--half"><label for="az-r-email">Email</label><input id="az-r-email" type="email" name="email" autocomplete="email" placeholder="name@example.com" required></p>
	<p class="az-field"><label for="az-r-event">Which evening</label><select id="az-r-event" name="event"><option>Thu 16 Oct — Read aloud: Eleven Bridges in the Rain</option><option>Thu 23 Oct — Zine clinic</option><option>Thu 30 Oct — Translation night (waiting list)</option><option>Sat 8 Nov — Almanac launch</option><option>Thu 13 Nov — Read aloud: A Field Guide to Empty Stations</option><option>Thu 20 Nov — Letterpress evening</option></select></p>
	<fieldset class="az-field az-choice"><legend>Chairs</legend><label><input type="radio" name="chairs" value="1" checked> One</label><label><input type="radio" name="chairs" value="2"> Two</label><label><input type="radio" name="chairs" value="3"> Three</label><label><input type="radio" name="chairs" value="4"> Four</label></fieldset>
	<p class="az-field"><label for="az-r-note">Anything we should know</label><textarea id="az-r-note" name="note" rows="3"></textarea></p>
	<p class="az-field"><button type="submit" class="wp-element-button">Reserve</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
