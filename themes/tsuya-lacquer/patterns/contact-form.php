<?php
/**
 * Title: Contact: write to us
 * Slug: tsuya-lacquer/contact-form
 * Categories: tsuya-lacquer
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: A simple contact form on a paper panel.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ts-section ts-section--paper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ts-section ts-section--paper"><!-- wp:group {"align":"wide","className":"ts-split ts-split--5-7 ts-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ts-split ts-split--5-7 ts-split--top"><!-- wp:group {"className":"ts-stack","layout":{"type":"default"}} -->
<div class="wp-block-group ts-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Orders, re-coats, questions.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tell us which piece, or send a photograph of one that needs care. We will reply with a plan and a price.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="ts-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>An order</option><option>A re-coat or repair</option><option>A commission</option><option>Visiting the workshop</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
