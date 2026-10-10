<?php
/**
 * Title: Contact — write to the counter
 * Slug: yuzu-chaya/contact-form
 * Categories: yuzu-chaya, call-to-action, contact
 * Keywords: contact, form, email, message
 * Viewport Width: 1440
 * Description: A contact form (name, email, topic, message) beside the email addresses, phone and post in hairline rows. Plain HTML: connect the action to your form or email service.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yc-section yc-section--line","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-section yc-section--line"><!-- wp:group {"align":"wide","className":"yc-split yc-split--6-5","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide yc-split yc-split--6-5"><!-- wp:group {"className":"yc-stack yc-stack--loose","layout":{"type":"default"}} -->
<div class="wp-block-group yc-stack yc-stack--loose"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">To the <em>counter</em></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="yc-form" action="#" method="post">
	<p class="yc-field yc-field--half"><label for="yc-c-name">Your name</label><input id="yc-c-name" type="text" name="name" autocomplete="name" required></p>
	<p class="yc-field yc-field--half"><label for="yc-c-email">Email</label><input id="yc-c-email" type="email" name="email" autocomplete="email" placeholder="name@example.com" required></p>
	<p class="yc-field"><label for="yc-c-topic">About</label><select id="yc-c-topic" name="topic"><option>An order</option><option>The tea box</option><option>Brewing a tea</option><option>Wholesale for a cafe</option><option>Something else</option></select></p>
	<p class="yc-field"><label for="yc-c-message">Message</label><textarea id="yc-c-message" name="message" rows="6" required></textarea></p>
	<p class="yc-field"><button type="submit" class="wp-element-button">Send to the counter</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-stack","layout":{"type":"default"}} -->
<div class="wp-block-group yc-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Other ways</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Email, phone or post</h3>
<!-- /wp:heading -->

<!-- wp:table {"className":"is-style-info"} -->
<figure class="wp-block-table is-style-info"><table class="has-fixed-layout"><tbody><tr><td>Shop</td><td><a href="mailto:hello@kiirochaya.example">hello@kiirochaya.example</a></td></tr><tr><td>Tea box</td><td><a href="mailto:box@kiirochaya.example">box@kiirochaya.example</a></td></tr><tr><td>Telephone</td><td><a href="tel:+81540000412">+81 54 000 0412</a></td></tr><tr><td>Post</td><td>2-8 Kihada-dori, Aoi-ku, Shizuoka</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"is-style-fine"} -->
<p class="is-style-fine">We reply within a day, except Tuesdays and Wednesdays, when we are out at the farms.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
