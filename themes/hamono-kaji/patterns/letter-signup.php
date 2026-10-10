<?php
/**
 * Title: The Whetstone Letter — page head and form
 * Slug: hamono-kaji/letter-signup
 * Categories: hamono-kaji, call-to-action
 * Keywords: newsletter, email, signup, form
 * Viewport Width: 1440
 * Description: The newsletter page head: a giant title, what the letter holds in a ruled sheet and a signup form (plain HTML: connect its action to your email service).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-page-head"><!-- wp:group {"align":"wide","className":"hk-split hk-split--8-4 hk-split--end","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-split hk-split--8-4 hk-split--end"><!-- wp:group {"className":"hk-page-head__intro","layout":{"type":"default"}} -->
<div class="wp-block-group hk-page-head__intro"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Newsletter — once a month</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">The Whetstone <em>Letter</em></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-stack","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stack"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">A short letter from the forge on the first Thursday of the month. Read by about three thousand cooks.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-section hk-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-section hk-section--flush-top"><!-- wp:group {"align":"wide","className":"hk-split hk-split--6-6","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-split hk-split--6-6"><!-- wp:group {"className":"hk-stack hk-stack--loose","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stack hk-stack--loose"><!-- wp:heading {"level":3,"className":"is-style-label"} -->
<h3 class="wp-block-heading is-style-label">In every letter</h3>
<!-- /wp:heading -->

<!-- wp:table {"className":"is-style-spec"} -->
<figure class="wp-block-table is-style-spec"><table class="has-fixed-layout"><tbody><tr><td>The batch</td><td>Which knives leave the fire this month, and how many</td></tr><tr><td>One lesson</td><td>A sharpening or care technique, step by step</td></tr><tr><td>One recipe</td><td>Something that needs a good knife, from Mio's kitchen</td></tr><tr><td>First pick</td><td>Readers see new blades two days before the shop</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-letter hk-stack","layout":{"type":"default"}} -->
<div class="wp-block-group hk-letter hk-stack"><!-- wp:html -->
<form class="hk-form" action="#" method="post"><div class="hk-field"><label for="hk-signup-name">First name</label><input id="hk-signup-name" type="text" name="name" autocomplete="given-name"></div><div class="hk-field"><label for="hk-signup-email">Email</label><input id="hk-signup-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></div><div class="hk-field hk-field--check"><input id="hk-signup-pro" type="checkbox" name="professional" value="yes"><label for="hk-signup-pro">I cook for a living</label></div><div class="hk-field"><button class="wp-element-button" type="submit">Send me the letter</button><p class="hk-form__note">One letter a month. Leave whenever you like.</p></div></form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
