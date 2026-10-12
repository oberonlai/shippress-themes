<?php
/**
 * Title: Contact: write to us
 * Slug: asa-linen/contact-form
 * Categories: asa-linen
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: A simple contact form on a pale panel.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"al-section al-section--paper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull al-section al-section--paper"><!-- wp:group {"align":"wide","className":"al-split al-split--5-7 al-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide al-split al-split--5-7 al-split--top"><!-- wp:group {"className":"al-stack","layout":{"type":"default"}} -->
<div class="wp-block-group al-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Orders, sizes, questions.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tell us the size of your bed and how you like to sleep. We will suggest a weight and reply within two days.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="al-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>An order</option><option>Sizes and weights</option><option>A gift</option><option>Visiting the atelier</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
