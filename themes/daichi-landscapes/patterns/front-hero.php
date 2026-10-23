<?php
/**
 * Title: Home: photo with stair-step white tiles, lower half with lead and card
 * Slug: daichi-landscapes/front-hero
 * Categories: daichi-landscapes
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"dl-hero","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull dl-hero">
<!-- wp:group {"className":"dl-hero__top","layout":{"type":"default"}} -->
<div class="wp-block-group dl-hero__top">
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-hero-planting.webp' ) ); ?>","dimRatio":0,"minHeight":472,"minHeightUnit":"px","isDark":false,"className":"dl-cover dl-cover--hero sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light dl-cover dl-cover--hero sp-parallax" style="min-height:472px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( daichi_landscapes_t( 'alt_p1' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-hero-planting.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->
<!-- wp:heading {"level":1,"className":"dl-tiles"} -->
<h1 class="wp-block-heading dl-tiles"><span class="dl-tile dl-tile--1"><?php echo esc_html( daichi_landscapes_t( 'hero_t1' ) ); ?></span><span class="dl-tile dl-tile--2"><?php echo esc_html( daichi_landscapes_t( 'hero_t2' ) ); ?></span><span class="dl-tile dl-tile--3"><?php echo esc_html( daichi_landscapes_t( 'hero_t3' ) ); ?></span></h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"dl-hero__bottom","layout":{"type":"default"}} -->
<div class="wp-block-group dl-hero__bottom">
<!-- wp:group {"className":"dl-hero__grid","layout":{"type":"default"}} -->
<div class="wp-block-group dl-hero__grid">
<!-- wp:group {"className":"dl-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group dl-hero__copy">
<!-- wp:paragraph {"className":"dl-lead"} -->
<p class="dl-lead"><?php echo esc_html( daichi_landscapes_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"dl-hero__actions","layout":{"type":"default"}} -->
<div class="wp-block-group dl-hero__actions">
<!-- wp:buttons {"className":"dl-btns"} -->
<div class="wp-block-buttons dl-btns"><!-- wp:button {"className":"dl-btn"} -->
<div class="wp-block-button dl-btn"><a class="wp-block-button__link wp-element-button" href="#contact"><?php echo esc_html( daichi_landscapes_t( 'hero_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"dl-textlink"} -->
<p class="dl-textlink"><a href="#process"><?php echo esc_html( daichi_landscapes_t( 'hero_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"dl-hero__media","layout":{"type":"default"}} -->
<div class="wp-block-group dl-hero__media">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"dl-ph dl-ph--43"} -->
<figure class="wp-block-image size-full dl-ph dl-ph--43"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02-surveyors.webp' ) ); ?>" alt="<?php echo esc_attr( daichi_landscapes_t( 'alt_p2' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"dl-card","layout":{"type":"default"}} -->
<div class="wp-block-group dl-card">
<!-- wp:group {"className":"dl-card__icon","layout":{"type":"default"}} -->
<div class="wp-block-group dl-card__icon">

</div>
<!-- /wp:group -->
<!-- wp:group {"className":"dl-card__text","layout":{"type":"default"}} -->
<div class="wp-block-group dl-card__text">
<!-- wp:paragraph {"className":"dl-card__t"} -->
<p class="dl-card__t"><?php echo esc_html( daichi_landscapes_t( 'card_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dl-card__a"} -->
<p class="dl-card__a"><a href="#contact"><?php echo esc_html( daichi_landscapes_t( 'card_a' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
