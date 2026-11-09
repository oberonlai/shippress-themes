<?php
/**
 * Title: Home: parallax band
 * Slug: hiroba-food-hall/front-pause
 * Categories: hiroba-food-hall
 * Keywords: food hall, restaurant, lunch
 * Viewport Width: 1440
 * Description: Full-width parallax photograph with a white card overlapping its bottom edge.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-pause","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hb-pause"><!-- wp:group {"className":"sp-parallax hb-pause__media","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax hb-pause__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hb-pause__img"} -->
<figure class="wp-block-image size-full hb-pause__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p13.webp' ) ); ?>" alt="<?php echo esc_attr( hiroba_t( 'alt_p13' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-pause__card","layout":{"type":"default"}} -->
<div class="wp-block-group hb-pause__card"><!-- wp:paragraph {"className":"hb-sub"} -->
<p class="hb-sub"><?php echo esc_html( hiroba_t( 'pause_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-pause__t"} -->
<p class="hb-pause__t"><?php echo esc_html( hiroba_t( 'pause_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
