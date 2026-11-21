<?php
/**
 * Title: Home: three-pane desk window
 * Slug: nagare-workation/front-hero
 * Categories: nagare-workation
 * Viewport Width: 1440
 * Description: Split hero: a full-height photograph pane at the left that wipes between three moments, a pale text pane with the title, lede, pill and a four-figure row, and a narrow lake sliver at the right edge.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nw-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-hero"><!-- wp:group {"className":"nw-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-group nw-hero__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-slide nw-slide--1"} -->
<figure class="wp-block-image size-full nw-slide nw-slide--1"><img src="<?php echo nagare_workation_img( 'p01-desk-call.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-slide nw-slide--2"} -->
<figure class="wp-block-image size-full nw-slide nw-slide--2"><img src="<?php echo nagare_workation_img( 'p02-breakfast-table.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-slide nw-slide--3"} -->
<figure class="wp-block-image size-full nw-slide nw-slide--3"><img src="<?php echo nagare_workation_img( 'p03-cowork-floor.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group nw-hero__text"><!-- wp:group {"className":"nw-hero__main","layout":{"type":"default"}} -->
<div class="wp-block-group nw-hero__main"><!-- wp:heading {"level":1,"className":"nw-hero__h"} -->
<h1 class="wp-block-heading nw-hero__h"><?php echo esc_html( nagare_workation_t( 'h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-hero__lede"} -->
<p class="nw-hero__lede"><?php echo esc_html( nagare_workation_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"nw-btns"} -->
<div class="wp-block-buttons nw-btns"><!-- wp:button {"className":"nw-pill nw-pill--line"} -->
<div class="wp-block-button nw-pill nw-pill--line"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/rates/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'hero_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-stats","layout":{"type":"default"}} -->
<div class="wp-block-group nw-stats"><!-- wp:group {"className":"nw-stat","layout":{"type":"default"}} -->
<div class="wp-block-group nw-stat"><!-- wp:paragraph {"className":"nw-stat__n"} -->
<p class="nw-stat__n"><?php echo esc_html( nagare_workation_t( 'hero_s1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-stat__l"} -->
<p class="nw-stat__l"><?php echo esc_html( nagare_workation_t( 'hero_s1_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-stat","layout":{"type":"default"}} -->
<div class="wp-block-group nw-stat"><!-- wp:paragraph {"className":"nw-stat__n"} -->
<p class="nw-stat__n"><?php echo esc_html( nagare_workation_t( 'hero_s2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-stat__l"} -->
<p class="nw-stat__l"><?php echo esc_html( nagare_workation_t( 'hero_s2_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-stat","layout":{"type":"default"}} -->
<div class="wp-block-group nw-stat"><!-- wp:paragraph {"className":"nw-stat__n"} -->
<p class="nw-stat__n"><?php echo esc_html( nagare_workation_t( 'hero_s3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-stat__l"} -->
<p class="nw-stat__l"><?php echo esc_html( nagare_workation_t( 'hero_s3_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-stat","layout":{"type":"default"}} -->
<div class="wp-block-group nw-stat"><!-- wp:paragraph {"className":"nw-stat__n"} -->
<p class="nw-stat__n"><?php echo esc_html( nagare_workation_t( 'hero_s4_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-stat__l"} -->
<p class="nw-stat__l"><?php echo esc_html( nagare_workation_t( 'hero_s4_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-hero__sliver sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group nw-hero__sliver sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph"} -->
<figure class="wp-block-image size-full nw-ph"><img src="<?php echo nagare_workation_img( 'p04-dock-dawn.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"nw-sliver__cap"} -->
<p class="nw-sliver__cap"><?php echo esc_html( nagare_workation_t( 'sliver_cap' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
