<?php
/**
 * Title: Contact: form and studio details
 * Slug: hikari-musubi/contact-main
 * Categories: hikari-musubi
 * Keywords: contact, form, address, phone, email
 * Description: A message form and the studio details (the synced pattern, edited in one place).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hm-section hm-contact","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-section hm-contact"><!-- wp:paragraph {"align":"center","className":"is-style-lead hm-centre"} -->
<p class="has-text-align-center is-style-lead hm-centre">Tell us a little about the two of you, the season you are thinking of and roughly how many guests. We reply within two working days.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"is-style-card hm-form-card","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card hm-form-card"><!-- wp:html -->
<form class="hm-form" action="#" method="post" onsubmit="return false;">
<p><label for="hm-names">Your names</label>
<input id="hm-names" type="text" name="names" autocomplete="name" required></p>
<p><label for="hm-email">Email</label>
<input id="hm-email" type="email" name="email" autocomplete="email" required></p>
<p><label for="hm-season">Season or date (if you know it)</label>
<input id="hm-season" type="text" name="season"></p>
<p><label for="hm-guests">Number of guests</label>
<input id="hm-guests" type="text" name="guests" inputmode="numeric"></p>
<p><label for="hm-message">A few lines about your day</label>
<textarea id="hm-message" name="message" rows="6" required></textarea></p>
<p><button type="submit" class="wp-element-button">Send</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-knot"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-knot"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","className":"is-style-label"} -->
<p class="has-text-align-center is-style-label">The studio</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"hikari-musubi/studio-info"} /--></section>
<!-- /wp:group -->
