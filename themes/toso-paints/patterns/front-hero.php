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
<!-- wp:group {"className":"tp-col sp-parallax tp-par-6","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group tp-col sp-parallax tp-par-6"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-wall.webp' ) ); ?>" alt="<?php echo esc_attr( toso_paints_t( 'a78b91c4a' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tp-col sp-parallax tp-par-10","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group tp-col sp-parallax tp-par-10"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-paper.webp' ) ); ?>" alt="<?php echo esc_attr( toso_paints_t( 'a6310c7c1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tp-col sp-parallax tp-par-8","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group tp-col sp-parallax tp-par-8"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-tin.webp' ) ); ?>" alt="<?php echo esc_attr( toso_paints_t( 'ae84d4ddf' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tp-hero__draw"} -->
<figure class="wp-block-image size-full tp-hero__draw"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/elevation-room.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"tp-hero__mark","layout":{"type":"default"}} -->
<div class="wp-block-group tp-hero__mark"><!-- wp:heading {"level":1,"className":"tp-wordmark"} -->
<h1 class="wp-block-heading tp-wordmark"><?php echo wp_kses_post( toso_paints_t( 'kf10b8a8c' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tp-hero__sub"} -->
<p class="tp-hero__sub"><?php echo wp_kses_post( toso_paints_t( 'k3ff695fb' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"tp-chip-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tp-chip-wrap"><!-- wp:paragraph {"className":"tp-chip"} -->
<p class="tp-chip"><span class="tp-chip__date"><?php echo wp_kses_post( toso_paints_t( 'kfb6a0a84' ) ); ?></span> <a href="#journal"><?php echo wp_kses_post( toso_paints_t( 'ke44df6e0' ) ); ?></a> <span class="tp-arrow" aria-hidden="true">→</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
