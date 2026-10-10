<?php
/**
 * Title: Contact: write to the bakery
 * Slug: komugi-pan/contact-form
 * Categories: komugi-pan, contact
 * Keywords: form, contact, message, order
 * Viewport Width: 1440
 * Description: A plain HTML message form for orders, parties and wholesale (connect its action to your form or email service), next to a short note.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kp-section kp-section--white","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kp-section kp-section--white"><!-- wp:group {"align":"wide","className":"kp-split kp-split--5-7 kp-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kp-split kp-split--5-7 kp-split--top"><!-- wp:group {"className":"kp-stack","layout":{"type":"default"}} -->
<div class="wp-block-group kp-stack"><!-- wp:paragraph {"className":"is-style-tag"} -->
<p class="is-style-tag">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Orders, parties <em>and hellos</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>For a birthday tray, a café order or a question about an ingredient, leave us a note. We answer after the morning bake, usually the same day.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="kp-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>Reserving bread</option><option>A party or event</option><option>Café and wholesale</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
