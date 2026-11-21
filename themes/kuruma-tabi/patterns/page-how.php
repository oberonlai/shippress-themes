<?php
/**
 * Title: Page: how planning works
 * Slug: kuruma-tabi/page-how
 * Categories: kuruma-tabi
 * Inserter: no
 * Viewport Width: 1440
 * Description: How it works: split head with a five-step timeline foot and three mirrored rows.
 */
?>
<!-- wp:group {"tagName":"main","className":"kt-main","layout":{"type":"default"}} -->
<main class="wp-block-group kt-main"><!-- wp:group {"tagName":"section","align":"full","className":"kt-hero kt-hero--page kt-hero--foot","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-hero kt-hero--page kt-hero--foot"><!-- wp:group {"className":"kt-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__text"><!-- wp:heading {"level":1,"className":"kt-h1"} -->
<h1 class="wp-block-heading kt-h1"><span class="kt-w" style="--i:0"><?php echo esc_html( kuruma_tabi_t( 'hw_h1' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-lede"} -->
<p class="kt-lede"><?php echo esc_html( kuruma_tabi_t( 'hw_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'hero-viewpoint.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-hero__tab","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__tab"><!-- wp:paragraph {"className":"kt-tab"} -->
<p class="kt-tab"><a href="<?php echo esc_url( home_url( '/request/' ) ); ?>"><?php echo esc_html( kuruma_tabi_t( 'cta' ) ); ?> <span aria-hidden="true">→</span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-hero__bar","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__bar"><!-- wp:group {"className":"kt-bar","layout":{"type":"default"}} -->
<div class="wp-block-group kt-bar"><!-- wp:paragraph {"className":"kt-bar__label"} -->
<p class="kt-bar__label"><?php echo esc_html( kuruma_tabi_t( 'hw_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ol class="kt-stops"><li class="kt-stop is-now" style="--i:0"><span class="kt-stop__t"><?php echo esc_html( kuruma_tabi_t( 'hw_s1_t' ) ); ?></span><span class="kt-stop__p"><?php echo esc_html( kuruma_tabi_t( 'hw_s1_p' ) ); ?></span></li><li class="kt-stop" style="--i:1"><span class="kt-stop__t"><?php echo esc_html( kuruma_tabi_t( 'hw_s2_t' ) ); ?></span><span class="kt-stop__p"><?php echo esc_html( kuruma_tabi_t( 'hw_s2_p' ) ); ?></span></li><li class="kt-stop" style="--i:2"><span class="kt-stop__t"><?php echo esc_html( kuruma_tabi_t( 'hw_s3_t' ) ); ?></span><span class="kt-stop__p"><?php echo esc_html( kuruma_tabi_t( 'hw_s3_p' ) ); ?></span></li><li class="kt-stop" style="--i:3"><span class="kt-stop__t"><?php echo esc_html( kuruma_tabi_t( 'hw_s4_t' ) ); ?></span><span class="kt-stop__p"><?php echo esc_html( kuruma_tabi_t( 'hw_s4_p' ) ); ?></span></li><li class="kt-stop" style="--i:4"><span class="kt-stop__t"><?php echo esc_html( kuruma_tabi_t( 'hw_s5_t' ) ); ?></span><span class="kt-stop__p"><?php echo esc_html( kuruma_tabi_t( 'hw_s5_p' ) ); ?></span></li></ol>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kt-sec kt-sec--pb","layout":{"type":"default"},"anchor":"stages"} -->
<section id="stages" class="wp-block-group alignfull kt-sec kt-sec--pb"><!-- wp:group {"className":"kt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap"><!-- wp:group {"className":"kt-head","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head"><!-- wp:html -->
<span class="kt-emblem"><?php echo kuruma_tabi_icon( 'wheel' ); ?></span>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kuruma_tabi_t( 'hw_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-sub"} -->
<p class="kt-sub"><?php echo esc_html( kuruma_tabi_t( 'hw_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-rows","layout":{"type":"default"}} -->
<div class="wp-block-group kt-rows"><!-- wp:group {"className":"kt-row","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row"><!-- wp:group {"className":"kt-row__text sp-reveal sp-reveal--left","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row__text sp-reveal sp-reveal--left"><!-- wp:heading {"level":3,"className":"kt-h3"} -->
<h3 class="wp-block-heading kt-h3"><?php echo esc_html( kuruma_tabi_t( 'hw_1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-p"} -->
<p class="kt-p"><?php echo esc_html( kuruma_tabi_t( 'hw_1_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-more"} -->
<p class="kt-more"><a href="<?php echo esc_url( home_url( '/request/' ) ); ?>">→ <?php echo esc_html( kuruma_tabi_t( 'cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-row__media sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row__media sp-reveal sp-reveal--up"><!-- wp:html -->
<span class="kt-seam kt-seam--map" aria-hidden="true"><?php echo kuruma_tabi_icon( 'map' ); ?></span>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'map-on-dashboard.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-row kt-row--mirror","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row kt-row--mirror"><!-- wp:group {"className":"kt-row__media sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row__media sp-reveal sp-reveal--up"><!-- wp:html -->
<span class="kt-seam kt-seam--camera" aria-hidden="true"><?php echo kuruma_tabi_icon( 'camera' ); ?></span>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'driver-mirror-check.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-row__text sp-reveal sp-reveal--left","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row__text sp-reveal sp-reveal--left"><!-- wp:heading {"level":3,"className":"kt-h3"} -->
<h3 class="wp-block-heading kt-h3"><?php echo esc_html( kuruma_tabi_t( 'hw_2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-p"} -->
<p class="kt-p"><?php echo esc_html( kuruma_tabi_t( 'hw_2_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-more"} -->
<p class="kt-more"><a href="<?php echo esc_url( home_url( '/request/' ) ); ?>">→ <?php echo esc_html( kuruma_tabi_t( 'cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-row kt-row--tall","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row kt-row--tall"><!-- wp:group {"className":"kt-row__text sp-reveal sp-reveal--left","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row__text sp-reveal sp-reveal--left"><!-- wp:heading {"level":3,"className":"kt-h3"} -->
<h3 class="wp-block-heading kt-h3"><?php echo esc_html( kuruma_tabi_t( 'hw_3_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-p"} -->
<p class="kt-p"><?php echo esc_html( kuruma_tabi_t( 'hw_3_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-more"} -->
<p class="kt-more"><a href="<?php echo esc_url( home_url( '/request/' ) ); ?>">→ <?php echo esc_html( kuruma_tabi_t( 'cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-row__media sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row__media sp-reveal sp-reveal--up"><!-- wp:html -->
<span class="kt-seam kt-seam--binoculars" aria-hidden="true"><?php echo kuruma_tabi_icon( 'binoculars' ); ?></span>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'lakeside-walk.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"kuruma-tabi/inner-cta"} /-->
</main>
<!-- /wp:group -->
