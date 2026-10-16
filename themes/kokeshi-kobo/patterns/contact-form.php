<?php
/**
 * Title: Contact: form and details
 * Slug: kokeshi-kobo/contact-form
 * Categories: kokeshi-kobo
 * Keywords: kokeshi, kokeshi-kobo
 * Viewport Width: 1440
 * Description: The contact form beside the synced shop details and wood-and-care notes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kk-section kk-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kk-section kk-section--flush-top"><!-- wp:group {"align":"wide","className":"kk-split kk-split--7-5 kk-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kk-split kk-split--7-5 kk-split--top"><!-- wp:group {"className":"kk-stack","layout":{"type":"default"}} -->
<div class="wp-block-group kk-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Dolls, commissions, <em>classes.</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>For a painting class, tell us which Saturday suits you and how many are coming.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="kk-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>An order</option><option>A class</option><option>Framing</option><option>A gift</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kk-stack kk-contact-side","layout":{"type":"default"}} -->
<div class="wp-block-group kk-stack kk-contact-side"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The shop</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"kokeshi-kobo/shop-info"} /-->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Wood and care</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kk-redoll-wrap kk-redoll-wrap--contact","layout":{"type":"default"}} -->
<div class="wp-block-group kk-redoll-wrap kk-redoll-wrap--contact"><!-- wp:pattern {"slug":"kokeshi-kobo/redoll-info"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
