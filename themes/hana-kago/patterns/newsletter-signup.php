<?php
/**
 * Title: Newsletter: sign up for the Monday stem letter
 * Slug: hana-kago/newsletter-signup
 * Categories: hana-kago, call-to-action
 * Keywords: newsletter, subscribe, email
 * Viewport Width: 1440
 * Description: The newsletter page head: what the Monday letter brings, an email form (plain HTML: connect it to your email service) and a basket of peonies on an album mount.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-page-head"><!-- wp:group {"align":"wide","className":"hk-split hk-split--7-5","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-split hk-split--7-5"><!-- wp:group {"className":"hk-stack","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Every Monday morning</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">The stem <em>letter</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">What our growers are cutting this week, one way to make flowers last longer, the first places at the wreath and pressing workshops, and a pressed-flower print you can download and frame.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="hk-form hk-form--inline" action="#" method="post"><label>Your email<input type="email" name="email" placeholder="you@example.com" autocomplete="email" required></label><button type="submit">Sign me up</button></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"is-style-fine"} -->
<p class="is-style-fine">About 2,400 people read it over Monday breakfast. No adverts, and you can leave with one click.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-mounted"} -->
<figure class="wp-block-image size-full is-style-mounted"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/basket.jpg' ) ); ?>" alt="Coral peonies and lilac sweet peas in a woven basket on a blush linen cloth"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
