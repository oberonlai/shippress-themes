<?php
/**
 * Title: Footer: closing photo, ruled rows and links
 * Slug: kaimon-fishmongers/footer-main
 * Categories: kaimon-fishmongers
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"kf-footer-photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kf-footer-photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kaimon_fishmongers_img( 'f1-evening.webp' ); ?>" alt="Empty stainless steel counter being washed down with water and melting crushed ice." width="2000" height="1050"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"kf-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kf-footer"><!-- wp:group {"className":"kf-footer__in","layout":{"type":"default"}} -->
<div class="wp-block-group kf-footer__in"><!-- wp:html -->
<div class="kf-frows">
<p class="kf-label">Shopping here</p>
<a class="kf-frow" href="/order/"><span class="kf-frow__k">Ordering</span><span class="kf-frow__v">By phone 07:30–10:00 for same-day cuts</span><span class="kf-frow__arrow" aria-hidden="true"></span></a>
<a class="kf-frow" href="/cut-to-order/"><span class="kf-frow__k">Cut to order</span><span class="kf-frow__v">About 6 minutes a fish, while you wait</span><span class="kf-frow__arrow" aria-hidden="true"></span></a>
<a class="kf-frow" href="/counter/"><span class="kf-frow__k">Paying</span><span class="kf-frow__v">Card or cash at the counter</span><span class="kf-frow__arrow" aria-hidden="true"></span></a>
<a class="kf-frow" href="/counter/"><span class="kf-frow__k">Wrapping</span><span class="kf-frow__v">Waxed paper; heads and frames bagged for stock</span><span class="kf-frow__arrow" aria-hidden="true"></span></a>
<p class="kf-label">The shop</p>
<a class="kf-frow" href="/visit/"><span class="kf-frow__k">Address</span><span class="kf-frow__v">4 Quay Row, Harrowmouth</span><span class="kf-frow__arrow" aria-hidden="true"></span></a>
<a class="kf-frow" href="tel:01005550409"><span class="kf-frow__k">Telephone</span><span class="kf-frow__v">0100 555 0409</span><span class="kf-frow__arrow" aria-hidden="true"></span></a>
<a class="kf-frow" href="mailto:counter@kaimonfish.example"><span class="kf-frow__k">Write to us</span><span class="kf-frow__v">counter@kaimonfish.example</span><span class="kf-frow__arrow" aria-hidden="true"></span></a>
<a class="kf-frow" href="/visit/"><span class="kf-frow__k">Hours</span><span class="kf-frow__v">Tue–Fri 07:30–18:00 · Sat 07:00–14:00 · Sun, Mon closed</span><span class="kf-frow__arrow" aria-hidden="true"></span></a>
</div>
<!-- /wp:html -->

<!-- wp:html -->
<ul class="kf-flinks"><li><a href="/people/">People</a></li><li><a href="/journal/">Journal</a></li><li><a href="/visit/">Visit</a></li><li><a href="/order/">Order</a></li><li><a href="/landing-list/">The Landing List</a></li><li><a href="/privacy/">Privacy</a></li></ul>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"kf-copy"} -->
<p class="kf-copy">© Kaimon Fishmongers, 4 Quay Row, Harrowmouth. A fictional shop; all names and figures are invented.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="kf-corner" role="group" aria-label="Quick links"><?php if ( function_exists( 'WC' ) && WC()->cart ) : ?><a href="<?php echo esc_url( wc_get_cart_url() ); ?>">Basket (<?php echo (int) WC()->cart->get_cart_contents_count(); ?>)</a><?php endif; ?><a href="#kf-nav">Menu ↑</a><a href="/order/">Order</a><a href="/visit/">Visit</a><a href="/landing-list/">The Landing List</a></div>
<!-- /wp:html -->
