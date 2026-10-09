<?php
/**
 * Title: The Steep — newsletter call to action
 * Slug: yuzu-chaya/newsletter-cta
 * Categories: yuzu-chaya, call-to-action
 * Keywords: newsletter, signup, subscribe, email
 * Viewport Width: 1440
 * Description: A yuzu tile with the newsletter's promise and a one-line signup form, beside the letter illustration.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yc-section yc-newsletter-cta","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-section yc-newsletter-cta" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"yc-bento","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide yc-bento"><!-- wp:group {"className":"yc-tile yc-tile--yuzu yc-motif yc-motif--steam","style":{"layout":{"columnSpan":7},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--yuzu yc-motif yc-motif--steam"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The Steep — once a month</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">New harvests, <em>first</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">A short letter on the first Friday of the month: what just arrived, what we are brewing at the counter, and first dibs on the sweets of the season.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="yc-form yc-form--letter" action="#" method="post">
	<label for="yc-n-email">Your email</label>
	<div class="yc-form__row">
		<input id="yc-n-email" type="email" name="email" autocomplete="email" placeholder="name@example.com" required>
		<button type="submit" class="wp-element-button">Subscribe</button>
	</div>
	<p class="yc-form__note">One letter a month. No tracking pixels, unsubscribe any time.</p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--image","style":{"layout":{"columnSpan":5}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--image"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/newsletter-letter.svg' ) ); ?>" alt="A folded letter sealed with a red bean-coloured wax dot and a tea-leaf stamp" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
