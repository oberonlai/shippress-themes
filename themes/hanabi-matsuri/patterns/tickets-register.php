<?php
/**
 * Title: Tickets — pre-registration form
 * Slug: hanabi-matsuri/tickets-register
 * Categories: hanabi-matsuri
 * Keywords: form, tickets, register, waiting list
 * Viewport Width: 1440
 * Description: A pre-registration form for passes (plain HTML: connect it to your ticketing or form service; no payment is taken) beside the steps of how sales work.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"register","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section id="register" class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"hm-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide hm-grid"><!-- wp:group {"style":{"layout":{"columnSpan":5},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-kicker"} -->
<p class="is-style-kicker">Pre-register</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Save <em>your place</em> in the queue</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Pre-registering costs nothing and commits you to nothing. On 30 April we email everyone on the list a personal link, valid for 48 hours from 10:00 on 1 May, to pay for the passes you asked for.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-ruled"} -->
<ul class="wp-block-list is-style-ruled"><!-- wp:list-item -->
<li>No payment is taken on this site</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>One registration per email address</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Up to six passes or one Tatami Box per registration</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"columnSpan":7,"columnStart":6}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:html -->
<form class="hm-form hm-form--card" action="#" method="post" onsubmit="return false;">
	<p class="hm-field hm-field--half"><label for="hm-reg-name">Name</label><input id="hm-reg-name" type="text" name="name" autocomplete="name" required></p>
	<p class="hm-field hm-field--half"><label for="hm-reg-email">Email</label><input id="hm-reg-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<fieldset class="hm-field hm-choice">
		<legend>Pass</legend>
		<label><input type="radio" name="pass" value="night" checked> Night Pass</label>
		<label><input type="radio" name="pass" value="festival"> Festival Pass</label>
		<label><input type="radio" name="pass" value="tatami"> Tatami Box</label>
	</fieldset>
	<fieldset class="hm-field hm-choice">
		<legend>Night</legend>
		<label><input type="checkbox" name="night[]" value="fri"> Fri 30 July</label>
		<label><input type="checkbox" name="night[]" value="sat" checked> Sat 31 July</label>
		<label><input type="checkbox" name="night[]" value="sun"> Sun 1 August</label>
	</fieldset>
	<p class="hm-field hm-field--half"><label for="hm-reg-qty">How many</label><select id="hm-reg-qty" name="quantity"><option>1</option><option selected>2</option><option>3</option><option>4</option><option>5</option><option>6</option></select></p>
	<p class="hm-field hm-field--half"><label for="hm-reg-access">Access needs</label><select id="hm-reg-access" name="access"><option>None</option><option>A place on the accessible deck</option><option>Step-free route only</option><option>Something else (we will email you)</option></select></p>
	<label class="hm-consent"><input type="checkbox" name="consent" required> Email me once when sales open, and once with my mat number. Nothing else.</label>
	<p class="hm-field"><button class="wp-block-button__link wp-element-button" type="submit">Pre-register</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
