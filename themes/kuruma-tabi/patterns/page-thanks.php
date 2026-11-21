<?php
/**
 * Title: Page: thanks
 * Slug: kuruma-tabi/page-thanks
 * Categories: kuruma-tabi
 * Inserter: no
 * Viewport Width: 1440
 * Description: Thanks page: split head, a short note and two links.
 */
?>
<!-- wp:group {"tagName":"main","className":"kt-main","layout":{"type":"default"}} -->
<main class="wp-block-group kt-main"><!-- wp:group {"tagName":"section","align":"full","className":"kt-hero kt-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-hero kt-hero--page"><!-- wp:group {"className":"kt-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__text"><!-- wp:heading {"level":1,"className":"kt-h1"} -->
<h1 class="wp-block-heading kt-h1"><span class="kt-w" style="--i:0"><?php echo esc_html( kuruma_tabi_t( 'th_h1' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-lede"} -->
<p class="kt-lede"><?php echo esc_html( kuruma_tabi_t( 'th_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'guide-waving-van.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p14' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kt-sec kt-sec--pb","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-sec kt-sec--pb"><!-- wp:group {"className":"kt-wrap kt-wrap--narrow","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap kt-wrap--narrow"><!-- wp:paragraph {"className":"kt-p kt-p--w"} -->
<p class="kt-p kt-p--w"><?php echo esc_html( kuruma_tabi_t( 'th_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kt-btns","layout":{"type":"flex"}} -->
<div class="wp-block-buttons kt-btns"><!-- wp:button {"className":"kt-btn"} -->
<div class="wp-block-button kt-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/itineraries/' ) ); ?>"><?php echo esc_html( kuruma_tabi_t( 'th_b1' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"kt-btn kt-btn--line"} -->
<div class="wp-block-button kt-btn kt-btn--line"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/fares/' ) ); ?>"><?php echo esc_html( kuruma_tabi_t( 'th_b2' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
</main>
<!-- /wp:group -->
