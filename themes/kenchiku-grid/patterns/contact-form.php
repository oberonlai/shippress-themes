<?php
/**
 * Title: Contact — enquiry form and direct lines
 * Slug: kenchiku-grid/contact-form
 * Categories: kenchiku-grid, contact
 * Keywords: contact, form, enquiry, email, commission, press
 * Viewport Width: 1400
 * Description: A numbered enquiry section: direct email lines for commissions, press and careers beside a plain HTML project enquiry form (connect the action to your form handler).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kg-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|70"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kg-section" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","className":"kg-grid kg-section-head","style":{"spacing":{"blockGap":{"top":"0.5rem","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide kg-grid kg-section-head"><!-- wp:paragraph {"className":"is-style-mono-label kg-section-head__no","style":{"layout":{"columnSpan":2}}} -->
<p class="is-style-mono-label kg-section-head__no">01</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-mono-label","style":{"layout":{"columnSpan":4}}} -->
<p class="is-style-mono-label">Enquiries</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","className":"is-style-mono-label","style":{"layout":{"columnSpan":6}}} -->
<p class="has-text-align-right is-style-mono-label">Reply within three working days</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"kg-grid","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide kg-grid" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"kg-lines","style":{"layout":{"columnSpan":4,"columnStart":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group kg-lines"><!-- wp:group {"className":"is-style-module","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-module"><!-- wp:paragraph {"className":"is-style-mono-label"} -->
<p class="is-style-mono-label">A — New commissions</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kg-line"} -->
<p class="kg-line"><a href="mailto:studio@toho-kenchiku.example">studio@toho-kenchiku.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-module","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-module"><!-- wp:paragraph {"className":"is-style-mono-label"} -->
<p class="is-style-mono-label">B — Press &amp; publications</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kg-line"} -->
<p class="kg-line"><a href="mailto:press@toho-kenchiku.example">press@toho-kenchiku.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-module","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-module"><!-- wp:paragraph {"className":"is-style-mono-label"} -->
<p class="is-style-mono-label">C — Careers &amp; internships</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kg-line"} -->
<p class="kg-line"><a href="mailto:jobs@toho-kenchiku.example">jobs@toho-kenchiku.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="kg-form kg-form--contact" action="#" method="post" style="grid-column:8 / span 5">
	<div class="kg-field">
		<label for="kg-c-name">01 — Name</label>
		<input id="kg-c-name" type="text" name="name" autocomplete="name" required>
	</div>
	<div class="kg-field">
		<label for="kg-c-email">02 — Email</label>
		<input id="kg-c-email" type="email" name="email" autocomplete="email" required>
	</div>
	<div class="kg-field kg-field--half">
		<label for="kg-c-type">03 — Project type</label>
		<select id="kg-c-type" name="type">
			<option>New house</option>
			<option>Renovation</option>
			<option>Public / cultural</option>
			<option>Workplace</option>
			<option>Other</option>
		</select>
	</div>
	<div class="kg-field kg-field--half">
		<label for="kg-c-site">04 — Site location</label>
		<input id="kg-c-site" type="text" name="site" placeholder="City, prefecture">
	</div>
	<div class="kg-field">
		<label for="kg-c-msg">05 — Tell us about the place</label>
		<textarea id="kg-c-msg" name="message" rows="4" placeholder="The site, the people, the light you remember…"></textarea>
	</div>
	<button type="submit" class="wp-element-button">Send enquiry</button>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
