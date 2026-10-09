<?php
/**
 * Title: Newsletter — The Morning Paper signup
 * Slug: kissaten-counter/newsletter-signup
 * Categories: kissaten-counter, call-to-action
 * Keywords: newsletter, subscribe, email, signup, form
 * Viewport Width: 1440
 * Description: A paper card with a top-down cup illustration, a soft serif invitation and a plain HTML signup form (connect the action to your mail provider).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-newsletter","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-newsletter" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"is-style-menu-card kc-newsletter__card","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide is-style-menu-card kc-newsletter__card"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60","top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"36%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:36%"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-saucer"} -->
<figure class="wp-block-image size-full is-style-saucer"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cup-top.svg' ) ); ?>" alt="A cup of black coffee on a saucer, seen from above" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"64%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:64%"><!-- wp:paragraph {"className":"is-style-hand"} -->
<p class="is-style-hand">one letter, first Monday of the month</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">The Morning Paper</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">The bean of the month, what the bakery is trying, which Wednesday we are closed for a holiday, and a short story from the counter. Read it with your first cup.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="kc-form kc-form--inline" action="#" method="post">
	<label class="screen-reader-text" for="kc-nl-email">Email address</label>
	<input id="kc-nl-email" type="email" name="email" placeholder="you@example.com" required autocomplete="email">
	<button type="submit" class="wp-element-button">Subscribe</button>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"kc-form-note","fontSize":"x-small"} -->
<p class="kc-form-note has-x-small-font-size">1,180 regulars read it. Unsubscribe with one click, no hard feelings.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
