<?php
/**
 * Title: Home: framed photo window, title below, card-row
 * Slug: hozue-foodfest/front-hero
 * Categories: hozue-foodfest
 * Viewport Width: 1440
 * Description: Framed window (inset 20 px, r24) cross-fading three moments with round dots, the title and date on the ground below it, and a floating five-tile card-row ending in the early-bird tile.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hf-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hf-hero"><!-- wp:group {"className":"hf-window","layout":{"type":"default"}} -->
<div class="wp-block-group hf-window"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hf-slide hf-slide--1"} -->
<figure class="wp-block-image size-full hf-slide hf-slide--1"><img src="<?php echo hozue_foodfest_img( 'h3-bunting.webp' ); ?>" alt="<?php echo hozue_foodfest_a( 'alt_h3' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<figure class="hf-slide hf-slide--2" aria-hidden="true"><img src="<?php echo hozue_foodfest_img( 'h1-pour.webp' ); ?>" alt="<?php echo hozue_foodfest_a( 'alt_h1' ); ?>"/></figure>
<!-- /wp:html -->

<!-- wp:html -->
<figure class="hf-slide hf-slide--3" aria-hidden="true"><img src="<?php echo hozue_foodfest_img( 'h2-skewers.webp' ); ?>" alt="<?php echo hozue_foodfest_a( 'alt_h2' ); ?>"/></figure>
<!-- /wp:html -->

<!-- wp:html -->
<div class="hf-dots" aria-hidden="true"><span class="hf-dot hf-dot--1"></span><span class="hf-dot hf-dot--2"></span><span class="hf-dot hf-dot--3"></span></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hf-herotext","layout":{"type":"default"}} -->
<div class="wp-block-group hf-herotext"><!-- wp:group {"className":"hf-herotext__l","layout":{"type":"default"}} -->
<div class="wp-block-group hf-herotext__l"><!-- wp:heading {"level":1,"className":"hf-h1"} -->
<h1 class="wp-block-heading hf-h1"><?php echo esc_html( hozue_foodfest_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hf-herotext__r","layout":{"type":"default"}} -->
<div class="wp-block-group hf-herotext__r"><!-- wp:paragraph {"className":"hf-date"} -->
<p class="hf-date"><?php echo esc_html( hozue_foodfest_t( 'hero_date' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hf-lede"} -->
<p class="hf-lede"><?php echo esc_html( hozue_foodfest_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<nav class="hf-strip" aria-label="<?php echo hozue_foodfest_a( 'strip_label' ); ?>"><a class="hf-tile" href="<?php echo esc_url( home_url( '/#weekend' ) ); ?>"><svg class="hf-ico" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#938B4B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3.5" y="5" width="17" height="15" rx="2.5"/><path d="M3.5 10h17M8 3v4M16 3v4"/></svg><span><?php echo esc_html( hozue_foodfest_t( 'tile_weekend' ) ); ?></span></a><a class="hf-tile" href="<?php echo esc_url( home_url( '/#programme' ) ); ?>"><svg class="hf-ico" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#938B4B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M9 6h11M9 12h11M9 18h11"/><circle cx="4.5" cy="6" r="1"/><circle cx="4.5" cy="12" r="1"/><circle cx="4.5" cy="18" r="1"/></svg><span><?php echo esc_html( hozue_foodfest_t( 'tile_programme' ) ); ?></span></a><a class="hf-tile" href="<?php echo esc_url( home_url( '/#tickets' ) ); ?>"><svg class="hf-ico" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#938B4B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 3h10l-.6 7.2a4.4 4.4 0 0 1-8.8 0L7 3z"/><path d="M12 14.6V21M8.5 21h7"/></svg><span><?php echo esc_html( hozue_foodfest_t( 'tile_wine' ) ); ?></span></a><a class="hf-tile" href="<?php echo esc_url( home_url( '/#getting-here' ) ); ?>"><svg class="hf-ico" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#938B4B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 21s-6.5-5.7-6.5-11a6.5 6.5 0 0 1 13 0c0 5.3-6.5 11-6.5 11z"/><circle cx="12" cy="10" r="2.4"/></svg><span><?php echo esc_html( hozue_foodfest_t( 'tile_getting' ) ); ?></span></a><a class="hf-tile hf-tile--cta" href="<?php echo esc_url( home_url( '/#tickets' ) ); ?>"><span class="hf-tile__main"><?php echo esc_html( hozue_foodfest_t( 'tile_cta' ) ); ?></span><span class="hf-tile__sub"><?php echo esc_html( hozue_foodfest_t( 'tile_cta_sub' ) ); ?></span></a></nav>
<!-- /wp:html --></section>
<!-- /wp:group -->
