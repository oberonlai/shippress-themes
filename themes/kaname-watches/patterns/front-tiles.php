<?php
/**
 * Title: Home: four tiles
 * Slug: kaname-watches/front-tiles
 * Categories: kaname-watches
 * Keywords: watch, shop, tiles
 * Viewport Width: 1440
 * Description: Four square photographs directly under the window with 1 px gaps and a label at the bottom left.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kw-tiles-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kw-tiles-sec"><!-- wp:group {"align":"wide","className":"kw-tiles sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kw-tiles sp-stagger">
<!-- wp:group {"className":"kw-tile sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group kw-tile sp-reveal"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kaname_watches_img( 'k5-loupe-movement.webp' ); ?>" alt="<?php echo esc_attr( kaname_watches_t( 'a14baffb7' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kw-tile__label"} -->
<p class="kw-tile__label"><a href="/how-we-choose/"><?php echo wp_kses_post( kaname_watches_t( 'kc090fc92' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kw-tile sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group kw-tile sp-reveal"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kaname_watches_img( 'k6-two-on-felt.webp' ); ?>" alt="<?php echo esc_attr( kaname_watches_t( 'a6cb8c1ad' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kw-tile__label"} -->
<p class="kw-tile__label"><a href="/stories/"><?php echo wp_kses_post( kaname_watches_t( 'ka7c2d3e0' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kw-tile sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group kw-tile sp-reveal"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kaname_watches_img( 'k7-evening-counter.webp' ); ?>" alt="<?php echo esc_attr( kaname_watches_t( 'a346981d0' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kw-tile__label"} -->
<p class="kw-tile__label"><a href="/visit/"><?php echo wp_kses_post( kaname_watches_t( 'k55ef1ce0' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kw-tile sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group kw-tile sp-reveal"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kaname_watches_img( 'k8-twelve-slots.webp' ); ?>" alt="<?php echo esc_attr( kaname_watches_t( 'a825ac9f7' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kw-tile__label"} -->
<p class="kw-tile__label"><a href="/shop/"><?php echo wp_kses_post( kaname_watches_t( 'k12cc3abb' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->
