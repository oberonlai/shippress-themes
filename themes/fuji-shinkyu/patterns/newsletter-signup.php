<?php
/**
 * Title: Seasonal letter — newsletter signup
 * Slug: fuji-shinkyu/newsletter-signup
 * Categories: fuji-shinkyu, call-to-action, featured
 * Keywords: newsletter, signup, subscribe, email, seasonal letter
 * Viewport Width: 1440
 * Description: The newsletter page opening: a light title, what each seasonal letter brings as points, a plain signup form (connect the action to your email service) and a circle illustration.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"fs-page-head is-style-halo","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull fs-page-head is-style-halo" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"fs-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide fs-grid"><!-- wp:paragraph {"className":"is-style-point-label","style":{"layout":{"columnSpan":12}}} -->
<p class="is-style-point-label">The seasonal letter</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"fs-letter__copy","style":{"layout":{"columnSpan":7,"columnStart":1},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group fs-letter__copy"><!-- wp:heading {"level":1,"className":"fs-page-head__title"} -->
<h1 class="wp-block-heading fs-page-head__title">Four letters <em>a year</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">One at the start of each season: what the weather asks of the body, a breathing or warmth practice to try at home, and the clinic's hours for the months ahead.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-points"} -->
<ul class="wp-block-list is-style-points"><!-- wp:list-item -->
<li>A short note from the treatment room, never more than four hundred words</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>One home practice, drawn as a simple line diagram</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Holiday hours and new openings, before anyone else</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:html -->
<form class="fs-form fs-form--letter" action="#" method="post">
	<label for="fs-n-email">Your email</label>
	<div class="fs-form__row">
		<input id="fs-n-email" type="email" name="email" autocomplete="email" placeholder="name@example.com" required>
		<button type="submit" class="wp-element-button">Subscribe</button>
	</div>
	<p class="fs-form__note">Four times a year, no tracking. Leave with one click.</p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-circle fs-page-head__image","style":{"layout":{"columnSpan":4,"columnStart":9}}} -->
<figure class="wp-block-image size-full is-style-circle fs-page-head__image"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/breath-circles.svg' ) ); ?>" alt="Concentric lilac circles widening around a small gold point, like a slow breath" style="aspect-ratio:1;object-fit:cover"/><figcaption class="wp-element-caption">From the spring letter: the four-six breath, drawn.</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
