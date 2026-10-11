<?php
/**
 * Title: Contact: form, hours and details
 * Slug: sakura-juku/contact-main
 * Categories: sakura-juku
 * Keywords: contact, form, hours, address, email
 * Viewport Width: 1280
 * Description: A contact form beside the opening hours and the school details (both synced patterns, edited in one place).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sj-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sj-section"><!-- wp:group {"align":"wide","className":"sj-bento sj-bento--contact","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sj-bento sj-bento--contact"><!-- wp:group {"className":"is-style-card sj-cell sj-contact__form sj-sticker sj-kana-sa","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card sj-cell sj-contact__form sj-sticker sj-kana-sa"><!-- wp:heading -->
<h2 class="wp-block-heading">Write to us</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="sj-form" action="#" method="post" onsubmit="return false;">
	<p class="sj-field"><label for="sj-c-name">Your name</label><input id="sj-c-name" type="text" name="name" autocomplete="name" required></p>
	<p class="sj-field"><label for="sj-c-email">Your email</label><input id="sj-c-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="sj-field"><label for="sj-c-topic">I would like to</label><select id="sj-c-topic" name="topic"><option>Book a free trial lesson</option><option>Book a level chat</option><option>Ask about a course</option><option>Something else</option></select></p>
	<p class="sj-field"><label for="sj-c-msg">Your Japanese so far, and when you are free</label><textarea id="sj-c-msg" name="message" rows="5"></textarea></p>
	<p class="sj-field sj-field--submit"><button class="wp-block-button__link wp-element-button" type="submit">Send</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-blush sj-cell sj-contact__hours","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-blush sj-cell sj-contact__hours"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Opening hours</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"sakura-juku/hours"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-sky sj-cell sj-contact__details","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-sky sj-cell sj-contact__details"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Find us</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"sakura-juku/details"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
