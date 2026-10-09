<?php
/**
 * Title: Contact — message form
 * Slug: ikebana-kyoshitsu/contact-form
 * Categories: ikebana-kyoshitsu, contact
 * Keywords: contact, form, message, enquiry, question
 * Viewport Width: 1440
 * Description: A paper card form (name, email, topic, message) offset to the right, with a short note on what we answer and how fast on the left (plain HTML: connect the action to your form handler).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ik-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ik-section" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"ik-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide ik-grid"><!-- wp:group {"className":"ik-form-intro ik-reveal","style":{"layout":{"columnSpan":4,"columnStart":1},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group ik-form-intro ik-reveal"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">A note <em>to the studio</em></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Questions about classes, private lessons, arranging for an event, or borrowing the studio. For a trial lesson, the <a href="/schedule/#trial">booking form</a> is quicker.</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-stem"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-stem"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"fontSize":"small","className":"ik-muted"} -->
<p class="ik-muted has-small-font-size">We do not sell flowers or arrange for funerals; we are happy to recommend a florist nearby who does.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="ik-form ik-form--card ik-form--contact ik-reveal" action="#" method="post">
	<div class="ik-field ik-field--half">
		<label for="ik-c-name">Name</label>
		<input id="ik-c-name" type="text" name="name" autocomplete="name" required>
	</div>
	<div class="ik-field ik-field--half">
		<label for="ik-c-email">Email</label>
		<input id="ik-c-email" type="email" name="email" autocomplete="email" required>
	</div>
	<div class="ik-field">
		<label for="ik-c-topic">About</label>
		<select id="ik-c-topic" name="topic">
			<option selected>Joining a class</option>
			<option>Private or company lesson</option>
			<option>Arranging for an event</option>
			<option>Renting the studio</option>
			<option>Something else</option>
		</select>
	</div>
	<div class="ik-field">
		<label for="ik-c-msg">Message</label>
		<textarea id="ik-c-msg" name="message" rows="5" required></textarea>
	</div>
	<button type="submit" class="wp-element-button">Send message</button>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
