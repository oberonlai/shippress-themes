<?php
/**
 * Title: Home: the shop
 * Slug: hayate-cycles/front-shop-story
 * Categories: hayate-cycles
 * Keywords: bicycle, workshop, home
 * Viewport Width: 1440
 * Description: Three columns: the story, a dashed road line, and a wide capsule photograph of the shopfront.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hc-section hc-section--story","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-section hc-section--story">
<!-- wp:group {"className":"hc-story","layout":{"type":"default"}} -->
<div class="wp-block-group hc-story">
<!-- wp:group {"className":"hc-story__text","layout":{"type":"default"}} -->
<div class="wp-block-group hc-story__text">
<!-- wp:heading {"className":"hc-title"} -->
<h2 class="wp-block-heading hc-title"><?php echo esc_html( hayate_cycles_t( 'story_label' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sub"} -->
<p class="hc-sub"><?php echo esc_html( hayate_cycles_t( 'story_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-story__p"} -->
<p class="hc-story__p"><?php echo esc_html( hayate_cycles_t( 'story_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-story__p"} -->
<p class="hc-story__p"><?php echo esc_html( hayate_cycles_t( 'story_p2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-road","layout":{"type":"default"}} -->
<div class="wp-block-group hc-road"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-story__media","layout":{"type":"default"}} -->
<div class="wp-block-group hc-story__media">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-capsule sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full hc-capsule sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s7-shopfront.webp' ) ); ?>" alt="<?php echo esc_attr( hayate_cycles_t( 'alt_s7' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hc-caption"} -->
<p class="hc-caption"><?php echo esc_html( hayate_cycles_t( 'story_cap' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
