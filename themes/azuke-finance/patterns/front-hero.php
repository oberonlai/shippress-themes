<?php
/**
 * Title: Home: hero
 * Slug: azuke-finance/front-hero
 * Categories: azuke-finance
 * Keywords: invoice funding, factoring, landing
 * Viewport Width: 1440
 * Description: T1: tight headline above a bowed documentary photo mosaic that bleeds off the right edge.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"az-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull az-hero"><!-- wp:heading {"level":1,"className":"az-h1"} -->
<h1 class="wp-block-heading az-h1"><?php echo azuke_finance_accent( 'h_h1' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"az-hero__side","layout":{"type":"default"}} -->
<div class="wp-block-group az-hero__side"><!-- wp:paragraph {"className":"az-lede"} -->
<p class="az-lede"><?php echo esc_html( azuke_finance_t( 'h_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"az-pill az-pill--lg-row"} -->
<div class="wp-block-buttons az-pill az-pill--lg-row"><!-- wp:button {"className":"az-pill az-pill--lg"} -->
<div class="wp-block-button az-pill az-pill--lg"><a class="wp-block-button__link wp-element-button" href="/apply/"><?php echo esc_html( azuke_finance_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"az-caption"} -->
<p class="az-caption"><?php echo esc_html( azuke_finance_t( 'h_caption' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-mosaic","layout":{"type":"default"}} -->
<div class="wp-block-group az-mosaic"><!-- wp:group {"className":"az-mosaic__bow","layout":{"type":"default"}} -->
<div class="wp-block-group az-mosaic__bow"><!-- wp:group {"className":"az-mosaic__stage sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group az-mosaic__stage sp-parallax"><!-- wp:group {"className":"az-mosaic__grid sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group az-mosaic__grid sp-parallax__layer"><!-- wp:group {"className":"az-mosaic__row az-mosaic__row--1","layout":{"type":"default"}} -->
<div class="wp-block-group az-mosaic__row az-mosaic__row--1"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"az-tile az-tile--lg"} -->
<figure class="wp-block-image size-full az-tile az-tile--lg"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h01.webp' ) ); ?>" alt="<?php echo esc_attr( azuke_finance_t( 'alt_h01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"az-tile az-tile--pt"} -->
<figure class="wp-block-image size-full az-tile az-tile--pt"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h02.webp' ) ); ?>" alt="<?php echo esc_attr( azuke_finance_t( 'alt_h02' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-mosaic__row az-mosaic__row--2 sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group az-mosaic__row az-mosaic__row--2 sp-stagger"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"az-tile az-tile--sm sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full az-tile az-tile--sm sp-reveal sp-reveal--up"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h03.webp' ) ); ?>" alt="<?php echo esc_attr( azuke_finance_t( 'alt_h03' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"az-tile az-tile--sm sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full az-tile az-tile--sm sp-reveal sp-reveal--up"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h04.webp' ) ); ?>" alt="<?php echo esc_attr( azuke_finance_t( 'alt_h04' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"az-tile az-tile--sm sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full az-tile az-tile--sm sp-reveal sp-reveal--up"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h05.webp' ) ); ?>" alt="<?php echo esc_attr( azuke_finance_t( 'alt_h05' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
