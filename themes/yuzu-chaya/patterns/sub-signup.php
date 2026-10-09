<?php
/**
 * Title: Tea box — signup form
 * Slug: yuzu-chaya/sub-signup
 * Categories: yuzu-chaya, call-to-action
 * Keywords: form, signup, subscription, start
 * Viewport Width: 1440
 * Description: A washi tile with the signup form (name, email, plan, first box and anything to leave out) beside a yuzu tile with a handwritten note. Plain HTML: connect the action to your form or subscription service.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yc-section yc-sub-signup","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-section yc-sub-signup" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"yc-bento","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide yc-bento"><!-- wp:group {"className":"yc-tile","style":{"layout":{"columnSpan":8},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Start a box</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Put the kettle <em>on</em></h3>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="yc-form" action="#" method="post">
	<p class="yc-field yc-field--half"><label for="yc-s-name">Your name</label><input id="yc-s-name" type="text" name="name" autocomplete="name" required></p>
	<p class="yc-field yc-field--half"><label for="yc-s-email">Email</label><input id="yc-s-email" type="email" name="email" autocomplete="email" placeholder="name@example.com" required></p>
	<fieldset class="yc-choices"><legend>Plan</legend>
		<label><input type="radio" name="plan" value="little-pot"> Little Pot, $24</label>
		<label><input type="radio" name="plan" value="two-cups" checked> Two Cups, $34</label>
		<label><input type="radio" name="plan" value="tea-table"> Tea Table, $52</label>
	</fieldset>
	<p class="yc-field yc-field--half"><label for="yc-s-start">First box</label><select id="yc-s-start" name="start"><option>This month</option><option>Next month</option><option>As a gift: three months</option><option>As a gift: six months</option></select></p>
	<p class="yc-field yc-field--half"><label for="yc-s-avoid">Anything to leave out?</label><input id="yc-s-avoid" type="text" name="avoid" placeholder="Roasted tea, nuts…"></p>
	<p class="yc-field"><button type="submit" class="wp-element-button">Start my tea box</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--yuzu yc-motif yc-motif--yuzu yc-motif--bottom","style":{"layout":{"columnSpan":4},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"space-between"}} -->
<div class="wp-block-group yc-tile yc-tile--yuzu yc-motif yc-motif--yuzu yc-motif--bottom"><!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">We reply within a day with a payment link and your first box date. Nothing is charged until then.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">Questions first? <a href="/contact/">Write to the counter</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
