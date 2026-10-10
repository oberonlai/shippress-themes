<?php
/**
 * Title: Contact — booking form and details
 * Slug: hakuba-dental/contact-form
 * Categories: hakuba-dental
 * Keywords: contact, form, booking, address, phone, email
 * Viewport Width: 1440
 * Description: A booking request form in a mist cell (plain HTML: connect it to your form service), beside the address, telephone, email and the emergency note in white cells.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hd-section hd-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hd-section hd-section--flush-top"><!-- wp:group {"align":"wide","className":"hd-bento","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hd-bento"><!-- wp:group {"className":"hd-cell hd-c-7 hd-r-3","layout":{"type":"default"}} -->
<div class="wp-block-group hd-cell hd-c-7 hd-r-3"><!-- wp:heading {"level":3,"className":"hd-ico hd-ico--calendar"} -->
<h3 class="wp-block-heading hd-ico hd-ico--calendar">Request a visit</h3>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="hd-form" action="#" method="post" onsubmit="return false;">
	<p class="hd-field hd-field--half"><label for="hd-c-name">Name</label><input id="hd-c-name" type="text" name="name" autocomplete="name" required></p>
	<p class="hd-field hd-field--half"><label for="hd-c-tel">Telephone</label><input id="hd-c-tel" type="tel" name="tel" autocomplete="tel"></p>
	<p class="hd-field hd-field--half"><label for="hd-c-email">Email</label><input id="hd-c-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="hd-field hd-field--half"><label for="hd-c-type">Visit</label><select id="hd-c-type" name="type"><option>First visit</option><option>Check-up and clean</option><option>Something hurts</option><option>Children's visit</option><option>A question</option></select></p>
	<fieldset class="hd-choice">
		<legend>Best time for you</legend>
		<label><input type="radio" name="time" value="morning" checked> Morning</label>
		<label><input type="radio" name="time" value="afternoon"> Afternoon</label>
		<label><input type="radio" name="time" value="saturday"> Saturday</label>
		<label><input type="radio" name="time" value="any"> Any time</label>
	</fieldset>
	<p class="hd-field"><label for="hd-c-msg">Anything we should know?</label><textarea id="hd-c-msg" name="message" rows="5"></textarea></p>
	<label class="hd-consent"><input type="checkbox" name="consent" required> Use my details only to arrange my visit.</label>
	<p class="hd-field"><button class="wp-block-button__link wp-element-button" type="submit">Send request</button></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"is-style-fine"} -->
<p class="is-style-fine">Please do not send medical records by email; bring them to your visit.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-cell hd-cell--white hd-c-5","layout":{"type":"default"}} -->
<div class="wp-block-group hd-cell hd-cell--white hd-c-5"><!-- wp:heading {"level":3,"className":"hd-ico hd-ico--pin"} -->
<h3 class="wp-block-heading hd-ico hd-ico--pin">The clinic</h3>
<!-- /wp:heading -->

<!-- wp:hakuba-dental/clinic-info {"show":"address"} /-->

<!-- wp:paragraph {"className":"is-style-fine"} -->
<p class="is-style-fine">Four minutes from Hakubazaka station, exit 2. Lift from the street.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-cell hd-cell--white hd-c-5","layout":{"type":"default"}} -->
<div class="wp-block-group hd-cell hd-cell--white hd-c-5"><!-- wp:heading {"level":3,"className":"hd-ico hd-ico--phone"} -->
<h3 class="wp-block-heading hd-ico hd-ico--phone">Call or write</h3>
<!-- /wp:heading -->

<!-- wp:hakuba-dental/clinic-info {"show":"phone-email"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-cell hd-cell--blue hd-c-5","layout":{"type":"default"}} -->
<div class="wp-block-group hd-cell hd-cell--blue hd-c-5"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Something hurts?</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Call before 11:00 for a same-day slot</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We keep time free every day for toothache and broken teeth. Outside our hours, contact your local emergency dental service.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
