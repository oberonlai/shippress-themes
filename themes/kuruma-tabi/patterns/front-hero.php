<?php
/**
 * Title: Home: split hero with timeline foot
 * Slug: kuruma-tabi/front-hero
 * Categories: kuruma-tabi
 * Viewport Width: 1440
 * Description: Split hero: text column at the left, the photograph in the right half (parallax), a white tab and an evergreen day-timeline bar flush to the bottom.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kt-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-hero"><!-- wp:group {"className":"kt-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__text"><!-- wp:heading {"level":1,"className":"kt-h1"} -->
<h1 class="wp-block-heading kt-h1"><span class="kt-w" style="--i:0"><?php echo esc_html( kuruma_tabi_t( 'h1_l1' ) ); ?></span><span class="kt-w" style="--i:1"><?php echo esc_html( kuruma_tabi_t( 'h1_l2' ) ); ?></span><span class="kt-w" style="--i:2"><?php echo esc_html( kuruma_tabi_t( 'h1_l3' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-lede"} -->
<p class="kt-lede"><?php echo esc_html( kuruma_tabi_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-langs"} -->
<p class="kt-langs"><?php echo esc_html( kuruma_tabi_t( 'hero_langs' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'hero-viewpoint.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-hero__tab","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__tab"><!-- wp:paragraph {"className":"kt-tab"} -->
<p class="kt-tab"><a href="#request"><?php echo esc_html( kuruma_tabi_t( 'cta' ) ); ?> <span aria-hidden="true">→</span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-hero__bar","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__bar"><!-- wp:group {"className":"kt-bar","layout":{"type":"default"}} -->
<div class="wp-block-group kt-bar"><!-- wp:paragraph {"className":"kt-bar__label"} -->
<p class="kt-bar__label"><?php echo esc_html( kuruma_tabi_t( 'bar_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ol class="kt-stops"><li class="kt-stop" style="--i:0"><span class="kt-stop__t"><?php echo esc_html( kuruma_tabi_t( 'stop1_t' ) ); ?></span><span class="kt-stop__p"><?php echo esc_html( kuruma_tabi_t( 'stop1_p' ) ); ?></span></li><li class="kt-stop is-now" style="--i:1"><span class="kt-stop__t"><?php echo esc_html( kuruma_tabi_t( 'stop2_t' ) ); ?></span><span class="kt-stop__p"><?php echo esc_html( kuruma_tabi_t( 'stop2_p' ) ); ?></span></li><li class="kt-stop" style="--i:2"><span class="kt-stop__t"><?php echo esc_html( kuruma_tabi_t( 'stop3_t' ) ); ?></span><span class="kt-stop__p"><?php echo esc_html( kuruma_tabi_t( 'stop3_p' ) ); ?></span></li><li class="kt-stop" style="--i:3"><span class="kt-stop__t"><?php echo esc_html( kuruma_tabi_t( 'stop4_t' ) ); ?></span><span class="kt-stop__p"><?php echo esc_html( kuruma_tabi_t( 'stop4_p' ) ); ?></span></li><li class="kt-stop" style="--i:4"><span class="kt-stop__t"><?php echo esc_html( kuruma_tabi_t( 'stop5_t' ) ); ?></span><span class="kt-stop__p"><?php echo esc_html( kuruma_tabi_t( 'stop5_p' ) ); ?></span></li></ol>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"kt-bar__go"} -->
<p class="kt-bar__go"><a href="#day" aria-label="<?php echo kuruma_tabi_a( 'bar_go' ); ?>">→</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
