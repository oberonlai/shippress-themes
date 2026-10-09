<?php
/**
 * Title: Contact — write to the counter
 * Slug: yuzu-chaya/contact-form
 * Categories: yuzu-chaya, call-to-action
 * Keywords: contact, form, email, message
 * Viewport Width: 1440
 * Description: A washi tile with a contact form (name, email, topic, message) beside an ink tile with the email addresses and phone. Plain HTML: connect the action to your form or email service.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yc-section yc-contact","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-section yc-contact" style="margin-top:0;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","className":"yc-bento","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide yc-bento"><!-- wp:group {"className":"yc-tile","style":{"layout":{"columnSpan":7},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Write</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">To the <em>counter</em></h3>
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

<!-- wp:group {"className":"yc-tile yc-tile--ink yc-motif yc-motif--steam yc-motif--bottom","style":{"layout":{"columnSpan":5},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--ink yc-motif yc-motif--steam yc-motif--bottom"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Other ways</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Email, phone or <em>post</em></h3>
<!-- /wp:heading -->

<!-- wp:table {"className":"is-style-info"} -->
<figure class="wp-block-table is-style-info"><table class="has-fixed-layout"><tbody><tr><td>Shop</td><td><a href="mailto:hello@kiirochaya.example">hello@kiirochaya.example</a></td></tr><tr><td>Tea box</td><td><a href="mailto:box@kiirochaya.example">box@kiirochaya.example</a></td></tr><tr><td>Telephone</td><td><a href="tel:+81540000412">+81 54 000 0412</a></td></tr><tr><td>Post</td><td>2-8 Kihada-dori, Aoi-ku, Shizuoka</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">We reply within a day, except Tuesdays and Wednesdays, when we are out at the farms.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
