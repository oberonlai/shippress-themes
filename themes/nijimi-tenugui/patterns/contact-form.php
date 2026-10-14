<?php
/**
 * Title: Contact: write to us
 * Slug: nijimi-tenugui/contact-form
 * Categories: nijimi-tenugui
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: A simple contact form on a pale panel.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nt-section nt-section--paper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull nt-section nt-section--paper"><!-- wp:group {"align":"wide","className":"nt-split nt-split--5-7 nt-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide nt-split nt-split--5-7 nt-split--top"><!-- wp:group {"className":"nt-stack","layout":{"type":"default"}} -->
<div class="wp-block-group nt-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Orders, shops, <em>a cloth of your own.</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tell us the pattern, how many and where they are going. We reply within a day; for twenty cloths or more we can dye a pattern of your own.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="nt-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>An order</option><option>Cloths for a shop</option><option>A pattern of our own</option><option>A visit to the workshop</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
