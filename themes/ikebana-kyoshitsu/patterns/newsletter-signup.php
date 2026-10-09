<?php
/**
 * Title: Seasonal notes — newsletter signup
 * Slug: ikebana-kyoshitsu/newsletter-signup
 * Categories: ikebana-kyoshitsu, call-to-action, featured
 * Keywords: newsletter, signup, subscribe, email, seasonal notes
 * Viewport Width: 1440
 * Description: The newsletter page opening: an off-axis title, what each monthly letter brings as stem-marked notes, a plain signup form (connect the action to your email service) and a tall arched illustration.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ik-page-head is-style-petal-light","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ik-page-head is-style-petal-light" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"ik-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide ik-grid"><!-- wp:paragraph {"className":"is-style-vertical-label","style":{"layout":{"columnSpan":1}}} -->
<p class="is-style-vertical-label">Seasonal notes</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"layout":{"columnSpan":6,"columnStart":2},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"className":"is-style-off-axis"} -->
<h1 class="wp-block-heading is-style-off-axis">One letter<br><em>a month.</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">On the first of each month: what is coming into the flower market, one arrangement to try at home, and the seats still open in next month's classes.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-stems"} -->
<ul class="wp-block-list is-style-stems"><!-- wp:list-item -->
<li>A short note from the studio, never more than three hundred words</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>One home arrangement, drawn as a line diagram</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Open seats and workshop dates, before they are posted anywhere else</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:html -->
<form class="ik-form ik-form--letter" action="#" method="post">
	<label for="ik-n-email">Your email</label>
	<div class="ik-form__row">
		<input id="ik-n-email" type="email" name="email" autocomplete="email" placeholder="name@example.com" required>
		<button type="submit" class="wp-element-button">Subscribe</button>
	</div>
	<p class="ik-form__note">Free, monthly, no tracking. Leave with one click.</p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-leaf-arch ik-page-head__image","style":{"layout":{"columnSpan":4,"columnStart":9}}} -->
<figure class="wp-block-image size-full is-style-leaf-arch ik-page-head__image"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/summer-grasses.svg' ) ); ?>" alt="Summer grasses and a single pale flower in a clear glass vase" style="aspect-ratio:4/5;object-fit:cover"/><figcaption class="wp-element-caption">From the August letter: grasses in a water glass.</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
