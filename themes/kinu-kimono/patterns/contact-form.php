<?php
/**
 * Title: Contact: form
 * Slug: kinu-kimono/contact-form
 * Categories: kinu-kimono, call-to-action
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: A simple contact form beside a short note.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kk-section kk-section--paper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kk-section kk-section--paper"><!-- wp:group {"align":"wide","className":"kk-split kk-split--5-7 kk-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kk-split kk-split--5-7 kk-split--top"><!-- wp:group {"className":"kk-stack","layout":{"type":"default"}} -->
<div class="wp-block-group kk-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Groups, ceremonies and questions.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tell us the date, how many of you there are and what the day is for. We answer within a day, usually from the dressing room.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="kk-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>A rental booking</option><option>A group of five or more</option><option>Dressing my own kimono</option><option>A shop order</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
