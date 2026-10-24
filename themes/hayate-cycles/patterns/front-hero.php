<?php
/**
 * Title: Home: hero
 * Slug: hayate-cycles/front-hero
 * Categories: hayate-cycles
 * Keywords: bicycle, workshop, home
 * Viewport Width: 1440
 * Description: Two-line heading and lede on the left; three off-grid photographs, one bleeding off the right edge, one off the left, one offset between them.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hc-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-hero">
<!-- wp:group {"className":"hc-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group hc-hero__text">
<!-- wp:heading {"level":1,"className":"hc-hero__title"} -->
<h1 class="wp-block-heading hc-hero__title"><span class="hc-hero__line"><span><?php echo esc_html( hayate_cycles_t( 'hero_l1' ) ); ?></span></span><span class="hc-hero__line"><span><?php echo esc_html( hayate_cycles_t( 'hero_l2' ) ); ?></span></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-hero__lede"} -->
<p class="hc-hero__lede"><?php echo esc_html( hayate_cycles_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-hero__a hc-loadwipe sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group hc-hero__a hc-loadwipe sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-hero__a-img"} -->
<figure class="wp-block-image size-full hc-hero__a-img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1-truing.webp' ) ); ?>" alt="<?php echo esc_attr( hayate_cycles_t( 'alt_h1' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-hero__b hc-loadwipe","layout":{"type":"default"}} -->
<div class="wp-block-group hc-hero__b hc-loadwipe">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-hero__b-img"} -->
<figure class="wp-block-image size-full hc-hero__b-img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h2-derailleur.webp' ) ); ?>" alt="<?php echo esc_attr( hayate_cycles_t( 'alt_h2' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-hero__c sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full hc-hero__c sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h3-bench.webp' ) ); ?>" alt="<?php echo esc_attr( hayate_cycles_t( 'alt_h3' ) ); ?>"/></figure>
<!-- /wp:image -->
</section>
<!-- /wp:group -->
