<?php
/**
 * Title: Contact: write to us
 * Slug: tsuba-millinery/contact-form
 * Categories: tsuba-millinery
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: A simple contact form for orders, fittings and made-to-order hats on a quiet panel.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tm-section tm-section--paper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tm-section tm-section--paper"><!-- wp:group {"align":"wide","className":"tm-split tm-split--5-7 tm-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tm-split tm-split--5-7 tm-split--top"><!-- wp:group {"className":"tm-stack","layout":{"type":"default"}} -->
<div class="wp-block-group tm-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Orders, fittings, <em>a long question.</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tell us the hat, your head size and when you need it. Rin replies within a day and confirms the fit before anything is sewn. Or write to hello@tsuba-millinery.example.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="tm-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>An order</option><option>A made-to-order hat</option><option>A fitting appointment</option><option>A question about size or care</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
