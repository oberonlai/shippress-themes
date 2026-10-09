<?php
/**
 * Title: Newsletter — The Section, signup with issue preview
 * Slug: kenchiku-grid/newsletter-signup
 * Categories: kenchiku-grid, call-to-action
 * Keywords: newsletter, subscribe, email, signup, form
 * Viewport Width: 1400
 * Description: A quarterly-letter signup: display title, a plain HTML form with mono labels and interest options (connect the action to your mail provider), and a framed preview of the latest issue.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kg-page-head","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kg-page-head" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","className":"kg-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide kg-grid"><!-- wp:paragraph {"className":"is-style-mono-label kg-hero__kicker","style":{"layout":{"columnSpan":2}}} -->
<p class="is-style-mono-label kg-hero__kicker">(04) Newsletter<br>Quarterly<br>Since 2014</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"is-style-display-tight","style":{"layout":{"columnSpan":10}}} -->
<h1 class="wp-block-heading is-style-display-tight">The Section — four letters a year, cut through the work.</h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"kg-grid","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide kg-grid" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:group {"className":"kg-signup","style":{"layout":{"columnSpan":5,"columnStart":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group kg-signup"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">One drawing, one building site, one material, one book. Sent at each solstice and equinox from the Kyoto studio. Never more, never sold.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="kg-form kg-form--signup" action="#" method="post">
	<div class="kg-field">
		<label for="kg-nl-email">01 — Email</label>
		<input id="kg-nl-email" type="email" name="email" placeholder="you@example.com" required autocomplete="email">
	</div>
	<div class="kg-field">
		<label for="kg-nl-name">02 — Name <span>(optional)</span></label>
		<input id="kg-nl-name" type="text" name="name" placeholder="First name" autocomplete="given-name">
	</div>
	<fieldset class="kg-field kg-choices">
		<legend>03 — Most interested in</legend>
		<label><input type="checkbox" name="topics[]" value="houses" checked> Houses</label>
		<label><input type="checkbox" name="topics[]" value="public"> Public buildings</label>
		<label><input type="checkbox" name="topics[]" value="process" checked> Process &amp; materials</label>
		<label><input type="checkbox" name="topics[]" value="events"> Lectures &amp; open studios</label>
	</fieldset>
	<button type="submit" class="wp-element-button">Subscribe to The Section</button>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"is-style-mono-label kg-form-note"} -->
<p class="is-style-mono-label kg-form-note">2,840 readers / Unsubscribe in one click</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-spec-card kg-issue","style":{"layout":{"columnSpan":4,"columnStart":9}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-spec-card kg-issue"><!-- wp:group {"className":"kg-card__meta kg-issue__meta","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group kg-card__meta kg-issue__meta"><!-- wp:paragraph {"className":"is-style-mono-label"} -->
<p class="is-style-mono-label">Issue 15</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-mono-label"} -->
<p class="is-style-mono-label">Autumn 2026</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/section.svg' ) ); ?>" alt="Building section with sun angles" style="aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"kg-issue__title"} -->
<h3 class="wp-block-heading kg-issue__title">On thresholds</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-index-list kg-issue__list"} -->
<ul class="wp-block-list is-style-index-list kg-issue__list"><!-- wp:list-item -->
<li>Drawing — the 600 mm reveal</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Site — Shimogamo, the morning of the pour</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Material — sugi, sandblasted</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Book — “In Praise of Shadows”, again</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
