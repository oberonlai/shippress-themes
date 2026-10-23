<?php
/**
 * Title: Home: interlude
 * Slug: mochi-pet-supply/front-interlude
 * Categories: mochi-pet-supply
 * Viewport Width: 1440
 * Description: Sakata-style scrim interlude: a dimmed living-room photograph with parallax and a short quote.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/s8-sofa.webp' ) ); ?>","dimRatio":38,"overlayColor":"ink","minHeight":560,"minHeightUnit":"px","align":"full","className":"mo-inter sp-parallax","isUserOverlayColor":true,"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull mo-inter sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( mochi_pet_supply_t( 'a631ce16b' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s8-sofa.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"className":"mo-quote"} -->
<p class="mo-quote"><?php echo wp_kses_post( mochi_pet_supply_t( 'k5dbef511' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mo-quote__by"} -->
<p class="mo-quote__by"><?php echo wp_kses_post( mochi_pet_supply_t( 'k89727df5' ) ); ?></p>
<!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->
