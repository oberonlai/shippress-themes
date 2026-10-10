<?php
/**
 * Title: Newsletter: sign up for the monthly letter
 * Slug: wagu-mono/newsletter-signup
 * Categories: wagu-mono, call-to-action
 * Keywords: newsletter, subscribe, email
 * Viewport Width: 1440
 * Description: The newsletter page head: what the monthly letter brings, an email form (plain HTML: connect it to your email service) and a joinery photograph on a drawing plate.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"wm-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull wm-page-head"><!-- wp:group {"align":"wide","className":"wm-split wm-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide wm-split wm-split--top"><!-- wp:group {"className":"wm-stack","layout":{"type":"default"}} -->
<div class="wp-block-group wm-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Once a month</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">The <em>offcut</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">A short letter from the workshop on the first Sunday of the month: what is on the bench, one care tip, the pieces leaving the showroom floor, and the dates of the open workshop afternoons.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="wm-form wm-form--inline" action="#" method="post"><label>Your email<input type="email" name="email" placeholder="you@example.com" autocomplete="email" required></label><button type="submit">Sign me up</button></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"is-style-fine"} -->
<p class="is-style-fine">About 3,100 readers. No adverts, no sales every week, and you can leave with one click.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-plate"} -->
<figure class="wp-block-image size-full is-style-plate"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/joinery.jpg' ) ); ?>" alt="Close-up of a wedged through-tenon in white oak"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
