<?php
/**
 * Title: Contact — the form
 * Slug: seiji-utsuwa/contact-form
 * Categories: seiji-utsuwa, call-to-action
 * Keywords: contact, form, email, message
 * Viewport Width: 1440
 * Description: A contact form on a porcelain plinth beside the other ways to reach the shop in a catalogue table. Plain HTML form: connect it to your form or email service.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"su-section su-contact","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull su-section su-contact"><!-- wp:group {"align":"wide","className":"su-grid","layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide su-grid"><!-- wp:group {"className":"is-style-plinth su-contact__form","style":{"layout":{"columnSpan":7}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-plinth su-contact__form"><!-- wp:html -->
<form class="su-form" action="#" method="post">
	<p class="su-field su-field--half"><label for="su-c-name">Your name</label><input id="su-c-name" type="text" name="name" autocomplete="name" required></p>
	<p class="su-field su-field--half"><label for="su-c-email">Email</label><input id="su-c-email" type="email" name="email" autocomplete="email" placeholder="name@example.com" required></p>
	<p class="su-field"><label for="su-c-topic">About</label><select id="su-c-topic" name="topic"><option>A piece in the shop</option><option>An order</option><option>A repair</option><option>Visiting the viewing room</option><option>Wholesale or a restaurant</option><option>Something else</option></select></p>
	<p class="su-field"><label for="su-c-message">Message</label><textarea id="su-c-message" name="message" rows="6" required></textarea></p>
	<p class="su-field"><button type="submit" class="wp-element-button">Send message</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"su-contact__other","style":{"layout":{"columnSpan":5}},"layout":{"type":"default"}} -->
<div class="wp-block-group su-contact__other"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Other ways</p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"is-style-catalogue"} -->
<figure class="wp-block-table is-style-catalogue"><table class="has-fixed-layout"><tbody><tr><td>Email</td><td><a href="mailto:hello@mizuiro.example">hello@mizuiro.example</a></td></tr><tr><td>Orders</td><td><a href="mailto:orders@mizuiro.example">orders@mizuiro.example</a></td></tr><tr><td>Telephone</td><td><a href="tel:+81760000318">+81 76 000 0318</a></td></tr><tr><td>Post</td><td>4-7 Kazue-machi, Kanazawa, Ishikawa</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"su-small"} -->
<p class="su-small">For a repair, a photo of every piece helps us quote straight away.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
