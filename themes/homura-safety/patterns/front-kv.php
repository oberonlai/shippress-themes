<?php
/**
 * Title: Home: slanted bar word over the photo
 * Slug: homura-safety/front-kv
 * Categories: homura-safety
 * Keywords: hero, bars, strip
 * Viewport Width: 1440
 * Description: A full-bleed low-key kitchen photograph (two stills that crossfade) with white slanted bars spelling CHECK, a tagline, one chestnut button and the docked four-cell link strip.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"hs-kv","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull hs-kv"><!-- wp:group {"align":"full","className":"hs-kv__stage sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hs-kv__stage sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hs-kv__still hs-kv__still--a"} -->
<figure class="wp-block-image size-full hs-kv__still hs-kv__still--a"><img src="<?php echo homura_safety_img( 'hs-01-kitchen-check' ); ?>" alt="<?php echo esc_attr( homura_safety_t( 'alt_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hs-kv__still hs-kv__still--b"} -->
<figure class="wp-block-image size-full hs-kv__still hs-kv__still--b"><img src="<?php echo homura_safety_img( 'hs-02-kitchen-tag' ); ?>" alt="<?php echo esc_attr( homura_safety_t( 'alt_02' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-kv__bars","layout":{"type":"default"}} -->
<div class="wp-block-group hs-kv__bars"><!-- wp:paragraph {"className":"hs-barword"} -->
<p class="hs-barword"><?php echo esc_html( homura_safety_t( 'kv_word' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hs-bar","layout":{"type":"default"}} -->
<div class="wp-block-group hs-bar"></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hs-barword hs-barword--bang"} -->
<p class="hs-barword hs-barword--bang"><?php echo esc_html( homura_safety_t( 'kv_bang' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hs-kv__copy","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-kv__copy"><!-- wp:group {"className":"hs-kv__cta","layout":{"type":"default"}} -->
<div class="wp-block-group hs-kv__cta"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hs-btn hs-btn--arrow"} -->
<div class="wp-block-button hs-btn hs-btn--arrow"><a class="wp-block-button__link wp-element-button" href="#book"><?php echo esc_html( homura_safety_t( 'kv_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"hs-kv__progress","layout":{"type":"default"}} -->
<div class="wp-block-group hs-kv__progress"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"className":"hs-kv__tag"} -->
<h1 class="wp-block-heading hs-kv__tag"><?php echo esc_html( homura_safety_t( 'kv_tag' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"nav","align":"full","className":"hs-strip-wrap","layout":{"type":"default"}} -->
<nav class="wp-block-group alignfull hs-strip-wrap" aria-label="<?php echo esc_attr( homura_safety_t( 'st_label' ) ); ?>"><!-- wp:group {"align":"wide","className":"hs-strip","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-strip"><!-- wp:paragraph {"className":"hs-strip__cell hs-strip__cell--1"} -->
<p class="hs-strip__cell hs-strip__cell--1"><a href="#scope"><?php echo esc_html( homura_safety_t( 'st_1' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-strip__cell hs-strip__cell--2"} -->
<p class="hs-strip__cell hs-strip__cell--2"><a href="#findings"><?php echo esc_html( homura_safety_t( 'st_2' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-strip__cell hs-strip__cell--3"} -->
<p class="hs-strip__cell hs-strip__cell--3"><a href="#fees"><?php echo esc_html( homura_safety_t( 'st_3' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-strip__cell hs-strip__cell--4"} -->
<p class="hs-strip__cell hs-strip__cell--4"><a href="#book"><?php echo esc_html( homura_safety_t( 'st_4' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></nav>
<!-- /wp:group -->
