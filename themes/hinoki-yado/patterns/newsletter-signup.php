<?php
/**
 * Title: Seasonal letter — signup
 * Slug: hinoki-yado/newsletter-signup
 * Categories: hinoki-yado, call-to-action, featured
 * Keywords: newsletter, signup, subscribe, email, letter, seasons
 * Viewport Width: 1440
 * Description: The letter page opening: title, what each letter brings as a spec list, a plain signup form (connect the action to your email service) and a tall lantern-path illustration.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hy-page-head is-style-steam","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hy-page-head is-style-steam" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"hy-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide hy-grid"><!-- wp:paragraph {"className":"is-style-vertical-label","style":{"layout":{"columnSpan":1}}} -->
<p class="is-style-vertical-label">The seasonal letter</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hy-reveal","style":{"layout":{"columnSpan":6},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group hy-reveal"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Twenty-four <em>small letters.</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">One short letter at the turn of each small season, about every fifteen days: what is in flower, what is on the table and which rooms are still free.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-spec"} -->
<ul class="wp-block-list is-style-spec"><!-- wp:list-item -->
<li><span>i.</span> A note from the valley, never more than three hundred words</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><span>ii.</span> The new dinner, course by course, a day before it starts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><span>iii.</span> Rooms that freed up, before anyone else hears</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:html -->
<form class="hy-form hy-form--letter" action="#" method="post">
	<label for="hy-n-email">Your email</label>
	<div class="hy-form__row">
		<input id="hy-n-email" type="email" name="email" autocomplete="email" placeholder="name@example.com" required>
		<button type="submit" class="wp-element-button">Subscribe</button>
	</div>
	<p class="hy-form__note">Free, written by hand, no tracking. Leave with one click.</p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-washi-mat hy-reveal","style":{"layout":{"columnSpan":4,"columnStart":9}}} -->
<figure class="wp-block-image size-full is-style-washi-mat hy-reveal"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lantern-path.svg' ) ); ?>" alt="Stepping stones and lit stone lanterns between cedars at dusk" style="aspect-ratio:4/5;object-fit:cover"/><figcaption class="wp-element-caption">Letter No. 42 — the lanterns go on at five now.</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
