<?php
/**
 * Title: Home: doorway band
 * Slug: shikii-mats/front-band
 * Categories: shikii-mats
 * Viewport Width: 1440
 * Description: Full-width doorway photograph with a slow parallax drift and a docked white caption panel.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sm-band sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sm-band sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sm-band__bg sp-parallax__layer"} -->
<figure class="wp-block-image size-full sm-band__bg sp-parallax__layer"><img src="<?php echo shikii_mats_img( 'band-shop-dusk.webp' ); ?>" alt="<?php echo shikii_mats_a( 'alt_p11' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"sm-wrap sm-band__in","layout":{"type":"default"}} -->
<div class="wp-block-group sm-wrap sm-band__in">
<!-- wp:group {"className":"sm-band__panel","layout":{"type":"default"}} -->
<div class="wp-block-group sm-band__panel">
<!-- wp:heading {"level":2,"className":"sm-h2 sm-h2--panel"} -->
<h2 class="wp-block-heading sm-h2 sm-h2--panel"><?php echo esc_html( shikii_mats_t( 'band_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sm-p"} -->
<p class="sm-p"><?php echo esc_html( shikii_mats_t( 'band_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"sm-cta"} -->
<div class="wp-block-buttons sm-cta"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/book-a-trial/"><?php echo esc_html( shikii_mats_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
