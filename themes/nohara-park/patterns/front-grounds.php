<?php
/**
 * Title: Home: the grounds (parallax band with inset card)
 * Slug: nohara-park/front-grounds
 * Categories: nohara-park
 * Viewport Width: 1440
 * Description: Full-bleed grounds photograph with a slow parallax drift and a static white inset card at the right.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"np-band sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-band sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-band__pic"} -->
<figure class="wp-block-image size-full np-band__pic"><img src="<?php echo nohara_park_img( 'g1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_G1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"np-band__card","layout":{"type":"default"}} -->
<div class="wp-block-group np-band__card"><!-- wp:heading {"className":"np-band__h2"} -->
<h2 class="wp-block-heading np-band__h2"><?php echo esc_html( nohara_park_t( 'gr_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<hr class="np-rule"/>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-band__p"} -->
<p class="np-band__p"><?php echo esc_html( nohara_park_t( 'gr_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
