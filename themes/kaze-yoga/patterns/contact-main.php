<?php
/**
 * Title: Contact: form, studio details and the garden
 * Slug: kaze-yoga/contact-main
 * Categories: kaze-yoga
 * Keywords: contact, form, address, phone, email, map
 * Viewport Width: 1440
 * Description: A message form on a paper card beside the studio details (the synced pattern, edited in one place) and a photograph of the garden.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ky-section ky-section--flush","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ky-section ky-section--flush"><!-- wp:group {"align":"wide","className":"ky-form-grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ky-form-grid"><!-- wp:group {"className":"is-style-card ky-form-card","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card ky-form-card"><!-- wp:heading {"className":"ky-form-card__title"} -->
<h2 class="wp-block-heading ky-form-card__title">Send a message</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="ky-form" action="#" method="post" onsubmit="return false;">
	<p class="ky-field ky-field--half"><label for="ky-c-name">Your name</label><input id="ky-c-name" type="text" name="name" autocomplete="name" required></p>
	<p class="ky-field ky-field--half"><label for="ky-c-email">Email</label><input id="ky-c-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="ky-field"><label for="ky-c-topic">About</label><select id="ky-c-topic" name="topic"><option>A question about classes</option><option>Passes and prices</option><option>Private sessions</option><option>Renting the room</option><option>Something else</option></select></p>
	<p class="ky-field"><label for="ky-c-msg">Message</label><textarea id="ky-c-msg" name="message" rows="5" required></textarea></p>
	<p class="ky-field"><button class="wp-block-button__link wp-element-button" type="submit">Send message</button></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ky-fine"} -->
<p class="ky-fine">This form is a sample: connect it to your own form or email service.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ky-form-side","layout":{"type":"default"}} -->
<div class="wp-block-group ky-form-side"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The studio</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"kaze-yoga/studio-info"} /-->

<!-- wp:image {"sizeSlug":"large","className":"ky-contact__img"} -->
<figure class="wp-block-image size-large ky-contact__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/garden.jpg' ) ); ?>" alt="An open sliding door looking onto a small moss garden with stepping stones and a maple"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
