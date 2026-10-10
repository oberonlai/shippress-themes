<?php
/**
 * Title: Tea box — signup form
 * Slug: yuzu-chaya/sub-signup
 * Categories: yuzu-chaya, call-to-action
 * Keywords: signup, form, subscription
 * Viewport Width: 1440
 * Description: The signup form (name, email, plan, first box and anything to leave out) beside a short note on what happens next. Plain HTML: connect the action to your form or subscription service.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"start","align":"full","className":"yc-section","layout":{"type":"constrained"}} -->
<section id="start" class="wp-block-group alignfull yc-section"><!-- wp:group {"align":"wide","className":"yc-split yc-split--4-7","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide yc-split yc-split--4-7"><!-- wp:group {"className":"yc-stack","layout":{"type":"default"}} -->
<div class="wp-block-group yc-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Start a box</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Put the kettle <em>on</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We reply within a day with a payment link and your first box date. Nothing is charged until then.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-fine"} -->
<p class="is-style-fine">Questions first? <a href="/contact/">Write to the counter.</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="yc-form" action="#" method="post">
	<p class="yc-field yc-field--half"><label for="yc-s-name">Your name</label><input id="yc-s-name" type="text" name="name" autocomplete="name" required></p>
	<p class="yc-field yc-field--half"><label for="yc-s-email">Email</label><input id="yc-s-email" type="email" name="email" autocomplete="email" placeholder="name@example.com" required></p>
	<fieldset><legend>Plan</legend>
		<label class="yc-choice"><input type="radio" name="plan" value="little-pot"><span>Little Pot, $24</span></label>
		<label class="yc-choice"><input type="radio" name="plan" value="two-cups" checked><span>Two Cups, $34</span></label>
		<label class="yc-choice"><input type="radio" name="plan" value="tea-table"><span>Tea Table, $52</span></label>
	</fieldset>
	<p class="yc-field yc-field--half"><label for="yc-s-start">First box</label><select id="yc-s-start" name="start"><option>This month</option><option>Next month</option><option>As a gift: three months</option><option>As a gift: six months</option></select></p>
	<p class="yc-field yc-field--half"><label for="yc-s-avoid">Anything to leave out?</label><input id="yc-s-avoid" type="text" name="avoid" placeholder="Roasted tea, nuts…"></p>
	<p class="yc-field"><button type="submit" class="wp-element-button">Start my tea box</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
