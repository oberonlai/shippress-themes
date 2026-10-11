<?php
/**
 * Title: Contact: write to us
 * Slug: kaori-cosme/contact-form
 * Categories: kaori-cosme
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: A simple contact form on a paper panel.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-section kc-section--paper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-section kc-section--paper"><!-- wp:group {"align":"wide","className":"kc-split kc-split--5-7 kc-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-split kc-split--5-7 kc-split--top"><!-- wp:group {"className":"kc-stack","layout":{"type":"default"}} -->
<div class="wp-block-group kc-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Questions, orders and refills.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tell us about your skin and what you are looking for. We answer within a day.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="kc-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>A product question</option><option>An order</option><option>A refill</option><option>A skin consultation</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
