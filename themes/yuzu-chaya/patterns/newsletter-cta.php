<?php
/**
 * Title: The Steep — newsletter call to action
 * Slug: yuzu-chaya/newsletter-cta
 * Categories: yuzu-chaya, call-to-action
 * Keywords: newsletter, signup, subscribe, email
 * Viewport Width: 1440
 * Description: On kinari paper: the letter photograph beside the newsletter's promise and a one-line signup form.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yc-section yc-section--kinari","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-section yc-section--kinari"><!-- wp:group {"align":"wide","className":"yc-split yc-split--5-7 yc-split--middle","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide yc-split yc-split--5-7 yc-split--middle"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"yc-figure"} -->
<figure class="wp-block-image size-full yc-figure"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/newsletter-letter.jpg' ) ); ?>" alt="A folded sheet of washi tied with string next to a paper packet of tea and a sprig of tea leaves" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"yc-stack","layout":{"type":"default"}} -->
<div class="wp-block-group yc-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The Steep — once a month</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">New harvests, <em>first</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A short letter on the first Friday of the month: what just arrived, what we are brewing at the counter, and first dibs on the sweets of the season.</p>
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
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
