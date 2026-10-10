<?php
/**
 * Title: Contact — form and other ways
 * Slug: kura-shizuku/contact-form
 * Categories: kura-shizuku, text
 * Keywords: contact, form, email, phone
 * Viewport Width: 1440
 * Description: A contact form in a bottle-label panel beside a hairline table of email addresses, telephone and post.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-section ks-section--tight","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section ks-section--tight"><!-- wp:group {"align":"wide","className":"ks-grid ks-contact","layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide ks-grid ks-contact"><!-- wp:group {"className":"is-style-label-frame ks-contact__form","style":{"layout":{"columnSpan":7}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-label-frame ks-contact__form"><!-- wp:html -->
<form class="ks-form" action="#" method="post">
	<p class="ks-field ks-field--half"><label for="ks-c-name">Your name</label><input id="ks-c-name" type="text" name="name" autocomplete="name" required></p>
	<p class="ks-field ks-field--half"><label for="ks-c-email">Email</label><input id="ks-c-email" type="email" name="email" autocomplete="email" placeholder="name@example.com" required></p>
	<p class="ks-field"><label for="ks-c-topic">About</label><select id="ks-c-topic" name="topic"><option>A bottle in the cellar</option><option>An order or a delivery</option><option>A brewery tour</option><option>The tasting room</option><option>Restaurants and shops</option><option>Something else</option></select></p>
	<p class="ks-field"><label for="ks-c-message">Message</label><textarea id="ks-c-message" name="message" rows="6" required></textarea></p>
	<p class="ks-field"><button type="submit" class="wp-element-button">Send message</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-contact__other","style":{"layout":{"columnSpan":5}},"layout":{"type":"default"}} -->
<div class="wp-block-group ks-contact__other"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Other ways</p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"is-style-tasting"} -->
<figure class="wp-block-table is-style-tasting"><table class="has-fixed-layout"><tbody><tr><td>Email</td><td><a href="mailto:hello@amane-brewery.example">hello@amane-brewery.example</a></td></tr><tr><td>Orders</td><td><a href="mailto:cellar@amane-brewery.example">cellar@amane-brewery.example</a></td></tr><tr><td>Visits</td><td><a href="mailto:visit@amane-brewery.example">visit@amane-brewery.example</a></td></tr><tr><td>Telephone</td><td><a href="tel:+81250000168">+81 25 000 0168</a></td></tr><tr><td>Post</td><td>2-14 Kuramae, Yukimi, Niigata</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"ks-small"} -->
<p class="ks-small">Restaurants and shops: ask for our trade list. We deliver sake only to adults of legal drinking age.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
