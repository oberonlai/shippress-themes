<?php
/**
 * Title: Home: the bakehouse at 06:15 (full-bleed photograph, edge tabs, info bar)
 * Slug: mugi-bakehouse/front-hero
 * Categories: mugi-bakehouse
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"mb-hero sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mb-hero sp-parallax"><!-- wp:group {"className":"sp-parallax__layer mb-hero__frames","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer mb-hero__frames"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"mb-frame mb-frame\u002d\u002doven"} -->
<figure class="wp-block-image size-full mb-frame mb-frame--oven"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1-oven-peel.webp' ) ); ?>" alt="<?php echo esc_attr( mugi_bakehouse_t( 'a48b11835' ) ); ?>" style="aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"mb-frame mb-frame\u002d\u002dbench"} -->
<figure class="wp-block-image size-full mb-frame mb-frame--bench"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h2-bench-flour.webp' ) ); ?>" alt="<?php echo esc_attr( mugi_bakehouse_t( 'a430e53e4' ) ); ?>" style="aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mb-hero__mark","layout":{"type":"default"}} -->
<div class="wp-block-group mb-hero__mark"><!-- wp:html -->
<svg class="mb-emblem" width="56" height="56" viewBox="0 0 56 56" fill="none" stroke="#6B4540" stroke-width="1.2" aria-hidden="true" focusable="false"><path d="M28 54V16"/><path d="M28 12c-3.5-3-3.5-7 0-10 3.5 3 3.5 7 0 10z"/><path d="M28 24 c-8 -1 -12 -6 -12 -11 c8 1 12 6 12 11z"/><path d="M28 24 c8 -1 12 -6 12 -11 c-8 1 -12 6 -12 11z"/><path d="M28 33 c-8 -1 -12 -6 -12 -11 c8 1 12 6 12 11z"/><path d="M28 33 c8 -1 12 -6 12 -11 c-8 1 -12 6 -12 11z"/><path d="M28 42 c-8 -1 -12 -6 -12 -11 c8 1 12 6 12 11z"/><path d="M28 42 c8 -1 12 -6 12 -11 c-8 1 -12 6 -12 11z"/><path d="M28 50c-5 0-8-3-9-6 5 0 8 2 9 6z"/><path d="M28 50c5 0 8-3 9-6-5 0-8 2-9 6z"/></svg>
<!-- /wp:html -->

<!-- wp:heading {"level":1,"className":"mb-wordmark"} -->
<h1 class="wp-block-heading mb-wordmark"><span><?php echo wp_kses_post( mugi_bakehouse_t( 'k880fd1a4' ) ); ?></span> <span class="mb-outline"><?php echo wp_kses_post( mugi_bakehouse_t( 'k51638912' ) ); ?></span> <span><?php echo wp_kses_post( mugi_bakehouse_t( 'k49354b45' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mb-subtitle"} -->
<p class="mb-subtitle"><?php echo wp_kses_post( mugi_bakehouse_t( 'kdf26dca0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="mb-pill" role="group" aria-label="<?php echo esc_attr( mugi_bakehouse_t( 'a7ebe8373' ) ); ?>"><button type="button" class="is-active" data-frame="oven" aria-pressed="true"><?php echo wp_kses_post( mugi_bakehouse_t( 'k4826908c' ) ); ?></button><button type="button" data-frame="bench" aria-pressed="false"><?php echo wp_kses_post( mugi_bakehouse_t( 'k84926f5b' ) ); ?></button></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mb-hero__bar","layout":{"type":"default"}} -->
<div class="wp-block-group mb-hero__bar"><!-- wp:paragraph {"className":"mb-bar__i"} -->
<p class="mb-bar__i"><span class="mb-chip mb-chip--mint"><?php echo wp_kses_post( mugi_bakehouse_t( 'k40d179ee' ) ); ?></span> 07:00–15:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mb-bar__i"} -->
<p class="mb-bar__i"><?php echo wp_kses_post( mugi_bakehouse_t( 'k97998dcd' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mb-bar__i"} -->
<p class="mb-bar__i"><?php echo wp_kses_post( mugi_bakehouse_t( 'k01f719a9' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"mb-caps mb-caps\u002d\u002dbar"} -->
<div class="wp-block-buttons mb-caps mb-caps--bar"><!-- wp:button {"className":"is-style-outline mb-cap"} -->
<div class="wp-block-button is-style-outline mb-cap"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/loaves/' ) ); ?>"><?php echo wp_kses_post( mugi_bakehouse_t( 'k1296fcaa' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className":"is-style-outline mb-cap"} -->
<div class="wp-block-button is-style-outline mb-cap"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo wp_kses_post( mugi_bakehouse_t( 'kf4c6f851' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
