<?php
/**
 * Title: Home: parallax service band
 * Slug: mise-studio/front-band
 * Categories: mise-studio
 * Keywords: parallax, band
 * Viewport Width: 1440
 * Description: A full-bleed photograph of a kitchen in service that drifts slowly on scroll, with a two-line caption at the lower left and the Book a site visit pill at the lower right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ms-band","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-band"><!-- wp:group {"className":"ms-band__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ms-band__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo mise_studio_img( 'service-band' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_service-band' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-band__in","layout":{"type":"default"}} -->
<div class="wp-block-group ms-band__in"><!-- wp:group {"className":"ms-band__cap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-band__cap"><!-- wp:heading {"level":3,"className":"ms-band__h"} -->
<h3 class="wp-block-heading ms-band__h"><?php echo esc_html( mise_studio_t( 'bd_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-band__p"} -->
<p class="ms-band__p"><?php echo esc_html( mise_studio_t( 'bd_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ms-pill-wrap"} -->
<div class="wp-block-buttons ms-pill-wrap"><!-- wp:button {"className":"ms-pill"} -->
<div class="wp-block-button ms-pill"><a class="wp-block-button__link wp-element-button" href="/book-a-visit/"><?php echo esc_html( mise_studio_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
