<?php
/**
 * Title: Contact: form and shop details
 * Slug: menya-kaen/contact-main
 * Categories: menya-kaen
 * Keywords: contact, form, address, hours, phone, email
 * Viewport Width: 1440
 * Description: A message form (plain HTML: connect it to your form service) beside the synced shop details.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mk-section mk-section--flush mk-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mk-section mk-section--flush mk-section--last"><!-- wp:group {"align":"wide","className":"mk-contact","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mk-contact"><!-- wp:group {"className":"mk-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group mk-contact__form"><!-- wp:html -->
<form class="mk-form" action="#" method="post" onsubmit="return false;">
	<p class="mk-field"><label for="mk-c-name">Your name</label><input id="mk-c-name" type="text" name="name" autocomplete="name" required></p>
	<p class="mk-field"><label for="mk-c-email">Email</label><input id="mk-c-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="mk-field"><label for="mk-c-topic">About</label><select id="mk-c-topic" name="topic"><option>A question about the menu</option><option>Allergies and diet</option><option>Press and photographs</option><option>Working at the counter</option><option>Something else</option></select></p>
	<p class="mk-field"><label for="mk-c-msg">Your letter</label><textarea id="mk-c-msg" name="message" rows="6" required></textarea></p>
	<p class="mk-field"><button class="wp-block-button__link wp-element-button" type="submit">Send</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mk-contact__info","layout":{"type":"default"}} -->
<div class="wp-block-group mk-contact__info"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The shop</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"menya-kaen/shop-info"} /-->

<!-- wp:buttons {"className":"mk-links"} -->
<div class="wp-block-buttons mk-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/map/">The walk from the station</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
