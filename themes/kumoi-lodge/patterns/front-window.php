<?php
/**
 * Title: Home: framed window
 * Slug: kumoi-lodge/front-window
 * Categories: kumoi-lodge
 * Keywords: lodge, home
 * Viewport Width: 1440
 * Description: First screen: a rounded photo window inset in the lichen ground with the centred serif wordmark, a Scroll cue and an info bar with two hairline rules and an ember ring.
 */
?>
<!-- wp:group {"className":"km-hero","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull km-hero"><!-- wp:group {"className":"km-window sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group km-window sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"km-window__img"} -->
<figure class="wp-block-image size-full km-window__img"><img src="<?php echo kumoi_lodge_img( 'kl-h1' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" alt="<?php echo esc_attr( kumoi_lodge_t( 'alt_h1' ) ); ?>" fetchpriority="high"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"km-mark","layout":{"type":"default"}} -->
<div class="wp-block-group km-mark"><!-- wp:heading {"level":1,"className":"km-mark__name"} -->
<h1 class="wp-block-heading km-mark__name"><?php kumoi_lodge_e( 'wordmark' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"km-mark__sub"} -->
<p class="km-mark__sub"><?php kumoi_lodge_e( 'sub' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:html -->
<span class="km-scroll" aria-hidden="true"><?php kumoi_lodge_e( 'scroll' ); ?><i></i></span>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"km-info","layout":{"type":"default"}} -->
<div class="wp-block-group km-info"><!-- wp:group {"className":"km-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group km-info__cell"><!-- wp:paragraph {"className":"km-label"} -->
<p class="km-label"><?php kumoi_lodge_e( 'info_l1' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"km-info__v"} -->
<p class="km-info__v"><?php kumoi_lodge_e( 'info_v1' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:html -->
<span class="km-vr" aria-hidden="true"></span>
<!-- /wp:html -->
<!-- wp:group {"className":"km-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group km-info__cell"><!-- wp:paragraph {"className":"km-label"} -->
<p class="km-label"><?php kumoi_lodge_e( 'info_l2' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"km-info__v"} -->
<p class="km-info__v"><?php kumoi_lodge_e( 'info_v2' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:html -->
<span class="km-vr" aria-hidden="true"></span>
<a class="km-ring" href="<?php echo esc_url( home_url( '/rates-and-booking/' ) ); ?>"><?php echo implode( '<br>', array_map( 'esc_html', explode( '|', kumoi_lodge_t( 'ring' ) ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?></a>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
