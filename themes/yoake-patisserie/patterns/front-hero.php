<?php
/**
 * Title: Home: split dawn hero
 * Slug: yoake-patisserie/front-hero
 * Categories: yoake-patisserie
 * Viewport Width: 1440
 * Description: Blush wash across the top, a vertical two-line lead, and a photograph flush to the left edge at 90% width.
 */
?>
<!-- wp:group {"align":"full","className":"yk-hero","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yk-hero"><!-- wp:group {"className":"yk-hero__field","layout":{"type":"default"}} -->
<div class="wp-block-group yk-hero__field"><!-- wp:heading {"level":1,"className":"yk-hero__lead"} -->
<h1 class="wp-block-heading yk-hero__lead"><?php echo wp_kses_post( yoake_patisserie_t( 'k8d97c15f' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group yk-hero__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-glaze.webp' ) ); ?>" alt="<?php echo esc_attr( yoake_patisserie_t( 'abce81207' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"yk-hero__info","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yk-hero__info"><!-- wp:paragraph {"className":"yk-info"} -->
<p class="yk-info"><?php echo wp_kses_post( yoake_patisserie_t( 'kb97bf837' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
