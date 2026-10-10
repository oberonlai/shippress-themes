<?php
/**
 * Title: Contact — form and workshop hours
 * Slug: hamono-kaji/contact-form
 * Categories: hamono-kaji, text, call-to-action
 * Keywords: contact, form, email, hours
 * Viewport Width: 1440
 * Description: A contact form (plain HTML: connect its action to your form service) beside the email, phone and workshop hours in a ruled sheet.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-section hk-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-section hk-section--flush-top"><!-- wp:group {"align":"wide","className":"hk-split hk-split--7-5","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-split hk-split--7-5"><!-- wp:group {"className":"hk-letter","layout":{"type":"default"}} -->
<div class="wp-block-group hk-letter"><!-- wp:html -->
<form class="hk-form" action="#" method="post"><div class="hk-field hk-field--half"><label for="hk-contact-name">Your name</label><input id="hk-contact-name" type="text" name="name" autocomplete="name" required></div><div class="hk-field hk-field--half"><label for="hk-contact-email">Email</label><input id="hk-contact-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></div><div class="hk-field"><label for="hk-contact-topic">About</label><select id="hk-contact-topic" name="topic"><option>A sharpening booking</option><option>Choosing a knife</option><option>An order</option><option>Visiting the forge</option><option>Restaurants and trade</option><option>Something else</option></select></div><div class="hk-field"><label for="hk-contact-message">Message</label><textarea id="hk-contact-message" name="message" rows="6" required></textarea></div><div class="hk-field"><button class="wp-element-button" type="submit">Send to the forge</button><p class="hk-form__note">We reply within two days, Thursday to Monday.</p></div></form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-stack hk-stack--loose","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stack hk-stack--loose"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Directly</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-contact-lines"} -->
<p class="hk-contact-lines"><a href="mailto:forge@example.com">forge@example.com</a><br><a href="tel:+81720000418">+81 72 000 0418</a></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"is-style-label"} -->
<h3 class="wp-block-heading is-style-label">Workshop hours</h3>
<!-- /wp:heading -->

<!-- wp:table {"className":"is-style-spec"} -->
<figure class="wp-block-table is-style-spec"><table class="has-fixed-layout"><tbody><tr><td>Shop &amp; counter</td><td>Thu — Mon, 10:00 – 17:00</td></tr><tr><td>Forging days</td><td>Thu &amp; Fri mornings, visitors welcome from 9:00</td></tr><tr><td>Sharpening drop-off</td><td>Any opening day, ready in a week</td></tr><tr><td>Closed</td><td>Tue, Wed and Dec 28 — Jan 5</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
