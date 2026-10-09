<?php
/**
 * Title: Season letter — newsletter signup
 * Slug: beni-kappo/newsletter-signup
 * Categories: beni-kappo, call-to-action, featured
 * Keywords: newsletter, signup, subscribe, email, letter
 * Viewport Width: 1440
 * Description: The newsletter page opening: a large title, what each monthly letter brings, a plain signup form (connect the action to your email service) and a tall noren-cut picture.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bk-page-head is-style-lantern","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull bk-page-head is-style-lantern" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"bk-grid bk-layered","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide bk-grid bk-layered"><!-- wp:group {"className":"bk-letter__copy","style":{"layout":{"columnSpan":7,"columnStart":1},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group bk-letter__copy"><!-- wp:paragraph {"className":"is-style-kicker"} -->
<p class="is-style-kicker">The season letter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"bk-page-head__title"} -->
<h1 class="wp-block-heading bk-page-head__title">One letter, <em>the day before</em> the book opens</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">On the last day of each month we write what the next month will taste like, and readers get the reservation link a day before everyone else.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-ruled"} -->
<ul class="wp-block-list is-style-ruled"><!-- wp:list-item -->
<li>Next month's ingredients, and the course they are likely to become</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A sake Sayo is excited about, and where it comes from</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The reservation link, twenty-four hours early</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:html -->
<form class="bk-form bk-form--letter" action="#" method="post">
	<label for="bk-n-email">Your email</label>
	<div class="bk-form__row">
		<input id="bk-n-email" type="email" name="email" autocomplete="email" placeholder="name@example.com" required>
		<button type="submit" class="wp-element-button">Subscribe</button>
	</div>
	<p class="bk-form__note">Twelve letters a year, no tracking. Leave with one click.</p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-noren-cut bk-layered__media","style":{"layout":{"columnSpan":4,"columnStart":9}}} -->
<figure class="wp-block-image size-full is-style-noren-cut bk-layered__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rice-donabe.svg' ) ); ?>" alt="A black clay rice pot with its lid lifted, steam rising over glossy new-crop rice" style="aspect-ratio:3/4;object-fit:cover"/><figcaption class="wp-element-caption">From the October letter: the first new rice.</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
