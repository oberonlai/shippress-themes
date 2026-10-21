<?php
/**
 * Title: Home: visit the shop
 * Slug: yamabiko-outdoor-supply/front-visit
 * Categories: yamabiko-outdoor-supply
 * Keywords: outdoor, camping, gear, shop
 * Viewport Width: 1440
 * Description: Shop photo, welcome text, hours and address.
 */
$yb = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"visit","className":"yb-sec yb-visit","layout":{"type":"default"}} -->
<section id="visit" class="wp-block-group alignfull yb-sec yb-visit"><!-- wp:group {"className":"yb-wrap yb-visit__in","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap yb-visit__in"><!-- wp:image {"sizeSlug":"full","className":"yb-visit__photo"} -->
<figure class="wp-block-image size-full yb-visit__photo"><img src="<?php echo esc_url( $yb . 'p15-shop.webp' ); ?>" alt="A staff member fitting a backpack on a customer inside the shop"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"yb-visit__text","layout":{"type":"default"}} -->
<div class="wp-block-group yb-visit__text"><!-- wp:paragraph {"className":"yb-label"} -->
<p class="yb-label">Visit the shop</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"yb-h"} -->
<h2 class="wp-block-heading yb-h">Come and lift them.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A spec sheet cannot tell you how a pack sits on your hips. Come to 14 Quarry Lane, load one up and walk it round the shop. On Thursday evenings Lukas Brandt runs free pack fittings, and on the first Saturday of the month the repair clinic is open to anyone with a torn jacket.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yb-hours"} -->
<p class="yb-hours"><span>Tue–Fri</span> 10:00–19:00<br><span>Sat</span> 09:00–18:00<br><span>Sun</span> 10:00–16:00<br><span>Mon</span> Closed</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/visit/">Plan a visit</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/visit/">Book a pack fitting →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
