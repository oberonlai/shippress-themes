<?php
/**
 * Title: Newsletter signup
 * Slug: ma-vertical/newsletter
 * Categories: ma-vertical, call-to-action
 * Keywords: newsletter, subscribe, email, form
 * Description: A monthly-letter signup with a vertical heading and a plain HTML form (connect the action to your mail provider).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","className":"ma-reverse","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide ma-reverse"><!-- wp:column {"width":"26%"} -->
<div class="wp-block-column" style="flex-basis:26%"><!-- wp:group {"className":"is-style-tategaki","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-tategaki"><!-- wp:heading {"className":"has-shu-mark","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-shu-mark has-xx-large-font-size">A letter,<br>once a month.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"56%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:56%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">04 — The monthly letter</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ma-lead"} -->
<p class="ma-lead">On the morning of each new moon we send a letter from the studio: seasonal work, exhibition news, and a little white space.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ma-muted","fontSize":"small"} -->
<p class="ma-muted has-small-font-size">One letter a month, nothing more. Your address is never shared or sold.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="ma-newsletter-form" action="#" method="post">
	<label>Email address
		<input type="email" name="email" placeholder="you@example.com" required autocomplete="email">
	</label>
	<button type="submit">Subscribe</button>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ma-newsletter-note"} -->
<p class="ma-newsletter-note">Unsubscribe at any time.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"18%"} -->
<div class="wp-block-column" style="flex-basis:18%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
