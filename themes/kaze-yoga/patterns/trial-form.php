<?php
/**
 * Title: Trial class: booking form and the week
 * Slug: kaze-yoga/trial-form
 * Categories: kaze-yoga
 * Keywords: trial, booking, form, timetable, contact
 * Viewport Width: 1440
 * Description: A trial class booking form on a paper card (plain HTML: connect it to your form service) beside the studio details, then the weekly timetable to choose from.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ky-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ky-section"><!-- wp:group {"align":"wide","className":"ky-form-grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ky-form-grid"><!-- wp:group {"className":"is-style-card ky-form-card","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card ky-form-card"><!-- wp:heading {"className":"ky-form-card__title"} -->
<h2 class="wp-block-heading ky-form-card__title">Book your trial class</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="ky-form" action="#" method="post" onsubmit="return false;">
	<p class="ky-field ky-field--half"><label for="ky-t-name">Your name</label><input id="ky-t-name" type="text" name="name" autocomplete="name" required></p>
	<p class="ky-field ky-field--half"><label for="ky-t-email">Email</label><input id="ky-t-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="ky-field ky-field--half"><label for="ky-t-class">Class</label><select id="ky-t-class" name="class"><option>Foundations</option><option>Slow Breath</option><option>Gentle Yoga 60+</option><option>Morning Flow</option><option>Evening Flow</option><option>Restore</option><option>Lunchtime Stretch</option><option>Weekend Flow</option></select></p>
	<p class="ky-field ky-field--half"><label for="ky-t-date">Preferred day</label><input id="ky-t-date" type="date" name="date"></p>
	<p class="ky-field"><label for="ky-t-msg">Anything we should know? (injuries, pregnancy, first time ever)</label><textarea id="ky-t-msg" name="message" rows="4"></textarea></p>
	<label class="ky-consent"><input type="checkbox" name="consent" required> Use my details only to arrange my class.</label>
	<p class="ky-field"><button class="wp-block-button__link wp-element-button" type="submit">Request my free class</button></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ky-fine"} -->
<p class="ky-fine">We reply within a day. If a class is full we will suggest the next one.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ky-form-side","layout":{"type":"default"}} -->
<div class="wp-block-group ky-form-side"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Find us</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"kaze-yoga/studio-info"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"ky-intro ky-intro--small","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ky-intro ky-intro--small"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Choose from the week</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">This week’s classes</h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"ky-week","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ky-week"><!-- wp:pattern {"slug":"kaze-yoga/timetable"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
