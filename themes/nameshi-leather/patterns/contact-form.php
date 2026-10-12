<?php
/**
 * Title: Contact: write to us
 * Slug: nameshi-leather/contact-form
 * Categories: nameshi-leather
 * Keywords: leather, atelier
 * Viewport Width: 1440
 * Description: A simple contact form on a pale stitched panel.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nm-section nm-section--paper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull nm-section nm-section--paper"><!-- wp:group {"align":"wide","className":"nm-split nm-split--5-7 nm-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide nm-split nm-split--5-7 nm-split--top"><!-- wp:group {"className":"nm-stack","layout":{"type":"default"}} -->
<div class="wp-block-group nm-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Orders, sizes, <em>repairs.</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tell us the piece and your size (for belts, your waist or an old belt’s favourite hole). For repairs, add a photograph.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="nm-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>What is it about?<select name="topic"><option>An order</option><option>A belt size</option><option>A repair</option><option>A piece made to measure</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="5" required></textarea></label><button type="submit">Send message</button></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
