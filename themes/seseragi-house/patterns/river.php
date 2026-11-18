<?php
/**
 * Title: River: dim band
 * Slug: seseragi-house/river
 * Categories: seseragi-house
 * Viewport Width: 1440
 * Description: A full-bleed dim photograph of the river at dusk with a vertical title and a narrow column of white serif text; the photograph moves slower than the page.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"river","className":"sese-river-wrap","layout":{"type":"default"}} -->
<section id="river" class="wp-block-group sese-river-wrap">
<!-- wp:cover {"url":"<?php echo esc_url( seseragi_house_img( 'river-dusk.webp' ) ); ?>","dimRatio":50,"overlayColor":"river","minHeight":120,"minHeightUnit":"vh","className":"sese-river sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover sese-river sp-parallax" style="min-height:120vh"><span aria-hidden="true" class="wp-block-cover__background has-river-background-color has-background-dim-50 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( seseragi_house_t( 'alt_p12' ) ); ?>" src="<?php echo esc_url( seseragi_house_img( 'river-dusk.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"sese-river__fg","layout":{"type":"default"}} -->
<div class="wp-block-group sese-river__fg">
<!-- wp:paragraph {"className":"sese-vt sese-vt--light"} -->
<p class="sese-vt sese-vt--light"><?php echo esc_html( seseragi_house_t( 'river_vt' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sese-river__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sese-river__col sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sese-river__lede"} -->
<p class="sese-river__lede"><?php echo esc_html( seseragi_house_t( 'river_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-river__p"} -->
<p class="sese-river__p"><?php echo esc_html( seseragi_house_t( 'river_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-river__p"} -->
<p class="sese-river__p"><?php echo esc_html( seseragi_house_t( 'river_p2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
</section>
<!-- /wp:group -->
