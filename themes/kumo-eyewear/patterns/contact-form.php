<?php
/**
 * Title: Contact: write to us
 * Slug: kumo-eyewear/contact-form
 * Categories: kumo-eyewear
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: A simple contact form on a paper panel.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ku-section ku-section--paper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ku-section ku-section--paper"><!-- wp:group {"align":"wide","className":"ku-split ku-split--5-7 ku-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ku-split ku-split--5-7 ku-split--top"><!-- wp:group {"className":"ku-stack","layout":{"type":"default"}} -->
<div class="wp-block-group ku-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Orders, fittings, repairs.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tell us which frame, or your current measurements. For prescriptions, attach a photo of the paper after we reply.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="ku-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>A fitting</option><option>An order</option><option>Lenses</option><option>A repair or adjustment</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
