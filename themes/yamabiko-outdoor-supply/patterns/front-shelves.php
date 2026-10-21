<?php
/**
 * Title: Home: three shelves (inset veil band)
 * Slug: yamabiko-outdoor-supply/front-shelves
 * Categories: yamabiko-outdoor-supply
 * Keywords: outdoor, camping, gear, shop
 * Viewport Width: 1440
 * Description: Inset photo band under a dark veil with three underlined shelf links.
 */
$yb = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"shelves","className":"yb-band","layout":{"type":"default"}} -->
<section id="shelves" class="wp-block-group alignfull yb-band"><!-- wp:group {"className":"yb-band__box","layout":{"type":"default"}} -->
<div class="wp-block-group yb-band__box"><!-- wp:image {"sizeSlug":"full","className":"yb-band__photo sp-parallax"} -->
<figure class="wp-block-image size-full yb-band__photo sp-parallax"><img src="<?php echo esc_url( $yb . 'p09-shelves.webp' ); ?>" alt="A misty forest valley under low cloud"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"yb-band__entries","layout":{"type":"default"}} -->
<div class="wp-block-group yb-band__entries"><!-- wp:html -->
<a class="yb-entry" href="/shop/?shelf=shelter"><span>01 Shelter</span><b>Tents &amp; tarps</b></a><a class="yb-entry" href="/shop/?shelf=carry"><span>02 Carry</span><b>Packs</b></a><a class="yb-entry" href="/shop/?shelf=layers-sleep"><span>03 Layers &amp; sleep</span><b>Layers &amp; sleep</b></a>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yb-band__note"} -->
<p class="yb-band__note">Three shelves, nothing in between. Every item on them has spent at least ten nights outside with one of us.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
