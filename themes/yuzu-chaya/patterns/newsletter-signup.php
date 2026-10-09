<?php
/**
 * Title: The Steep — newsletter page head
 * Slug: yuzu-chaya/newsletter-signup
 * Categories: yuzu-chaya, call-to-action, featured
 * Keywords: newsletter, signup, subscribe, email
 * Viewport Width: 1440
 * Description: The newsletter page opening: a yuzu tile with the title, what each letter brings and the signup form, beside the letter illustration.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yc-page-head","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-page-head" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"wide","className":"yc-bento","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide yc-bento"><!-- wp:group {"className":"yc-tile yc-tile--yuzu","style":{"layout":{"columnSpan":7},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--yuzu"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">A letter from the counter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">The <em>Steep</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">One short letter on the first Friday of every month, written between pots of tea.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-leaves"} -->
<ul class="wp-block-list is-style-leaves"><!-- wp:list-item -->
<li>What just arrived from the farms, and how to brew it</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>First dibs on the sweets of the season before they sell out</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>One small story from the counter</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

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
<div class="wp-block-group yc-tile yc-tile--image"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/newsletter-letter.svg' ) ); ?>" alt="A folded letter sealed with a red bean-coloured wax dot and a tea-leaf stamp" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
