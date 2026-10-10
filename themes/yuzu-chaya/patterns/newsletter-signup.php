<?php
/**
 * Title: The Steep — newsletter page head
 * Slug: yuzu-chaya/newsletter-signup
 * Categories: yuzu-chaya, banner, call-to-action
 * Keywords: newsletter, signup, subscribe
 * Viewport Width: 1440
 * Description: The newsletter page opening: a large title, what each letter brings in hairline rows and the signup form, beside the letter photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yc-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-page-head"><!-- wp:group {"align":"wide","className":"yc-split yc-split--6-5 yc-split--middle","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide yc-split yc-split--6-5 yc-split--middle"><!-- wp:group {"className":"yc-stack yc-stack--loose","layout":{"type":"default"}} -->
<div class="wp-block-group yc-stack yc-stack--loose"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">A letter from the counter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">The <em>Steep</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">One short letter on the first Friday of every month, written between pots of tea.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-hairline"} -->
<ul class="wp-block-list is-style-hairline"><!-- wp:list-item -->
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
	<label for="yc-l-email">Your email</label>
	<div class="yc-form__row">
		<input id="yc-l-email" type="email" name="email" autocomplete="email" placeholder="name@example.com" required>
		<button type="submit" class="wp-element-button">Subscribe</button>
	</div>
	<p class="yc-form__note">One letter a month. No tracking pixels, unsubscribe any time.</p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"yc-figure"} -->
<figure class="wp-block-image size-full yc-figure"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/newsletter-letter.jpg' ) ); ?>" alt="A folded sheet of washi tied with string next to a paper packet of tea and a sprig of tea leaves" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
