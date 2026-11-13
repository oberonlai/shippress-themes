<?php
/**
 * Title: Home: hero
 * Slug: noka-cheese/front-hero
 * Categories: noka-cheese
 * Viewport Width: 1440
 * Description: Stacked headline and wedge line drawing resolve from blur beside a double-rim pebble photograph.
 */
?>
<!-- wp:group {"className":"nk-hero","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-hero"><!-- wp:html -->
<a class="nk-vpill" href="/boards/"><span><?php echo wp_kses_post( noka_cheese_t( 'cta_pill_vertical' ) ); ?></span></a>
<!-- /wp:html -->

<!-- wp:group {"className":"nk-row nk-row--hero","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nk-row nk-row--hero"><!-- wp:group {"className":"nk-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group nk-hero__text"><!-- wp:paragraph {"className":"nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo wp_kses_post( noka_cheese_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"nk-h1"} -->
<h1 class="wp-block-heading nk-h1"><?php echo wp_kses_post( noka_cheese_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nk-lead"} -->
<p class="nk-lead"><?php echo wp_kses_post( noka_cheese_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"nk-pills"} -->
<div class="wp-block-buttons nk-pills"><!-- wp:button {"className":"nk-pill nk-pill--solid"} -->
<div class="wp-block-button nk-pill nk-pill--solid"><a class="wp-block-button__link wp-element-button" href="/boards/"><?php echo wp_kses_post( noka_cheese_t( 'cta_reserve_arrow' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"nk-note"} -->
<p class="nk-note"><?php echo wp_kses_post( noka_cheese_t( 'hero_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nk-hero__stage","layout":{"type":"default"}} -->
<div class="wp-block-group nk-hero__stage"><!-- wp:html -->
<svg class="nk-hero__glyph" viewBox="0 0 400 420" width="380" height="399" aria-hidden="true" focusable="false" fill="none" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M60 210 L322 106 Q356 170 338 238 Z"/><path d="M60 210 V332 H338 V238"/><path d="M60 332 Q200 350 338 332" opacity="0"/><path d="M60 278 L338 296"/><circle cx="36" cy="276" r="8"/><circle cx="362" cy="297" r="8"/></svg>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nk-pebble nk-pebble--a nk-hero__pebble sp-parallax"} -->
<figure class="wp-block-image size-full nk-pebble nk-pebble--a nk-hero__pebble sp-parallax"><img src="<?php echo noka_cheese_img( 'hero-wire-cut.webp' ); ?>" alt="<?php echo esc_attr( noka_cheese_t( 'alt_hero' ) ); ?>" width="1600" height="1600"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
