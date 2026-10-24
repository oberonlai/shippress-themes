<?php
/**
 * Title: Home: framed grid hero and index list
 * Slug: kosei-architects/front-hero
 * Categories: kosei-architects
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"ks-hero","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ks-hero"><!-- wp:group {"className":"ks-hero__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ks-hero__grid"><!-- wp:group {"className":"ks-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ks-hero__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-hero__img"} -->
<figure class="wp-block-image size-full ks-hero__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-timber-model.webp' ) ); ?>" alt="<?php echo esc_attr( kosei_architects_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"className":"ks-hero__bands","layout":{"type":"default"}} -->
<div class="wp-block-group ks-hero__bands"></div>
<!-- /wp:group --><!-- wp:group {"className":"ks-hero__cap","layout":{"type":"default"}} -->
<div class="wp-block-group ks-hero__cap"><!-- wp:paragraph {"className":"ks-cap"} -->
<p class="ks-cap"><?php echo esc_html( kosei_architects_t( 'hero_cap' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"ks-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-hero__text"><!-- wp:heading {"level":1,"className":"ks-hero__h1"} -->
<h1 class="wp-block-heading ks-hero__h1"><?php echo esc_html( kosei_architects_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:group {"className":"ks-progress","layout":{"type":"default"}} -->
<div class="wp-block-group ks-progress"><!-- wp:group {"className":"ks-progress__bar","layout":{"type":"default"}} -->
<div class="wp-block-group ks-progress__bar"></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"ks-index","layout":{"type":"default"}} -->
<div class="wp-block-group ks-index"><!-- wp:group {"className":"ks-index__row is-active","layout":{"type":"default"}} -->
<div class="wp-block-group ks-index__row is-active"><!-- wp:paragraph {"className":"ks-index__head"} -->
<p class="ks-index__head"><span class="ks-num">00</span> <?php echo esc_html( kosei_architects_t( 'ix0' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ks-index__text"} -->
<p class="ks-index__text"><?php echo esc_html( kosei_architects_t( 'hero_text' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ks-index__go"} -->
<p class="ks-index__go"><a class="ks-link" href="/projects/"><?php echo esc_html( kosei_architects_t( 'hero_cta' ) ); ?><span class="ks-arr" aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ks-index__row","layout":{"type":"default"}} -->
<div class="wp-block-group ks-index__row"><!-- wp:paragraph {"className":"ks-index__head"} -->
<p class="ks-index__head"><span class="ks-num">01</span> <?php echo esc_html( kosei_architects_t( 'ix1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ks-index__row","layout":{"type":"default"}} -->
<div class="wp-block-group ks-index__row"><!-- wp:paragraph {"className":"ks-index__head"} -->
<p class="ks-index__head"><span class="ks-num">02</span> <?php echo esc_html( kosei_architects_t( 'ix2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ks-index__row","layout":{"type":"default"}} -->
<div class="wp-block-group ks-index__row"><!-- wp:paragraph {"className":"ks-index__head"} -->
<p class="ks-index__head"><span class="ks-num">03</span> <?php echo esc_html( kosei_architects_t( 'ix3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
