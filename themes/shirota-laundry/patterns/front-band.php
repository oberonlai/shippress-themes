<?php
/**
 * Title: Home: packing hall band
 * Slug: shirota-laundry/front-band
 * Categories: shirota-laundry
 * Keywords: laundry, linen, hotel, clinic
 * Viewport Width: 1440
 * Description: Full-bleed packing hall photograph with a small oval inset and a caption card.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/packing-hall.webp' ) ); ?>","dimRatio":0,"minHeight":720,"minHeightUnit":"px","isDark":false,"className":"sl-band sp-parallax","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light sl-band sp-parallax" style="min-height:720px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( shirota_laundry_t( 'aabad9809' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/packing-hall.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

<!-- wp:group {"className":"sl-band__inset","layout":{"type":"default"}} -->
<div class="wp-block-group sl-band__inset"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/towels-inset.webp' ) ); ?>" alt="<?php echo esc_attr( shirota_laundry_t( 'a839087e8' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sl-band__cap","layout":{"type":"default"}} -->
<div class="wp-block-group sl-band__cap"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( shirota_laundry_t( 'k58eb6345' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shirota_laundry_t( 'kec7cebd5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
