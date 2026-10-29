<?php
/**
 * Title: Home: the counter at 06:30
 * Slug: kairo-supply/front-morning
 * Categories: kairo-supply
 * Keywords: electrical wholesaler, trade counter
 * Viewport Width: 1440
 * Description: Full-bleed dawn photograph with a parallax drift and a counter-lead quote.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/k11.webp' ) ); ?>","dimRatio":0,"minHeight":720,"minHeightUnit":"px","align":"full","className":"kai-morning sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull kai-morning sp-parallax" style="min-height:720px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kairo_supply_t( 'a2470b9b9' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/k11.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"kai-morning__q","layout":{"type":"default"}} -->
<div class="wp-block-group kai-morning__q">
<!-- wp:paragraph {"className":"kai-marker"} -->
<p class="kai-marker"><i class="kai-marker__dot" aria-hidden="true"></i>06:30</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kai-morning__quote"} -->
<p class="kai-morning__quote"><?php echo wp_kses_post( kairo_supply_t( 'k90a6d172' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kai-morning__by"} -->
<p class="kai-morning__by"><?php echo wp_kses_post( kairo_supply_t( 'k409475ad' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kai-textlink"} -->
<p class="kai-textlink"><a href="/team/"><?php echo wp_kses_post( kairo_supply_t( 'kbc510373' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
