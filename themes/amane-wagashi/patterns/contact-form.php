<?php
/**
 * Title: Contact: write to us
 * Slug: amane-wagashi/contact-form
 * Categories: amane-wagashi
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: A simple contact form on a pale panel.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"am-section am-section--paper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull am-section am-section--paper"><!-- wp:group {"align":"wide","className":"am-split am-split--5-7 am-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide am-split am-split--5-7 am-split--top"><!-- wp:group {"className":"am-stack","layout":{"type":"default"}} -->
<div class="wp-block-group am-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Orders, gifts, <em>a sweet out of season.</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tell us the box, the day and how many people. We reply the same day, and confirm every pre-order.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="am-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>An order</option><option>Ring sizing</option><option>A gift or engraving</option><option>Repair or re-polish</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
