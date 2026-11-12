<?php
/**
 * Title: Home: photo melting into paper
 * Slug: himuro-gelato/front-kv
 * Categories: himuro-gelato
 * Viewport Width: 1440
 * Description: Full-bleed film-grain photograph whose lower third melts into paper, a pale full-width wordmark across the top, a letter-by-letter entrance, a three-photo cross-fade with a counter, and a gentle parallax drift.
 */
?>
<!-- wp:group {"className":"hg-kv","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hg-kv"><!-- wp:group {"className":"hg-kv__stage sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group hg-kv__stage sp-parallax"><!-- wp:group {"className":"hg-kv__layer sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group hg-kv__layer sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-kv__img hg-kv__img--1"} -->
<figure class="wp-block-image size-full hg-kv__img hg-kv__img--1"><img src="<?php echo himuro_gelato_img( 'h01' ); ?>" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_h01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-kv__img hg-kv__img--2"} -->
<figure class="wp-block-image size-full hg-kv__img hg-kv__img--2"><img src="<?php echo himuro_gelato_img( 'h02' ); ?>" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_h02' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-kv__img hg-kv__img--3"} -->
<figure class="wp-block-image size-full hg-kv__img hg-kv__img--3"><img src="<?php echo himuro_gelato_img( 'h03' ); ?>" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_h03' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-kv__in","layout":{"type":"default"}} -->
<div class="wp-block-group hg-kv__in"><!-- wp:heading {"level":1,"className":"hg-kv__word"} -->
<h1 class="wp-block-heading hg-kv__word"><span class="hg-w"><span style="--i:0">H</span><span style="--i:1">i</span><span style="--i:2">m</span><span style="--i:3">u</span><span style="--i:4">r</span><span style="--i:5">o</span></span> <span class="hg-w"><span style="--i:7">G</span><span style="--i:8">e</span><span style="--i:9">l</span><span style="--i:10">a</span><span style="--i:11">t</span><span style="--i:12">o</span></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hg-kv__tag"} -->
<p class="hg-kv__tag"><?php echo esc_html( himuro_gelato_t( 'kv_tag' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-kv__count"} -->
<p class="hg-kv__count"><span class="hg-kv__steps" aria-hidden="true"><span>01</span><span>02</span><span>03</span></span><span class="hg-kv__bar" aria-hidden="true"></span><span class="hg-kv__total" aria-hidden="true">03</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
