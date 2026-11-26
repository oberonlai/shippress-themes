<?php
/**
 * Title: Home: framed window hero
 * Slug: kaoru-cocoa/front-hero
 * Categories: kaoru-cocoa
 * Keywords: hero, window, parallax, strips
 * Viewport Width: 1440
 * Description: A centred framed photo window on white with three dotted vertical phrase strips hanging beside it; below it a scribble mark, the headline, lede, buttons, hours and a logo row of bean origins.
 */
?>
<!-- wp:group {"align":"full","anchor":"top","className":"kc-hero","layout":{"type":"default"}} -->
<div id="top" class="wp-block-group alignfull kc-hero"><!-- wp:group {"className":"kc-window","layout":{"type":"default"}} -->
<div class="wp-block-group kc-window"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-window__photo sp-parallax"} -->
<figure class="wp-block-image size-full kc-window__photo sp-parallax"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-ribbon-slab.webp' ) ); ?>" alt="<?php echo esc_attr( kaoru_cocoa_t( 'af7a5c6c3' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-strips","layout":{"type":"default"}} -->
<div class="wp-block-group kc-strips"><!-- wp:paragraph {"className":"kc-strip kc-strip--1"} -->
<p class="kc-strip kc-strip--1"><?php echo wp_kses_post( kaoru_cocoa_t( 'ke00fbc3d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-strip kc-strip--2"} -->
<p class="kc-strip kc-strip--2"><?php echo wp_kses_post( kaoru_cocoa_t( 'k2774f3f1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-strip kc-strip--3"} -->
<p class="kc-strip kc-strip--3"><?php echo wp_kses_post( kaoru_cocoa_t( 'kc2fd6a2a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__text"><!-- wp:html -->
<svg class="kc-mark" viewBox="0 0 116 56" width="116" height="56" role="img" aria-label="A hand-drawn tempering curve: melt, cool, rewarm" focusable="false" fill="none" stroke-linecap="round" stroke-linejoin="round"><path pathLength="1" d="M5 42 C9 12 30 8 37 27 C41 40 25 47 22 35 C19 25 39 14 53 23" stroke="#333333" stroke-width="1"/><path pathLength="1" d="M53 23 C66 31 67 47 79 41 C90 36 86 18 77 22 C68 26 81 45 93 38" stroke="#333333" stroke-width="1"/><path pathLength="1" d="M88 15 C98 3 113 9 109 22 C105 33 90 29 94 19 C97 12 108 14 110 21" stroke="#B5472A" stroke-width="1.25"/></svg>
<!-- /wp:html -->

<!-- wp:heading {"level":1,"className":"kc-h1"} -->
<h1 class="wp-block-heading kc-h1"><?php echo wp_kses_post( kaoru_cocoa_t( 'k890e7168' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-lede"} -->
<p class="kc-lede"><?php echo wp_kses_post( kaoru_cocoa_t( 'kce7f9648' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kc-btns"} -->
<div class="wp-block-buttons kc-btns"><!-- wp:button {"className":"kc-btn kc-btn--primary"} -->
<div class="wp-block-button kc-btn kc-btn--primary"><a class="wp-block-button__link wp-element-button" href="/tasting/#book"><?php echo wp_kses_post( kaoru_cocoa_t( 'k6f917d2c' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"kc-btn kc-btn--pill"} -->
<div class="wp-block-button kc-btn kc-btn--pill"><a class="wp-block-button__link wp-element-button" href="/cake-orders/"><?php echo wp_kses_post( kaoru_cocoa_t( 'k517d583c' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"kc-hours"} -->
<p class="kc-hours"><?php echo wp_kses_post( kaoru_cocoa_t( 'kb5f81dc5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-logorow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-logorow"><!-- wp:paragraph {"className":"kc-logorow__label"} -->
<p class="kc-logorow__label"><?php echo wp_kses_post( kaoru_cocoa_t( 'k74abf4da' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-logorow__name"} -->
<p class="kc-logorow__name"><?php echo wp_kses_post( kaoru_cocoa_t( 'k11547c5c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-logorow__name"} -->
<p class="kc-logorow__name"><?php echo wp_kses_post( kaoru_cocoa_t( 'kcbbbc83b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-logorow__name"} -->
<p class="kc-logorow__name"><?php echo wp_kses_post( kaoru_cocoa_t( 'k3e9e356f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-logorow__name"} -->
<p class="kc-logorow__name"><?php echo wp_kses_post( kaoru_cocoa_t( 'k9668e938' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-logorow__name"} -->
<p class="kc-logorow__name"><?php echo wp_kses_post( kaoru_cocoa_t( 'kd5141915' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
