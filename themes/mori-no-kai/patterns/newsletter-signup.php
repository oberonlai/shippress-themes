<?php
/**
 * Title: Newsletter — the Forest Letter sign-up
 * Slug: mori-no-kai/newsletter-signup
 * Categories: mori-no-kai
 * Keywords: newsletter, subscribe, sign up, email
 * Viewport Width: 1440
 * Description: The newsletter page opening: a large title, what the letter contains as a ruled list, and a sign-up card (plain HTML form: connect it to your email service) beside a photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mk-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mk-page-head"><!-- wp:group {"align":"wide","className":"mk-split mk-split--6-5","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mk-split mk-split--6-5"><!-- wp:group {"className":"mk-stack mk-stack--loose","layout":{"type":"default"}} -->
<div class="wp-block-group mk-stack mk-stack--loose"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The Forest Letter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">A letter from <em>the valley</em>, each season</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Four times a year, Haruka writes about what changed on the slopes. It takes five minutes to read and is best with tea.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-ruled"} -->
<ul class="wp-block-list is-style-ruled"><!-- wp:list-item -->
<li>One story from the forest, with a photograph</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The next season's work days, before anyone else</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A short, honest update on the money</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mk-stack mk-stack--loose","layout":{"type":"default"}} -->
<div class="wp-block-group mk-stack mk-stack--loose"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"mk-figure mk-figure--wide"} -->
<figure class="wp-block-image size-large mk-figure mk-figure--wide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/field-notebook.jpg' ) ); ?>" alt="An open notebook, a pencil and pressed leaves on a wooden table"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<form class="mk-form mk-form-card" action="#" method="post" onsubmit="return false;">
	<p class="mk-field mk-field--half"><label for="mk-n-name">First name</label><input id="mk-n-name" type="text" name="name" autocomplete="given-name"></p>
	<p class="mk-field mk-field--half"><label for="mk-n-email">Email</label><input id="mk-n-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<label class="mk-consent"><input type="checkbox" name="consent" required> Send me the Forest Letter. I can unsubscribe with one click.</label>
	<p class="mk-field"><button class="wp-block-button__link wp-element-button" type="submit">Subscribe</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
