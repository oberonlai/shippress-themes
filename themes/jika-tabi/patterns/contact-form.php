<?php
/**
 * Title: Contact: form and details
 * Slug: jika-tabi/contact-form
 * Categories: jika-tabi
 * Keywords: tabi footwear, jika-tabi
 * Viewport Width: 1440
 * Description: The contact form beside the synced shop details and cloth-and-care notes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"jt-section jt-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull jt-section jt-section--flush-top"><!-- wp:group {"align":"wide","className":"jt-split jt-split--7-5 jt-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide jt-split jt-split--7-5 jt-split--top"><!-- wp:group {"className":"jt-stack","layout":{"type":"default"}} -->
<div class="wp-block-group jt-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Sizes, mending, <em>fittings.</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>For a fitting, tell us which Monday suits you and your usual shoe size.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="jt-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>An order</option><option>A class</option><option>Framing</option><option>A gift</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"jt-stack jt-contact-side","layout":{"type":"default"}} -->
<div class="wp-block-group jt-stack jt-contact-side"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The shop</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"jika-tabi/shop-info"} /-->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Cloth and care</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"jt-repair-wrap jt-repair-wrap--contact","layout":{"type":"default"}} -->
<div class="wp-block-group jt-repair-wrap jt-repair-wrap--contact"><!-- wp:pattern {"slug":"jika-tabi/repair-info"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
