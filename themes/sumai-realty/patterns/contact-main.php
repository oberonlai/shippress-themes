<?php
/**
 * Title: Contact: form and office details
 * Slug: sumai-realty/contact-main
 * Categories: sumai-realty
 * Keywords: contact, form, viewing, office, hours, phone
 * Viewport Width: 1440
 * Description: A viewing request form (plain HTML) beside the synced office details card.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sr-section sr-section--tight","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sr-section sr-section--tight"><!-- wp:group {"align":"wide","className":"sr-split sr-split--form","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sr-split sr-split--form"><!-- wp:group {"className":"sr-card is-style-plan-frame","layout":{"type":"default"}} -->
<div class="wp-block-group sr-card is-style-plan-frame"><!-- wp:heading {"className":"sr-card__title"} -->
<h2 class="wp-block-heading sr-card__title">Request a viewing</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="sr-form" action="#" method="post" onsubmit="return false;">
	<p class="sr-field sr-field--half"><label for="sr-c-name">Name</label><input id="sr-c-name" type="text" name="name" autocomplete="name" required></p>
	<p class="sr-field sr-field--half"><label for="sr-c-email">Email</label><input id="sr-c-email" type="email" name="email" autocomplete="email" required></p>
	<p class="sr-field sr-field--half"><label for="sr-c-phone">Phone (optional)</label><input id="sr-c-phone" type="tel" name="phone" autocomplete="tel"></p>
	<p class="sr-field sr-field--half"><label for="sr-c-type">I would like to</label><select id="sr-c-type" name="type"><option>Buy</option><option>Rent</option><option>Reserve a new build</option><option>Sell or let my home</option></select></p>
	<p class="sr-field"><label for="sr-c-home">Which home (sheet number or name)</label><input id="sr-c-home" type="text" name="home" placeholder="For example B-01, Kitamachi corner house"></p>
	<p class="sr-field"><label for="sr-c-msg">Message</label><textarea id="sr-c-msg" name="message" rows="5"></textarea></p>
	<p class="sr-field"><button class="wp-block-button__link wp-element-button" type="submit">Send the request</button></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"sr-small"} -->
<p class="sr-small">We use your details only to answer you. Nothing is shared with landlords or sellers until you say so.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sr-card sr-card--deep","layout":{"type":"default"}} -->
<div class="wp-block-group sr-card sr-card--deep"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The office</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"sumai-realty/office-info"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
