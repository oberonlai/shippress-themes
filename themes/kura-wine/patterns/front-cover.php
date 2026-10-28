<?php
/**
 * Title: Home: cover
 * Slug: kura-wine/front-cover
 * Categories: kura-wine
 * Keywords: wine, shop, merchant
 * Viewport Width: 1440
 * Description: Full-bleed film photograph that cross-fades through three slides, one quiet line bottom-left and an info bar.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kw-kv sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kw-kv sp-parallax"><!-- wp:group {"className":"kw-kv__slides sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group kw-kv__slides sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kw-ph kw-ph--k1 kw-slide kw-slide--1"} -->
<figure class="wp-block-image size-full kw-ph kw-ph--k1 kw-slide kw-slide--1"><img src="<?php echo esc_url( kura_wine_img( 'K1' ) ); ?>" alt="<?php echo esc_attr( kura_wine_t( 'alt_K1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<figure class="kw-ph kw-ph--k2 kw-slide kw-slide--2" aria-hidden="true"><img src="<?php echo esc_url( kura_wine_img( 'K2' ) ); ?>" alt=""/></figure>
<!-- /wp:html -->

<!-- wp:html -->
<figure class="kw-ph kw-ph--k3 kw-slide kw-slide--3" aria-hidden="true"><img src="<?php echo esc_url( kura_wine_img( 'K3' ) ); ?>" alt=""/></figure>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kw-kv__fg","layout":{"type":"default"}} -->
<div class="wp-block-group kw-kv__fg"><!-- wp:heading {"level":1,"fontSize":"xx-large","className":"kw-kv__h1"} -->
<h1 class="wp-block-heading kw-kv__h1 has-xx-large-font-size"><?php echo esc_html( kura_wine_t( 'kv_h1_a' ) ); ?><br><?php echo esc_html( kura_wine_t( 'kv_h1_b' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"kw-kv__bar","layout":{"type":"default"}} -->
<div class="wp-block-group kw-kv__bar"><!-- wp:paragraph {"className":"kw-kv__item"} -->
<p class="kw-kv__item"><?php echo esc_html( kura_wine_t( 'kv_bar1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kw-kv__item"} -->
<p class="kw-kv__item"><?php echo esc_html( kura_wine_t( 'kv_bar2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kw-kv__item"} -->
<p class="kw-kv__item"><?php echo esc_html( kura_wine_t( 'kv_bar3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
