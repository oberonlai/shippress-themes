<?php
/**
 * Title: Contact: form and details
 * Slug: shigure-umbrellas/contact-form
 * Categories: shigure-umbrellas
 * Keywords: umbrellas, rain
 * Viewport Width: 1440
 * Description: The contact form beside the synced shop details and repair terms.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sg-section sg-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sg-section sg-section--flush-top"><!-- wp:group {"align":"wide","className":"sg-split sg-split--7-5 sg-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sg-split sg-split--7-5 sg-split--top"><!-- wp:group {"className":"sg-stack","layout":{"type":"default"}} -->
<div class="wp-block-group sg-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Orders, sizes, <em>repairs.</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>For a repair, tell us what happened and add a photograph of the frame if you can.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="sg-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>An order</option><option>A size</option><option>A repair</option><option>A gift</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sg-stack sg-contact-side","layout":{"type":"default"}} -->
<div class="wp-block-group sg-stack sg-contact-side"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The shop</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"shigure-umbrellas/shop-info"} /-->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Repairs</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sg-repair-wrap sg-repair-wrap--contact","layout":{"type":"default"}} -->
<div class="wp-block-group sg-repair-wrap sg-repair-wrap--contact"><!-- wp:pattern {"slug":"shigure-umbrellas/repair-info"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
