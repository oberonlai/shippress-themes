<?php
/**
 * Title: Home: counter band
 * Slug: noka-cheese/front-band
 * Categories: noka-cheese
 * Viewport Width: 1440
 * Description: Full-bleed counter photograph that moves slower than the page, with a paper panel that stays put.
 */
?>
<!-- wp:cover {"url":"<?php echo noka_cheese_img( 'counter-band.webp' ); ?>","dimRatio":0,"isDark":false,"minHeight":600,"minHeightUnit":"px","align":"full","className":"nk-band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light nk-band sp-parallax" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( noka_cheese_t( 'alt_band' ) ); ?>" src="<?php echo noka_cheese_img( 'counter-band.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"nk-panel","layout":{"type":"default"}} -->
<div class="wp-block-group nk-panel"><!-- wp:paragraph {"className":"nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo wp_kses_post( noka_cheese_t( 'cb_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nk-panel__line"} -->
<p class="nk-panel__line"><?php echo wp_kses_post( noka_cheese_t( 'cb_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nk-panel__hours"} -->
<p class="nk-panel__hours"><?php echo wp_kses_post( noka_cheese_t( 'cb_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
