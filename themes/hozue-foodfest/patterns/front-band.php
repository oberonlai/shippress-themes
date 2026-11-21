<?php
/**
 * Title: Home: riverbank parallax band
 * Slug: hozue-foodfest/front-band
 * Categories: hozue-foodfest
 * Viewport Width: 1440
 * Description: Full-width riverside photograph that moves slower than the page, with a white rounded card holding the park and the gate.
 */
?>
<!-- wp:cover {"url":"<?php echo hozue_foodfest_img( 'b1-riverbank.webp' ); ?>","dimRatio":0,"minHeight":560,"minHeightUnit":"px","contentPosition":"bottom left","align":"full","className":"hf-band sp-parallax"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left hf-band sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo hozue_foodfest_a( 'alt_b1' ); ?>" src="<?php echo hozue_foodfest_img( 'b1-riverbank.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

<!-- wp:group {"className":"hf-card","layout":{"type":"default"}} -->
<div class="wp-block-group hf-card"><!-- wp:paragraph {"className":"hf-card__caps"} -->
<p class="hf-card__caps"><?php echo esc_html( hozue_foodfest_t( 'bd_caps' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hf-card__p"} -->
<p class="hf-card__p"><?php echo esc_html( hozue_foodfest_t( 'bd_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hf-card__gate"} -->
<p class="hf-card__gate"><?php echo esc_html( hozue_foodfest_t( 'bd_gate' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
