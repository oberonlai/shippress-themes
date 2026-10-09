<?php
/**
 * Title: Kiln Letter — signup
 * Slug: seiji-utsuwa/newsletter-signup
 * Categories: seiji-utsuwa, call-to-action
 * Keywords: newsletter, signup, subscribe, kiln letter
 * Viewport Width: 1440
 * Description: The newsletter page head: a large title, what the letter brings and a signup form on a porcelain plinth beside an image of a letter.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"su-section su-page-head su-newsletter-signup","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull su-section su-page-head su-newsletter-signup"><!-- wp:group {"align":"wide","className":"su-grid","layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide su-grid"><!-- wp:group {"className":"su-signup__copy","style":{"layout":{"columnSpan":7}},"layout":{"type":"default"}} -->
<div class="wp-block-group su-signup__copy"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The Kiln Letter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">A letter after every <em>kiln</em> opening</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">About six times a year, when a kiln is opened and the new work arrives, we write: what came out, what surprised us, and which pieces are coming to the shop. Subscribers see them two days early.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"is-style-plinth su-signup__plinth","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-plinth su-signup__plinth"><!-- wp:html -->
<form class="su-form" action="#" method="post">
	<p class="su-field su-field--half"><label for="su-nl-name">First name</label><input id="su-nl-name" type="text" name="name" autocomplete="given-name"></p>
	<p class="su-field su-field--half"><label for="su-nl-email">Email</label><input id="su-nl-email" type="email" name="email" autocomplete="email" placeholder="name@example.com" required></p>
	<fieldset class="su-choices"><legend>Most interested in</legend><label><input type="checkbox" name="topics[]" value="celadon" checked> Celadon</label><label><input type="checkbox" name="topics[]" value="wood-fired"> Wood-fired</label><label><input type="checkbox" name="topics[]" value="repair"> Repair &amp; care</label></fieldset>
	<p class="su-field"><button type="submit" class="wp-element-button">Subscribe to the Kiln Letter</button></p>
	<p class="su-form__note">Six letters a year. Leave with one click, any time.</p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"su-signup__media","style":{"layout":{"columnSpan":5}},"layout":{"type":"default"}} -->
<div class="wp-block-group su-signup__media"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-arch su-parallax"} -->
<figure class="wp-block-image size-full is-style-arch su-parallax"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/newsletter-letter.svg' ) ); ?>" alt="An envelope with a folded letter and a small celadon shard resting on it, tied with string" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
