<?php
/**
 * Title: Contact: write to us
 * Slug: eda-bonsai/contact-form
 * Categories: eda-bonsai
 * Keywords: bonsai, nursery
 * Viewport Width: 1440
 * Description: A simple contact form.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"eb-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-section"><!-- wp:group {"align":"wide","className":"eb-split eb-split--5-7 eb-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide eb-split eb-split--5-7 eb-split--top"><!-- wp:group {"className":"eb-stack","layout":{"type":"default"}} -->
<div class="wp-block-group eb-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">A tree, an order, <em>a question.</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>If a tree looks unwell, add a photograph of the whole tree and one of the soil surface.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="eb-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>A tree or an order</option><option>Delivery</option><option>A workshop</option><option>A tree that looks unwell</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
