<?php
/**
 * Title: Home: hero
 * Slug: waku-exhibits/front-hero
 * Categories: waku-exhibits
 * Keywords: exhibition, stand, quote, landing
 * Viewport Width: 1440
 * Description: Full-bleed hall photo on a slow parallax, three-line white headline lower left, sub-line and the orange floor tape drawing across once on load.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-hero.webp' ) ); ?>","alt":"<?php echo esc_attr( wk_t( 'alt_p01' ) ); ?>","dimRatio":0,"isDark":false,"align":"full","className":"wk-hero sp-parallax"} -->
<div class="wp-block-cover alignfull is-light wk-hero sp-parallax"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( wk_t( 'alt_p01' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-hero.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"className":"wk-hero__h"} -->
<h1 class="wp-block-heading wk-hero__h"><?php echo wk_lines( 'hero_h' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-hero__sub"} -->
<p class="wk-hero__sub"><?php echo esc_html( wk_t( 'hero_sub' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"width":"64px","sizeSlug":"full","linkDestination":"none","className":"wk-dot wk-dot--hero"} -->
<figure class="wp-block-image size-full is-resized wk-dot wk-dot--hero"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/halftone.svg' ) ); ?>" alt="" style="width:64px"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<div class="wk-tape" aria-hidden="true"></div>
<!-- /wp:html --></div></div>
<!-- /wp:cover -->
