<?php
/**
 * Title: Newsletter: sign up
 * Slug: ginrin-cycle/letter-signup
 * Categories: ginrin-cycle, call-to-action
 * Keywords: newsletter, subscribe, email
 * Viewport Width: 1440
 * Description: The newsletter page head: what the monthly letter brings and an email form (plain HTML: connect it to your email service).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"gc-section gc-section--opening","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull gc-section gc-section--opening"><!-- wp:group {"align":"wide","className":"gc-split gc-split--7-5","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide gc-split gc-split--7-5"><!-- wp:group {"className":"gc-stack","layout":{"type":"default"}} -->
<div class="wp-block-group gc-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Once a month</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Letters from the workshop.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">A build from the bench, a repair worth sharing, a note on care and the date of the next dawn ride from the workshop door.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="gc-form gc-form--inline" action="#" method="post"><label>Your email<input type="email" name="email" placeholder="you@example.com" autocomplete="email" required></label><button type="submit">Subscribe</button></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"is-style-fine"} -->
<p class="is-style-fine">One letter a month, never shared. Leave with one click.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-drawing"} -->
<figure class="wp-block-image size-full is-style-drawing"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/ride.jpg' ) ); ?>" alt="A cyclist riding along a misty riverside path at dawn"/><figcaption class="wp-element-caption">Fig. 01 — The October dawn ride</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
