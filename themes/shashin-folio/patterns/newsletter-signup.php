<?php
/**
 * Title: Newsletter — signup with a contact sheet
 * Slug: shashin-folio/newsletter-signup
 * Categories: shashin-folio, call-to-action, featured
 * Keywords: newsletter, signup, subscribe, email, letter
 * Viewport Width: 1440
 * Description: The newsletter page opening: title, what each letter contains, a plain signup form (connect the action to your email service) and a contact-sheet photograph with a caption.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sf-page-head sf-newsletter","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-page-head sf-newsletter" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"sf-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide sf-grid"><!-- wp:paragraph {"className":"is-style-frame-number","style":{"layout":{"columnSpan":2}}} -->
<p class="is-style-frame-number">(04)<br>Letter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"layout":{"columnSpan":10}}} -->
<h1 class="wp-block-heading">Contact <em>Sheet</em></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"sf-grid","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide sf-grid" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"sf-newsletter__copy","style":{"layout":{"columnSpan":4,"columnStart":3},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group sf-newsletter__copy"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">One letter on the first Sunday of each month: a single unpublished photograph, the full roll it came from, and a few paragraphs about the morning it was made.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-credits"} -->
<ul class="wp-block-list is-style-credits"><!-- wp:list-item -->
<li><span>01</span> One photograph, never shown anywhere else first</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><span>02</span> The contact sheet, with the frame I chose marked in red</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><span>03</span> Print sales and exhibition dates a week before anyone else</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:html -->
<form class="sf-form sf-form--letter" action="#" method="post">
	<label for="sf-n-email">Your email</label>
	<div class="sf-form__row">
		<input id="sf-n-email" type="email" name="email" autocomplete="email" placeholder="name@example.com" required>
		<button type="submit" class="wp-element-button">Subscribe</button>
	</div>
	<p class="sf-form__note">Free, monthly, no tracking pixels. Unsubscribe in one click.</p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-print","style":{"layout":{"columnSpan":5,"columnStart":8}}} -->
<figure class="wp-block-image size-full is-style-print"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/contact-sheet.svg' ) ); ?>" alt="A 35 mm contact sheet on a light table with one frame marked in red" style="aspect-ratio:3/2;object-fit:cover"/><figcaption class="wp-element-caption">Letter No. 41 — Roll 214, frame 15A marked</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
