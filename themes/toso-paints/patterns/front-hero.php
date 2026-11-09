<?php
/**
 * Title: Home: hero
 * Slug: toso-paints/front-hero
 * Categories: toso-paints
 * Keywords: paint, wallpaper, shop
 * Viewport Width: 1440
 * Description: Three equal photo columns with a room-elevation line drawing, centred wordmark and a Saturday chip.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tp-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tp-hero"><!-- wp:group {"className":"tp-hero__cols","layout":{"type":"default"}} -->
<div class="wp-block-group tp-hero__cols">
<!-- wp:group {"className":"tp-col sp-parallax","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group tp-col sp-parallax" style="--sp-par:6%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-wall.webp' ) ); ?>" alt="Interior wall half painted in moss green with a paint roller on dust sheets."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tp-col sp-parallax","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group tp-col sp-parallax" style="--sp-par:10%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-paper.webp' ) ); ?>" alt="Shop clerk unrolling a roll of textured wallpaper sample across a dark wooden counter."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tp-col sp-parallax","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group tp-col sp-parallax" style="--sp-par:8%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-tin.webp' ) ); ?>" alt="Open metal tin of freshly mixed moss paint resting on a canvas dust sheet."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tp-hero__draw"} -->
<figure class="wp-block-image size-full tp-hero__draw"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/elevation-room.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"tp-hero__mark","layout":{"type":"default"}} -->
<div class="wp-block-group tp-hero__mark"><!-- wp:heading {"level":1,"className":"tp-wordmark"} -->
<h1 class="wp-block-heading tp-wordmark">TOSO PAINTS</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tp-hero__sub"} -->
<p class="tp-hero__sub">Paint and wallpaper, matched to your room · Rotterdam since 2009</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"tp-chip-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tp-chip-wrap"><!-- wp:paragraph {"className":"tp-chip"} -->
<p class="tp-chip"><span class="tp-chip__date">SAT 10:00</span> <a href="#journal">Swatch table every Saturday, 10:00–13:00</a> <span class="tp-arrow" aria-hidden="true">→</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
