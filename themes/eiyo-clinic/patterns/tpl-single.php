<?php
/**
 * Title: Template: single
 * Slug: eiyo-clinic/tpl-single
 * Categories: eiyo-clinic
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ec-main","layout":{"type":"default"}} -->
<main class="wp-block-group ec-main"><!-- wp:group {"tagName":"section","align":"full","className":"ec-ihsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ec-ihsec"><!-- wp:group {"className":"ec-ihead sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ec-ihead sp-parallax"><!-- wp:group {"className":"sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer"><!-- wp:post-featured-image {"aspectRatio":"auto"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-kvrow","layout":{"type":"default"}} -->
<div class="wp-block-group ec-kvrow"><!-- wp:post-title {"level":1,"className":"ec-h1 ec-single__title"} /-->

<!-- wp:group {"className":"ec-strip","layout":{"type":"default"}} -->
<div class="wp-block-group ec-strip"><!-- wp:post-date {"className":"ec-strip__day"} /-->

<!-- wp:paragraph {"className":"ec-strip__text"} -->
<p class="ec-strip__text"><a href="/journal/"><?php echo wp_kses_post( eiyo_clinic_t( 'ka3d343ab' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-single","layout":{"type":"default"}} -->
<div class="wp-block-group ec-single"><!-- wp:post-content {"layout":{"type":"default"}} /-->

<!-- wp:buttons {"className":"ec-chip"} -->
<div class="wp-block-buttons ec-chip"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( eiyo_clinic_t( 'k2787b65f' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
</main>
<!-- /wp:group -->