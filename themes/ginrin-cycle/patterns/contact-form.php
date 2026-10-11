<?php
/**
 * Title: Contact: write to the workshop
 * Slug: ginrin-cycle/contact-form
 * Categories: ginrin-cycle, contact
 * Keywords: form, contact, message
 * Viewport Width: 1440
 * Description: A plain HTML message form for builds, repairs and orders (connect its action to your form or email service), next to a short note.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"gc-section gc-section--paper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull gc-section gc-section--paper"><!-- wp:group {"align":"wide","className":"gc-split gc-split--5-7 gc-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide gc-split gc-split--5-7 gc-split--top"><!-- wp:group {"className":"gc-stack","layout":{"type":"default"}} -->
<div class="wp-block-group gc-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Builds, repairs and questions.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tell us about the bicycle you have or the one you would like. We answer within two working days, usually from the bench.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="gc-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>A custom build</option><option>A repair or service</option><option>A bike fit</option><option>An order from the shop</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
