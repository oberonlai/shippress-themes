<?php
/**
 * Title: Contact: write to us
 * Slug: tsuki-silver/contact-form
 * Categories: tsuki-silver
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: A simple contact form on a pale panel.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tk-section tk-section--paper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tk-section tk-section--paper"><!-- wp:group {"align":"wide","className":"tk-split tk-split--5-7 tk-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tk-split tk-split--5-7 tk-split--top"><!-- wp:group {"className":"tk-stack","layout":{"type":"default"}} -->
<div class="wp-block-group tk-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Orders, sizing, repairs.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tell us which piece you are thinking of and, for a ring, the finger you will wear it on. We reply within two working days.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="tk-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>An order</option><option>Ring sizing</option><option>A gift or engraving</option><option>Repair or re-polish</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
