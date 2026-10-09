<?php
/**
 * Title: Newsletter — signup
 * Slug: hanabi-matsuri/newsletter-signup
 * Categories: hanabi-matsuri
 * Keywords: newsletter, signup, subscribe, email, form
 * Viewport Width: 1440
 * Description: The newsletter page head and form: an enormous poster title, what the letter brings, and a signup card with topics (plain HTML form: connect it to your email service).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"is-style-burst","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull is-style-burst" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"hm-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide hm-grid"><!-- wp:group {"style":{"layout":{"columnSpan":6},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-kicker"} -->
<p class="is-style-kicker">Newsletter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"is-style-poster"} -->
<h1 class="wp-block-heading is-style-poster">The <em>Fuse</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">A letter from the festival office, about once a month: the lineup as it is booked, the date passes go on sale (a week before everyone else), the volunteer calls and the odd story from the workshop.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checks"} -->
<ul class="wp-block-list is-style-checks"><!-- wp:list-item -->
<li>Pass sales a week early</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>About twelve letters a year, never more</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Written by the committee, not a marketing team</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"columnSpan":6,"columnStart":7}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:html -->
<form class="hm-form hm-form--card" action="#" method="post" onsubmit="return false;">
	<p class="hm-field hm-field--half"><label for="hm-nl-name">First name</label><input id="hm-nl-name" type="text" name="name" autocomplete="given-name"></p>
	<p class="hm-field hm-field--half"><label for="hm-nl-email">Email</label><input id="hm-nl-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<fieldset class="hm-field hm-choice">
		<legend>Also tell me about</legend>
		<label><input type="checkbox" name="topics[]" value="passes" checked> Pass sales</label>
		<label><input type="checkbox" name="topics[]" value="lineup" checked> Lineup news</label>
		<label><input type="checkbox" name="topics[]" value="volunteer"> Volunteering</label>
		<label><input type="checkbox" name="topics[]" value="stalls"> Stall applications</label>
	</fieldset>
	<label class="hm-consent"><input type="checkbox" name="consent" required> I would like The Fuse by email. I can leave with one click at any time.</label>
	<p class="hm-field"><button class="wp-block-button__link wp-element-button" type="submit">Subscribe to The Fuse</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
