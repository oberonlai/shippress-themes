<?php
/**
 * Title: Contact: write to us
 * Slug: yoru-chocolate/contact-form
 * Categories: yoru-chocolate
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: A simple contact form on a quiet panel.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yc-section yc-section--paper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-section yc-section--paper"><!-- wp:group {"align":"wide","className":"yc-split yc-split--5-7 yc-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide yc-split yc-split--5-7 yc-split--top"><!-- wp:group {"className":"yc-stack","layout":{"type":"default"}} -->
<div class="wp-block-group yc-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Orders, gifts, <em>a long question.</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tell us what you would like, how many and when. We reply within a day and confirm before we pack.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="yc-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>An order</option><option>Gift boxes for many</option><option>A wedding or event</option><option>A question about an origin</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
