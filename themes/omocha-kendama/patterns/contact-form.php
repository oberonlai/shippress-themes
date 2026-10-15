<?php
/**
 * Title: Contact: form and details
 * Slug: omocha-kendama/contact-form
 * Categories: omocha-kendama
 * Keywords: wooden toys, kendama
 * Viewport Width: 1440
 * Description: The contact form beside the synced shop details and wood-and-care notes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ok-section ok-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ok-section ok-section--flush-top"><!-- wp:group {"align":"wide","className":"ok-split ok-split--7-5 ok-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ok-split ok-split--7-5 ok-split--top"><!-- wp:group {"className":"ok-stack","layout":{"type":"default"}} -->
<div class="wp-block-group ok-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Toys, mending, <em>Saturdays.</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>For a Saturday at the lathe, tell us which day suits you and how many are coming.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="ok-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>An order</option><option>A class</option><option>Framing</option><option>A gift</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ok-stack ok-contact-side","layout":{"type":"default"}} -->
<div class="wp-block-group ok-stack ok-contact-side"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The shop</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"omocha-kendama/shop-info"} /-->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Wood and care</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ok-repair-wrap ok-repair-wrap--contact","layout":{"type":"default"}} -->
<div class="wp-block-group ok-repair-wrap ok-repair-wrap--contact"><!-- wp:pattern {"slug":"omocha-kendama/repair-info"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
