<?php
/**
 * Title: Contact — message form and the office
 * Slug: shiro-horitsu/contact-form
 * Categories: shiro-horitsu
 * Keywords: contact, form, email, address, phone, office hours
 * Viewport Width: 1440
 * Description: The office address, hours, telephone and email beside a consultation request form card (plain HTML: connect it to your form service), with a note that sending it does not create a lawyer–client relationship.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sh-section sh-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sh-section sh-section--flush-top"><!-- wp:group {"align":"wide","className":"sh-split sh-split--4-7","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sh-split sh-split--4-7"><!-- wp:group {"className":"sh-address","layout":{"type":"default"}} -->
<div class="wp-block-group sh-address"><!-- wp:group {"className":"sh-stack","layout":{"type":"default"}} -->
<div class="wp-block-group sh-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The office</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Shiro Law Office<br>4F Kiri House, 2-0-7 Hirakawa-cho<br>Chiyoda-ku, Tokyo 102-0000</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-stack","layout":{"type":"default"}} -->
<div class="wp-block-group sh-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Telephone and email</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="tel:+810000000418">+81 00 0000 0418</a><br><a href="mailto:office@shiro-law.example">office@shiro-law.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-stack","layout":{"type":"default"}} -->
<div class="wp-block-group sh-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Urgent matters</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>If you have received court papers with a deadline, please call rather than write, and say so when we answer.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-stack sh-stack--loose","layout":{"type":"default"}} -->
<div class="wp-block-group sh-stack sh-stack--loose"><!-- wp:html -->
<form class="sh-form sh-form-card" action="#" method="post" onsubmit="return false;">
	<p class="sh-field sh-field--half"><label for="sh-c-name">Name</label><input id="sh-c-name" type="text" name="name" autocomplete="name" required></p>
	<p class="sh-field sh-field--half"><label for="sh-c-email">Email</label><input id="sh-c-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="sh-field sh-field--half"><label for="sh-c-tel">Telephone (optional)</label><input id="sh-c-tel" type="tel" name="tel" autocomplete="tel"></p>
	<p class="sh-field sh-field--half"><label for="sh-c-area">Area</label><select id="sh-c-area" name="area"><option>Corporate and commercial</option><option>Family law</option><option>Inheritance and succession</option><option>Intellectual property</option><option>Not sure yet</option></select></p>
	<fieldset class="sh-choice">
		<legend>I would like</legend>
		<label><input type="radio" name="request" value="consultation" checked> A first consultation</label>
		<label><input type="radio" name="request" value="call"> A short call first</label>
		<label><input type="radio" name="request" value="question"> To ask a question</label>
	</fieldset>
	<p class="sh-field"><label for="sh-c-parties">Other people involved (for our conflict check)</label><input id="sh-c-parties" type="text" name="parties"></p>
	<p class="sh-field"><label for="sh-c-msg">What has happened, briefly</label><textarea id="sh-c-msg" name="message" rows="6" required></textarea></p>
	<label class="sh-consent"><input type="checkbox" name="consent" required> Use my details only to reply to this message. I understand that sending it does not make me a client of the firm.</label>
	<p class="sh-field"><button class="wp-block-button__link wp-element-button" type="submit">Send message</button></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"is-style-fine"} -->
<p class="is-style-fine">Please do not send confidential documents until we have confirmed that we can act for you.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
