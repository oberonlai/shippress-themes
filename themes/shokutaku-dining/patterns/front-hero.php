<?php
/**
 * Title: Home: hero
 * Slug: shokutaku-dining/front-hero
 * Categories: shokutaku-dining
 * Keywords: restaurant, hero, arch, booking
 * Viewport Width: 1440
 * Description: Greige wall with a lead title and booking button on the left, an arch-topped photograph with parallax on the right, and an info bar with hours and address.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"shk-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull shk-hero"><!-- wp:group {"className":"shk-hero__grid","layout":{"type":"default"}} -->
<div class="wp-block-group shk-hero__grid"><!-- wp:group {"className":"shk-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group shk-hero__copy"><!-- wp:paragraph {"className":"shk-label"} -->
<p class="shk-label"><?php echo wp_kses_post( shokutaku_dining_t( 'k1f22b36d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"shk-hero__h1"} -->
<h1 class="wp-block-heading shk-hero__h1"><?php echo wp_kses_post( shokutaku_dining_t( 'k102361bf' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"shk-hero__lead"} -->
<p class="shk-hero__lead"><?php echo wp_kses_post( shokutaku_dining_t( 'kf2087341' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"shk-hero__actions","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group shk-hero__actions"><!-- wp:buttons {"className":"shk-btn-row"} -->
<div class="wp-block-buttons shk-btn-row"><!-- wp:button {"className":"shk-btn is-style-outline"} -->
<div class="wp-block-button shk-btn is-style-outline"><a class="wp-block-button__link wp-element-button" href="/reservations/#book"><?php echo wp_kses_post( shokutaku_dining_t( 'ka09e00d1' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"shk-textlink"} -->
<p class="shk-textlink"><a href="/menus/"><?php echo wp_kses_post( shokutaku_dining_t( 'k7c551e01' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"shk-hero__arch sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group shk-hero__arch sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"shk-arch shk-arch--hero"} -->
<figure class="wp-block-image size-full shk-arch shk-arch--hero"><img src="<?php echo shokutaku_dining_img( 'p01.webp' ); ?>" alt="<?php echo esc_attr( shokutaku_dining_t( 'a7bc9fcd4' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"shk-info","layout":{"type":"default"}} -->
<div class="wp-block-group shk-info"><!-- wp:paragraph {"className":"shk-info__item"} -->
<p class="shk-info__item"><?php echo wp_kses_post( shokutaku_dining_t( 'kc0e325de' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"shk-info__item"} -->
<p class="shk-info__item"><?php echo wp_kses_post( shokutaku_dining_t( 'k26df509e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"shk-info__item"} -->
<p class="shk-info__item"><?php echo wp_kses_post( shokutaku_dining_t( 'kf75f6366' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
