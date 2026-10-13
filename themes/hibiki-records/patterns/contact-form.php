<?php
/**
 * Title: Contact: write to us
 * Slug: hibiki-records/contact-form
 * Categories: hibiki-records
 * Keywords: records, vinyl
 * Viewport Width: 1440
 * Description: A simple contact form that writes an email to the shop.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hb-section"><!-- wp:group {"align":"wide","className":"hb-split hb-split--5-7 hb-split--top hb-write-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hb-split hb-split--5-7 hb-split--top hb-write-wrap"><!-- wp:group {"className":"hb-stack hb-write","layout":{"type":"default"}} -->
<div class="wp-block-group hb-stack hb-write"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">A record, an order, <em>a question.</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Selling a collection? Tell us roughly how many records and what kind; we come to you for more than two boxes.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-fine hb-form__fallback"} -->
<p class="is-style-fine hb-form__fallback">The form opens your email app; nothing is stored on this site.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="hb-form" action="#" method="post" data-subject="A note for the shop" hidden><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>A record or an order</option><option>Grading or shipping</option><option>The listening booth</option><option>Selling a collection</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
