<?php
/**
 * Title: Newsletter — sign-up
 * Slug: hakuba-dental/newsletter-signup
 * Categories: hakuba-dental
 * Keywords: newsletter, email, sign up, form
 * Viewport Width: 1440
 * Description: The newsletter page head as a bento: the title and what you get in a mist cell, and a sign-up form in a white cell.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hd-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hd-page-head"><!-- wp:group {"align":"wide","className":"hd-bento","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hd-bento"><!-- wp:group {"className":"hd-cell hd-c-7 hd-page-head__intro","layout":{"type":"default"}} -->
<div class="wp-block-group hd-cell hd-c-7 hd-page-head__intro"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">The Hakuba letter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Four short emails a year, one for each season</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Check-up reminders, holiday hours, one practical tip and a note from the clinic. Nothing to buy, and you can leave with one click.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-cell hd-cell--white hd-c-5","layout":{"type":"default"}} -->
<div class="wp-block-group hd-cell hd-cell--white hd-c-5"><!-- wp:heading {"level":3,"className":"hd-ico hd-ico--chat"} -->
<h3 class="wp-block-heading hd-ico hd-ico--chat">Sign up</h3>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="hd-form" action="#" method="post" onsubmit="return false;">
	<p class="hd-field"><label for="hd-n-name">First name</label><input id="hd-n-name" type="text" name="name" autocomplete="given-name"></p>
	<p class="hd-field"><label for="hd-n-email">Email</label><input id="hd-n-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<label class="hd-consent"><input type="checkbox" name="consent" required> Send me the seasonal letter. I can unsubscribe at any time.</label>
	<p class="hd-field"><button class="wp-block-button__link wp-element-button" type="submit">Subscribe</button></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"is-style-fine"} -->
<p class="is-style-fine">We use your email only for the letter, never for adverts.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
