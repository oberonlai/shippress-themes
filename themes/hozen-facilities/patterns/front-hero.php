<?php
/**
 * Title: Home: hero
 * Slug: hozen-facilities/front-hero
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: Heading and lede on the left; the plant-room photograph on the right, coming into focus on load.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hz-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hz-hero">
<!-- wp:group {"className":"hz-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group hz-hero__text">
<!-- wp:paragraph {"className":"hz-hero__label"} -->
<p class="hz-hero__label"><?php echo esc_html( hozen_facilities_t( 'hero_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hz-hero__title"} -->
<h1 class="wp-block-heading hz-hero__title"><span class="hz-hero__line"><?php echo esc_html( hozen_facilities_t( 'hero_l1' ) ); ?></span> <span class="hz-hero__line"><?php echo esc_html( hozen_facilities_t( 'hero_l2' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-hero__lede"} -->
<p class="hz-hero__lede"><?php echo esc_html( hozen_facilities_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-linkrow hz-linkrow--hero"} -->
<p class="hz-linkrow hz-linkrow--hero"><a href="#callout"><?php echo esc_html( hozen_facilities_t( 'hero_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-group hz-hero__photo">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-hero__img hz-loadfocus"} -->
<figure class="wp-block-image size-full hz-hero__img hz-loadfocus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1-pumps.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_h1' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
