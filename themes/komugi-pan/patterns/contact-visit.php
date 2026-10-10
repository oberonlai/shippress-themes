<?php
/**
 * Title: Contact: page head with the visit card
 * Slug: komugi-pan/contact-visit
 * Categories: komugi-pan, contact
 * Keywords: contact, visit, address, hours, phone
 * Viewport Width: 1440
 * Description: The contact page head: a title, the visit card (address, hours, phone and email as one synced pattern) in a white panel and a photograph of the bakery.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kp-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kp-page-head"><!-- wp:group {"align":"wide","className":"kp-split kp-split--7-5","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kp-split kp-split--7-5"><!-- wp:group {"className":"kp-stack","layout":{"type":"default"}} -->
<div class="wp-block-group kp-stack"><!-- wp:paragraph {"className":"is-style-tag"} -->
<p class="is-style-tag">Visit &amp; contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Come by <em>for a warm one</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Two minutes from the station, behind the little shrine. Look for the round wheat sign and the bicycle by the door.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kp-panel","layout":{"type":"default"}} -->
<div class="wp-block-group kp-panel"><!-- wp:pattern {"slug":"komugi-pan/visit-info"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kp-story__picture"} -->
<figure class="wp-block-image size-full kp-story__picture"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.jpg' ) ); ?>" alt="Sourdough loaves and baguettes cooling on a wooden rack by the window"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
