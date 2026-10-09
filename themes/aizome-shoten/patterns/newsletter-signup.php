<?php
/**
 * Title: The Slip — newsletter signup
 * Slug: aizome-shoten/newsletter-signup
 * Categories: aizome-shoten, call-to-action, featured
 * Keywords: newsletter, signup, subscribe, email, the slip
 * Viewport Width: 1440
 * Description: The newsletter page opening: a spine label, a condensed title, what each monthly letter brings as a numbered index, a plain signup form (connect the action to your email service) and the letterpress proof illustration.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"az-page-head","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull az-page-head" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"az-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide az-grid"><!-- wp:paragraph {"className":"is-style-spine","style":{"layout":{"columnSpan":1}}} -->
<p class="is-style-spine">The Slip — monthly</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"layout":{"columnSpan":6,"columnStart":2},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">A letter from the counter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">The<br><em>Slip.</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead az-page-head__note"} -->
<p class="is-style-lead az-page-head__note">One page, folded in three, on the first Friday of every month. It started as the slip of paper we tuck into every parcel; now it comes by email too.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-index"} -->
<ul class="wp-block-list is-style-index"><!-- wp:list-item -->
<li>What arrived this month, and which three we'd take on a long train</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The next four readings, before the chairs are gone</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>One page from a Shiori Press book in progress</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:html -->
<form class="az-form az-form--letter" action="#" method="post">
	<label for="az-n-email">Your email</label>
	<div class="az-form__row">
		<input id="az-n-email" type="email" name="email" autocomplete="email" placeholder="name@example.com" required>
		<button type="submit" class="wp-element-button">Subscribe</button>
	</div>
	<p class="az-form__note">Free, monthly, no tracking pixels. Unsubscribe from any issue.</p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-mat az-page-head__image","style":{"layout":{"columnSpan":5,"columnStart":8}}} -->
<figure class="wp-block-image size-full is-style-mat az-page-head__image"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/letterpress-proof.svg' ) ); ?>" alt="A letterpress proof sheet with crop marks and the word Slowly in large condensed capitals" style="aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
