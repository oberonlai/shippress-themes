<?php
/**
 * Title: Contact — write to the counter
 * Slug: aizome-shoten/contact-form
 * Categories: aizome-shoten, call-to-action
 * Keywords: contact, form, email, message, special order
 * Viewport Width: 1440
 * Description: A contact form (name, email, what it is about, message) on a paper card beside the ways to reach the shop. Plain HTML: connect the action to your form or email service.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"az-section az-contact","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull az-section az-contact" style="margin-top:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"az-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide az-grid"><!-- wp:group {"style":{"layout":{"columnSpan":5},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-catalog-no"} -->
<p class="is-style-catalog-no">Write</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">To the<br>counter</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Special orders usually arrive within a week. For zines on consignment, send a copy by post: we read everything that arrives.</p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"is-style-ledger"} -->
<figure class="wp-block-table is-style-ledger"><table><tbody><tr><td>Email</td><td><a href="mailto:counter@shiorido.example">counter@shiorido.example</a></td></tr><tr><td>Telephone</td><td><a href="tel:+81300001974">+81 3 0000 1974</a></td></tr><tr><td>Press</td><td><a href="mailto:press@shiorido.example">press@shiorido.example</a></td></tr><tr><td>Post</td><td>3-7 Sumi-zaka, Kanda, Chiyoda, Tokyo</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="az-form az-form--card" action="#" method="post">
	<p class="az-field az-field--half"><label for="az-c-name">Your name</label><input id="az-c-name" type="text" name="name" autocomplete="name" required></p>
	<p class="az-field az-field--half"><label for="az-c-email">Email</label><input id="az-c-email" type="email" name="email" autocomplete="email" placeholder="name@example.com" required></p>
	<p class="az-field"><label for="az-c-topic">About</label><select id="az-c-topic" name="topic"><option>Ordering a book</option><option>A book you don't have yet</option><option>Readings and events</option><option>Zines on consignment</option><option>Shiori Press</option><option>Something else</option></select></p>
	<p class="az-field"><label for="az-c-message">Message</label><textarea id="az-c-message" name="message" rows="6" required></textarea></p>
	<p class="az-field"><button type="submit" class="wp-element-button">Send to the counter</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
