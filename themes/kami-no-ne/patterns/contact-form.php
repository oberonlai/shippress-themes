<?php
/**
 * Title: Contact — the form
 * Slug: kami-no-ne/contact-form
 * Categories: kami-no-ne, text, call-to-action
 * Keywords: contact, form, email
 * Viewport Width: 1440
 * Description: A contact form (plain HTML: connect its action to your form service) beside the email, phone and opening hours.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kn-section kn-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kn-section kn-section--flush-top"><!-- wp:group {"align":"wide","className":"kn-split kn-split--7-5","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kn-split kn-split--7-5"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:html -->
<form class="kn-form" action="#" method="post"><div class="kn-field kn-field--half"><label for="kn-contact-name">Your name</label><input id="kn-contact-name" type="text" name="name" autocomplete="name" required></div><div class="kn-field kn-field--half"><label for="kn-contact-email">Email</label><input id="kn-contact-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></div><div class="kn-field"><label for="kn-contact-topic">About</label><select id="kn-contact-topic" name="topic"><option>An order</option><option>A custom seal</option><option>Workshops</option><option>Wholesale</option><option>Something else</option></select></div><div class="kn-field"><label for="kn-contact-message">Message</label><textarea id="kn-contact-message" name="message" rows="6" required></textarea></div><div class="kn-field"><button class="wp-element-button" type="submit">Send the letter</button><p class="kn-form__note">We reply within two days, Wednesday to Sunday.</p></div></form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kn-stack kn-stack--loose","layout":{"type":"default"}} -->
<div class="wp-block-group kn-stack kn-stack--loose"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Directly</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kn-contact-lines"} -->
<p class="kn-contact-lines"><a href="mailto:hello@kaminone.example">hello@kaminone.example</a><br><a href="tel:+81580000310">+81 58 000 0310</a></p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"is-style-info"} -->
<figure class="wp-block-table is-style-info"><table class="has-fixed-layout"><tbody><tr><td>Shop</td><td>Wednesday to Sunday, 11:00 to 18:00</td></tr><tr><td>Workshops</td><td>Second and fourth Saturdays</td></tr><tr><td>Closed</td><td>Mondays, Tuesdays and Dec 26 — Jan 4</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
