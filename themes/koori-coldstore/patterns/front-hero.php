<?php
/**
 * Title: Home: dock hero
 * Slug: koori-coldstore/front-hero
 * Categories: koori-coldstore
 * Keywords: cold storage, warehouse, logistics
 * Viewport Width: 1440
 * Description: Full-bleed cross-fading dock photographs with a bottom-left catch line, a tilted line crossing its foot and a ring pager with a boxed pause.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"kc-hero kc-slider kc-slider--3 sp-parallax","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull kc-hero kc-slider kc-slider--3 sp-parallax"><!-- wp:group {"className":"kc-slides sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group kc-slides sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-slide kc-slide--1"} -->
<figure class="wp-block-image size-full kc-slide kc-slide--1"><img src="<?php echo koori_coldstore_img( 'hero-probe.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_k01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<figure class="kc-slide kc-slide--2" aria-hidden="true"><img src="<?php echo koori_coldstore_img( 'hero-aisle.webp' ); ?>" alt="" decoding="async"/></figure>
<!-- /wp:html -->

<!-- wp:html -->
<figure class="kc-slide kc-slide--3" aria-hidden="true"><img src="<?php echo koori_coldstore_img( 'hero-door.webp' ); ?>" alt="" decoding="async"/></figure>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hero__inner","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__inner"><!-- wp:group {"className":"kc-hero__lockup","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__lockup"><!-- wp:paragraph {"className":"kc-kicker"} -->
<p class="kc-kicker"><?php echo esc_html( koori_coldstore_t( 'hero_kicker' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kc-h1"} -->
<h1 class="wp-block-heading kc-h1"><?php echo esc_html( koori_coldstore_t( 'hero_h1_a' ) ); ?><br><?php echo esc_html( koori_coldstore_t( 'hero_h1_b' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-tilt"} -->
<p class="kc-tilt"><?php echo esc_html( koori_coldstore_t( 'hero_tilt' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="kc-pager"><span class="kc-pager__dots" aria-hidden="true"><span class="kc-dot kc-dot--1"><svg class="kc-ring" viewBox="0 0 33 33" width="33" height="33" focusable="false"><circle cx="16.5" cy="16.5" r="14.5"/></svg></span><span class="kc-dot kc-dot--2"><svg class="kc-ring" viewBox="0 0 33 33" width="33" height="33" focusable="false"><circle cx="16.5" cy="16.5" r="14.5"/></svg></span><span class="kc-dot kc-dot--3"><svg class="kc-ring" viewBox="0 0 33 33" width="33" height="33" focusable="false"><circle cx="16.5" cy="16.5" r="14.5"/></svg></span></span><button class="kc-pager__pause" type="button" aria-pressed="false" aria-label="<?php echo esc_attr( koori_coldstore_t( 'pager_pause' ) ); ?>" data-pause="<?php echo esc_attr( koori_coldstore_t( 'pager_pause' ) ); ?>" data-play="<?php echo esc_attr( koori_coldstore_t( 'pager_play' ) ); ?>"><i class="kc-pager__bar"></i><i class="kc-pager__bar"></i><i class="kc-pager__tri"></i></button></div>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
