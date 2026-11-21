<?php
/**
 * Title: Page: about
 * Slug: kuruma-tabi/page-about
 * Categories: kuruma-tabi
 * Inserter: no
 * Viewport Width: 1440
 * Description: About page: split head, two route-style rows and a parallax photograph band with a solid white panel.
 */
?>
<!-- wp:group {"tagName":"main","className":"kt-main","layout":{"type":"default"}} -->
<main class="wp-block-group kt-main"><!-- wp:group {"tagName":"section","align":"full","className":"kt-hero kt-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-hero kt-hero--page"><!-- wp:group {"className":"kt-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__text"><!-- wp:heading {"level":1,"className":"kt-h1"} -->
<h1 class="wp-block-heading kt-h1"><span class="kt-w" style="--i:0"><?php echo esc_html( kuruma_tabi_t( 'ab_h1' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-lede"} -->
<p class="kt-lede"><?php echo esc_html( kuruma_tabi_t( 'ab_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'guide-waving-van.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p14' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kt-sec kt-sec--pb","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-sec kt-sec--pb"><!-- wp:group {"className":"kt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap"><!-- wp:group {"className":"kt-head","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head"><!-- wp:html -->
<span class="kt-emblem"><?php echo kuruma_tabi_icon( 'wheel' ); ?></span>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kuruma_tabi_t( 'ab_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-sub"} -->
<p class="kt-sub"><?php echo esc_html( kuruma_tabi_t( 'ab_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-rows","layout":{"type":"default"}} -->
<div class="wp-block-group kt-rows"><!-- wp:group {"className":"kt-row","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row"><!-- wp:group {"className":"kt-row__text sp-reveal sp-reveal--left","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row__text sp-reveal sp-reveal--left"><!-- wp:heading {"level":3,"className":"kt-h3"} -->
<h3 class="wp-block-heading kt-h3"><?php echo esc_html( kuruma_tabi_t( 'ab_1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-p"} -->
<p class="kt-p"><?php echo esc_html( kuruma_tabi_t( 'ab_1_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-more"} -->
<p class="kt-more"><a href="<?php echo esc_url( home_url( '/request/' ) ); ?>">→ <?php echo esc_html( kuruma_tabi_t( 'cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-row__media sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row__media sp-reveal sp-reveal--up"><!-- wp:html -->
<span class="kt-seam kt-seam--camera" aria-hidden="true"><?php echo kuruma_tabi_icon( 'camera' ); ?></span>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'driver-mirror-check.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kt-band","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-band"><!-- wp:group {"className":"kt-storyband sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kt-storyband sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'family-sunset-road.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p13' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kt-panel","layout":{"type":"default"}} -->
<div class="wp-block-group kt-panel"><!-- wp:paragraph {"className":"kt-panel__k"} -->
<p class="kt-panel__k"><?php echo esc_html( kuruma_tabi_t( 'ab_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kt-panel__h"} -->
<h3 class="wp-block-heading kt-panel__h"><?php echo esc_html( kuruma_tabi_t( 'ab_2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-panel__q kt-panel__q--s"} -->
<p class="kt-panel__q kt-panel__q--s"><?php echo esc_html( kuruma_tabi_t( 'ab_2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kt-sec kt-sec--pb","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-sec kt-sec--pb"><!-- wp:group {"className":"kt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap"><!-- wp:group {"className":"kt-rows","layout":{"type":"default"}} -->
<div class="wp-block-group kt-rows"><!-- wp:group {"className":"kt-row kt-row--mirror","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row kt-row--mirror"><!-- wp:group {"className":"kt-row__media sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row__media sp-reveal sp-reveal--up"><!-- wp:html -->
<span class="kt-seam kt-seam--map" aria-hidden="true"><?php echo kuruma_tabi_icon( 'map' ); ?></span>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'harbour-lunch.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-row__text sp-reveal sp-reveal--left","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row__text sp-reveal sp-reveal--left"><!-- wp:heading {"level":3,"className":"kt-h3"} -->
<h3 class="wp-block-heading kt-h3"><?php echo esc_html( kuruma_tabi_t( 'ab_3_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-p"} -->
<p class="kt-p"><?php echo esc_html( kuruma_tabi_t( 'ab_3_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-more"} -->
<p class="kt-more"><a href="<?php echo esc_url( home_url( '/request/' ) ); ?>">→ <?php echo esc_html( kuruma_tabi_t( 'cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"kuruma-tabi/inner-cta"} /-->
</main>
<!-- /wp:group -->
