<?php
/**
 * Title: Home: wide site band with parallax
 * Slug: kodou-charging/front-band
 * Categories: kodou-charging
 * Viewport Width: 1440
 * Description: A full-width 3:1 photograph that drifts slowly as you scroll, with its caption below.
 */
?>
<!-- wp:group {"align":"full","className":"kc-band sp-parallax","layout":{"type":"default"},"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-group alignfull kc-band sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-band__img"} -->
<figure class="wp-block-image size-full kc-band__img"><img src="<?php echo kodou_charging_img( 'site-band-wide.webp' ); ?>" alt="<?php echo kodou_charging_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","className":"kc-bandcap","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-bandcap">
<!-- wp:group {"className":"kc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap">
<!-- wp:paragraph {"className":"kc-caption"} -->
<p class="kc-caption"><?php echo esc_html( kodou_charging_t( 'band_cap' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
