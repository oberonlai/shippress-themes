<?php
/**
 * Title: Home: site survey call to action
 * Slug: kizuki-construction/survey-cta
 * Categories: kizuki-construction
 * Keywords: construction, contractor, building
 * Viewport Width: 1440
 * Description: A navy band with one line and one button; the transparent cut-out safety helmet breaks out over the band top edge.
 */
?>
<!-- wp:group {"tagName":"section","className":"kz-cta","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kz-cta"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-cta__helmet"} -->
<figure class="wp-block-image size-full kz-cta__helmet"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/helmet-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( kizuki_construction_t( 'alt_helmet' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kz-cta__line"} -->
<p class="kz-cta__line"><?php echo esc_html( kizuki_construction_t( 'cta_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kz-cta__btn"} -->
<div class="wp-block-buttons kz-cta__btn"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/survey/"><?php echo esc_html( kizuki_construction_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
