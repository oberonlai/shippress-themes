<?php
/**
 * Title: Contact: write to us
 * Slug: mizuha-glass/contact-form
 * Categories: mizuha-glass
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: A simple contact form on a pale panel.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mz-section mz-section--paper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mz-section mz-section--paper"><!-- wp:group {"align":"wide","className":"mz-split mz-split--5-7 mz-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mz-split mz-split--5-7 mz-split--top"><!-- wp:group {"className":"mz-stack","layout":{"type":"default"}} -->
<div class="wp-block-group mz-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Orders, sets, <em>a piece made to measure.</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tell us the piece, how many and where it is going. We reply within a day, and send a photograph of the batch before we pack it.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="mz-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>An order</option><option>A set for a restaurant</option><option>A piece made to measure</option><option>A visit to the studio</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
