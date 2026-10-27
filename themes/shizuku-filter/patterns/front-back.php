<?php
/**
 * Title: Home: one repeated call
 * Slug: shizuku-filter/front-back
 * Categories: shizuku-filter
 * Keywords: water filter, crowdfunding, landing
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph with the crosshair lead and the one back button.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"back","className":"sf-sec sf-sec--back","layout":{"type":"default"}} -->
<section id="back" class="wp-block-group alignfull sf-sec sf-sec--back">
<!-- wp:paragraph {"className":"sf-rail"} -->
<p class="sf-rail"><span><?php echo wp_kses_post( shizuku_filter_t( 'back_label' ) ); ?></span></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sf-back","layout":{"type":"default"}} -->
<div class="wp-block-group sf-back">
<!-- wp:cover {"url":"<?php shizuku_filter_img( '11-back-cta-table.webp' ); ?>","dimRatio":0,"className":"sf-back__cover sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover sf-back__cover sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php shizuku_filter_a( 'back_alt' ); ?>" src="<?php shizuku_filter_img( '11-back-cta-table.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"sf-xh sp-reveal sp-reveal--wipe sf-wipe","layout":{"type":"default"}} -->
<div class="wp-block-group sf-xh sp-reveal sp-reveal--wipe sf-wipe">
<!-- wp:paragraph {"className":"sf-mk"} -->
<p class="sf-mk"><?php echo wp_kses_post( shizuku_filter_t( 'back_l1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-mk"} -->
<p class="sf-mk"><?php echo wp_kses_post( shizuku_filter_t( 'back_l2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sf-back__p"} -->
<p class="sf-back__p"><?php echo wp_kses_post( shizuku_filter_t( 'back_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sf-back__cta","layout":{"type":"default"}} -->
<div class="wp-block-group sf-back__cta">
<!-- wp:paragraph {"className":"sf-go sf-go--lg"} -->
<p class="sf-go sf-go--lg"><a href="#rewards" aria-label="<?php echo wp_kses_post( shizuku_filter_t( 'cta' ) ); ?>">→</a></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"sf-btn"} -->
<div class="wp-block-button sf-btn"><a class="wp-block-button__link wp-element-button" href="#rewards"><?php echo wp_kses_post( shizuku_filter_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
