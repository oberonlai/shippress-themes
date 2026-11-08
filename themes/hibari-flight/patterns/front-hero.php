<?php
/**
 * Title: Home: photo window
 * Slug: hibari-flight/front-hero
 * Categories: hibari-flight
 * Keywords: flight school, pilot, aviation
 * Viewport Width: 1440
 * Description: One photo window with a single big top-right corner, the headline lying on the photo, drawn larks on its edges and the field board below.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hf-sec hf-hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hf-sec hf-hero"><!-- wp:html -->
<div class="hf-blob hf-blob--board" aria-hidden="true"></div>
<!-- /wp:html --><!-- wp:group {"align":"wide","className":"hf-hero__stage","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hf-hero__stage"><!-- wp:group {"className":"hf-hero__win sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group hf-hero__win sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hf-hero__img"} -->
<figure class="wp-block-image size-full hf-hero__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h01.webp' ) ); ?>" alt="<?php echo esc_attr( hibari_flight_t( 'a75b2b45d' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:group {"className":"hf-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group hf-hero__copy"><!-- wp:heading {"level":1,"className":"hf-hero__h1"} -->
<h1 class="wp-block-heading hf-hero__h1"><?php echo wp_kses_post( hibari_flight_t( 'k724fcc73' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:paragraph {"className":"hf-hero__sub"} -->
<p class="hf-hero__sub"><?php echo wp_kses_post( hibari_flight_t( 'kc0056a0f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"hf-pill hf-hero__pill"} -->
<p class="hf-pill hf-hero__pill"><a href="/trial-flight/"><?php echo wp_kses_post( hibari_flight_t( 'kcbf60688' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hf-sticker hf-sticker--hero-lark"} -->
<figure class="wp-block-image size-full hf-sticker hf-sticker--hero-lark"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/stickers/lark-perched.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image --><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hf-sticker hf-sticker--hero-sock"} -->
<figure class="wp-block-image size-full hf-sticker hf-sticker--hero-sock"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/stickers/windsock.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image --><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hf-sticker hf-sticker--hero-headset"} -->
<figure class="wp-block-image size-full hf-sticker hf-sticker--hero-headset"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/stickers/headset.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"align":"wide","className":"hf-board","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hf-board"><!-- wp:paragraph {"className":"hf-label"} -->
<p class="hf-label"><?php echo wp_kses_post( hibari_flight_t( 'kcf43b4a8' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"hf-board__rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hf-board__rows sp-stagger"><!-- wp:group {"className":"hf-board__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hf-board__row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hf-board__date"} -->
<p class="hf-board__date">2026.11.15</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hf-board__title"} -->
<p class="hf-board__title"><?php echo wp_kses_post( hibari_flight_t( 'kca757d89' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hf-board__go"} -->
<p class="hf-board__go"><a href="/trial-flight/" aria-label="<?php echo esc_attr( hibari_flight_t( 'a3ec365dd' ) ); ?>">→</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"hf-board__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hf-board__row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hf-board__date"} -->
<p class="hf-board__date">2026.12.02</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hf-board__title"} -->
<p class="hf-board__title"><?php echo wp_kses_post( hibari_flight_t( 'k83615aef' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hf-board__go"} -->
<p class="hf-board__go"><a href="/trial-flight/" aria-label="<?php echo esc_attr( hibari_flight_t( 'a3ec365dd' ) ); ?>">→</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"hf-board__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hf-board__row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hf-board__date"} -->
<p class="hf-board__date"><?php echo wp_kses_post( hibari_flight_t( 'k57714ceb' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hf-board__title"} -->
<p class="hf-board__title"><?php echo wp_kses_post( hibari_flight_t( 'kef2dcd17' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hf-board__go"} -->
<p class="hf-board__go"><a href="/trial-flight/" aria-label="<?php echo esc_attr( hibari_flight_t( 'a3ec365dd' ) ); ?>">→</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
