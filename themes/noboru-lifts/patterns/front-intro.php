<?php
/**
 * Title: Home: intro
 * Slug: noboru-lifts/front-intro
 * Categories: noboru-lifts
 * Keywords: lift, inspection, landing
 * Viewport Width: 1440
 * Description: Three columns on paper: strip heading with an outline button, a portrait with a sideways tab, and short paragraphs.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"about","className":"nl-sec nl-intro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nl-sec nl-intro" id="about"><!-- wp:group {"className":"nl-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nl-wrap"><!-- wp:group {"className":"nl-intro__head","layout":{"type":"default"}} -->
<div class="wp-block-group nl-intro__head"><!-- wp:heading {"className":"nl-h2 nl-h2--xl"} -->
<h2 class="wp-block-heading nl-h2 nl-h2--xl"><span class="nl-strip"><?php echo wp_kses_post( noboru_lifts_t( 'k14cd5fc2' ) ); ?></span><br><span class="nl-strip"><?php echo wp_kses_post( noboru_lifts_t( 'k30705471' ) ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"nl-btnrow"} -->
<div class="wp-block-buttons nl-btnrow"><!-- wp:button {"className":"nl-btn"} -->
<div class="wp-block-button nl-btn"><a class="wp-block-button__link wp-element-button" href="/the-visit/"><?php echo wp_kses_post( noboru_lifts_t( 'kd7dc9222' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nl-portrait","layout":{"type":"default"}} -->
<div class="wp-block-group nl-portrait"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nl-portrait__img"} -->
<figure class="wp-block-image size-full nl-portrait__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p07-walk.webp' ) ); ?>" alt="<?php echo esc_attr( noboru_lifts_t( 'abf2d45bc' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"nl-vtab nl-vtab--about"} -->
<p class="nl-vtab nl-vtab--about"><?php echo wp_kses_post( noboru_lifts_t( 'k8f7f4c1c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nl-intro__text nl-body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nl-intro__text nl-body sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( noboru_lifts_t( 'k24d7049c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( noboru_lifts_t( 'kace7bbf0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( noboru_lifts_t( 'ka756b029' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
