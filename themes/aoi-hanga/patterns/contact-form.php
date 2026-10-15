<?php
/**
 * Title: Contact: form and details
 * Slug: aoi-hanga/contact-form
 * Categories: aoi-hanga
 * Keywords: woodblock prints, hanga
 * Viewport Width: 1440
 * Description: The contact form beside the synced studio details and edition terms.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ah-section ah-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ah-section ah-section--flush-top"><!-- wp:group {"align":"wide","className":"ah-split ah-split--7-5 ah-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ah-split ah-split--7-5 ah-split--top"><!-- wp:group {"className":"ah-stack","layout":{"type":"default"}} -->
<div class="wp-block-group ah-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Editions, framing, <em>classes.</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>For a class, tell us which Saturday suits you and how many are coming.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="ah-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>An order</option><option>A class</option><option>Framing</option><option>A gift</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-stack ah-contact-side","layout":{"type":"default"}} -->
<div class="wp-block-group ah-stack ah-contact-side"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The studio</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"aoi-hanga/shop-info"} /-->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Edition terms</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ah-repair-wrap ah-repair-wrap--contact","layout":{"type":"default"}} -->
<div class="wp-block-group ah-repair-wrap ah-repair-wrap--contact"><!-- wp:pattern {"slug":"aoi-hanga/repair-info"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
