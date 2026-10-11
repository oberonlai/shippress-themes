<?php
/**
 * Title: Contact: write to us
 * Slug: kuyuru-incense/contact-form
 * Categories: kuyuru-incense
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: A simple contact form on a paper panel.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ky-section ky-section--paper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ky-section ky-section--paper"><!-- wp:group {"align":"wide","className":"ky-split ky-split--5-7 ky-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ky-split ky-split--5-7 ky-split--top"><!-- wp:group {"className":"ky-stack","layout":{"type":"default"}} -->
<div class="wp-block-group ky-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Orders, samples, questions.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tell us what you like to smell, and when. We will suggest a first box.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="ky-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>An order</option><option>A sample box</option><option>Choosing a scent</option><option>Wholesale</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
