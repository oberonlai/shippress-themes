<?php
/**
 * Title: Volunteer — sign-up form
 * Slug: mori-no-kai/volunteer-signup
 * Categories: mori-no-kai
 * Keywords: sign up, form, register, volunteer
 * Viewport Width: 1440
 * Description: A sign-up form card (plain HTML: connect it to your form service) for choosing a work day, beside a short note on what happens next.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"sign-up","className":"mk-section","layout":{"type":"constrained"}} -->
<section id="sign-up" class="wp-block-group alignfull mk-section"><!-- wp:group {"align":"wide","className":"mk-split mk-split--4-7","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mk-split mk-split--4-7"><!-- wp:group {"className":"mk-stack mk-stack--loose","layout":{"type":"default"}} -->
<div class="wp-block-group mk-stack mk-stack--loose"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Sign up</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Save <em>a place</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Groups are kept to twenty so everyone gets a forester's attention. Sayo will write back within two days with directions and a map.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-fine"} -->
<p class="is-style-fine">Coming as a company or school group? Write to <a href="mailto:volunteer@morinokai.example">volunteer@morinokai.example</a> and we will plan a day just for you.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="mk-form mk-form-card" action="#" method="post" onsubmit="return false;">
	<p class="mk-field mk-field--half"><label for="mk-v-name">Name</label><input id="mk-v-name" type="text" name="name" autocomplete="name" required></p>
	<p class="mk-field mk-field--half"><label for="mk-v-email">Email</label><input id="mk-v-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="mk-field mk-field--half"><label for="mk-v-day">Work day</label><select id="mk-v-day" name="day" required><option value="">Choose a day</option><option>18 Oct — Seed walk</option><option>1 Nov — School planting</option><option>14 Nov — Thinning day</option><option>6 Dec — Deer fences</option><option>17 Jan — Snowshoe tracking</option></select></p>
	<p class="mk-field mk-field--half"><label for="mk-v-people">How many of you</label><input id="mk-v-people" type="text" name="people" inputmode="numeric" value="1"></p>
	<fieldset class="mk-field mk-choice">
		<legend>Anything we should know</legend>
		<label><input type="checkbox" name="minibus"> I need the minibus</label>
		<label><input type="checkbox" name="children"> Bringing children</label>
		<label><input type="checkbox" name="first"> It is my first time</label>
		<label><input type="checkbox" name="saw"> I hold a saw certificate</label>
	</fieldset>
	<p class="mk-field"><label for="mk-v-note">A note (optional)</label><textarea id="mk-v-note" name="note" rows="3"></textarea></p>
	<label class="mk-consent"><input type="checkbox" name="consent" required> Use my details only to organise this work day.</label>
	<p class="mk-field"><button class="wp-block-button__link wp-element-button" type="submit">Save my place</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
