<?php
/**
 * Title: Newsletter: the Route Card
 * Slug: hokuto-driving-school/newsletter-signup
 * Categories: hokuto-driving-school
 * Keywords: newsletter, signup
 * Viewport Width: 1440
 * Description: The monthly newsletter sign-up beside a photograph of the frosty morning street.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-head hk-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-head hk-section--last"><!-- wp:group {"align":"wide","className":"hk-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-split"><!-- wp:group {"className":"hk-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Newsletter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hk-head__title"} -->
<h1 class="wp-block-heading hk-head__title">The Route Card, once a month.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">New evening slots, test-centre news, road works on the ring road and one good habit, written by Mara on the first Monday of the month. Learners and parents both read it.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="hk-form hk-form--row" action="#" method="post"><p class="hk-field"><label for="hk-letter">Email address</label><input id="hk-letter" name="email" type="email" autocomplete="email"></p><p class="hk-field"><button type="submit">Subscribe</button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hk-small"} -->
<p class="hk-small">One letter a month, never shared, and every letter has an unsubscribe link.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hk-split__photo hk-split__photo--tall"} -->
<figure class="wp-block-image size-large hk-split__photo hk-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/frost.webp' ) ); ?>" alt="A small car on a quiet street on a frosty morning, pale low sun"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
